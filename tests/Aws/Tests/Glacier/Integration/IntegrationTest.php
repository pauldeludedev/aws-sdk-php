<?php

namespace Aws\Tests\Glacier\Integration;

use Aws\Common\Enum\Size;
use Aws\Common\Exception\MultipartUploadException;
use Aws\Glacier\GlacierClient;
use Aws\Glacier\Model\MultipartUpload\AbstractTransfer as Transfer;
use Aws\Glacier\Model\MultipartUpload\UploadBuilder;
use Aws\Glacier\Model\MultipartUpload\UploadPart;
use Aws\Glacier\Model\MultipartUpload\UploadPartGenerator;
use Guzzle\Http\Client;
use Guzzle\Http\EntityBody;
use Guzzle\Http\ReadLimitEntityBody;
use Guzzle\Plugin\Log\LogPlugin;

/**
 * @group integration
 */
class IntegrationTest extends \Aws\Tests\IntegrationTestCase
{
    const TEST_VAULT = 'php-test-vault';

    /**
     * @var GlacierClient
     */
    protected $client;

    public static function setUpBeforeClass()
    {
        /** @var $glacier GlacierClient */
        $glacier = self::getServiceBuilder()->get('glacier');
        $glacier->createVault(array('vaultName' => self::TEST_VAULT))->execute();
    }

    public function setUp()
    {
        $this->client = $this->getServiceBuilder()->get('glacier');
    }

    public function testCrudVaults()
    {
        // Create vault names
        $vaultPrefix = self::getResourcePrefix() . '-php-glacier-test-';
        $vaults = array();
        for ($i = 1; $i <= 5; $i++) {
            $vaults[] = $vaultPrefix . $i;
        }

        // Establish vault filter
        $getVaultList = function ($vault) use ($vaultPrefix) {
            return (strpos($vault['VaultName'], $vaultPrefix) === 0);
        };

        // Create vaults and verify existence
        foreach ($vaults as $vault) {
            $this->client->createVault(array('vaultName' => $vault))->execute();
            $this->client->waitUntil('VaultExists', $vault, array('max_attempts' => 3));
        }
        $listVaults = $this->client->getIterator('ListVaults', array('limit' => '5'));
        $vaultList = array_filter(iterator_to_array($listVaults), $getVaultList);
        $this->assertCount(5, $vaultList);

        // Delete vaults and verify deletion
        foreach ($vaults as $vault) {
            $this->client->deleteVault(array('vaultName' => $vault))->execute();
            $this->client->waitUntil('VaultNotExists', $vault);
        }
        $listVaults = $this->client->getIterator('ListVaults');
        $vaultList = array_filter(iterator_to_array($listVaults), $getVaultList);
        $this->assertCount(0, $vaultList);
    }

    public function testUploadAndDeleteArchives()
    {
        $length   = 6 * Size::MB + 425;
        $content  = EntityBody::factory(str_repeat('x', $length));
        $partSize = 2 * Size::MB;

        // Single upload
        $archiveId = $this->client->getCommand('UploadArchive', array(
            'vaultName'          => self::TEST_VAULT,
            'archiveDescription' => 'Foo   bar',
            'body'               => $content
        ))->getResult()->get('archiveId');
        $this->assertNotEmpty($archiveId);

        // Delete the archive
        $this->client->deleteArchive(array(
            'vaultName' => self::TEST_VAULT,
            'archiveId' => $archiveId
        ))->execute();

        sleep(3);

        // Multipart upload
        $generator = UploadPartGenerator::factory($content, $partSize);
        $this->assertEquals($length, $generator->getArchiveSize());
        $uploadId = $this->client->getCommand('InitiateMultipartUpload', array(
            'vaultName' => self::TEST_VAULT,
            'partSize' => (string) $partSize
        ))->getResult()->get('uploadId');
        /** @var $part UploadPart */
        foreach ($generator as $part) {
            $this->client->uploadMultipartPart(array(
                'vaultName'       => self::TEST_VAULT,
                'uploadId'        => $uploadId,
                'range'           => $part->getFormattedRange(),
                'checksum'        => $part->getChecksum(),
                'ContentSHA256'   => $part->getContentHash(),
                'body'            => new ReadLimitEntityBody($content, $part->getSize(), $part->getOffset()),
            ))->execute();
            sleep(3);
        }
        $archiveId = $this->client->getCommand('CompleteMultipartUpload', array(
            'vaultName'   => self::TEST_VAULT,
            'uploadId'    => $uploadId,
            'archiveSize' => $generator->getArchiveSize(),
            'checksum'    => $generator->getRootChecksum()
        ))->getResult()->get('archiveId');
        $this->assertNotEmpty($archiveId);

        // Delete the archive
        $this->client->deleteArchive(array(
            'vaultName' => self::TEST_VAULT,
            'archiveId' => $archiveId
        ))->execute();;
    }

    public function testMultipartUploadAbstractions()
    {
        $source = EntityBody::factory(str_repeat('x', 6 * Size::MB + 425));

        /** @var $transfer Transfer */
        $transfer = UploadBuilder::newInstance()
            ->setClient($this->client)
            ->setSource($source)
            ->setVaultName(self::TEST_VAULT)
            ->setPartSize(Size::MB)
            ->setArchiveDescription('Foo   bar')
            ->build();


        $transfer->getEventDispatcher()->addListener($transfer::BEFORE_PART_UPLOAD, function ($event) {
            static $count = 0;
            if ($count > 2) {
                throw new \Exception;
            }
            $count++;
        });

        try {
            $transfer->upload();
            $serializedState = null;
            $this->fail('Unexpected code execution - exit point 1');
        } catch (MultipartUploadException $e) {
            $serializedState = serialize($e->getState());
        }

        $state = unserialize($serializedState);
        $this->assertInstanceOf('Aws\Glacier\Model\MultipartUpload\TransferState', $state);

        /** @var $transfer Transfer */
        $transfer = UploadBuilder::newInstance()
            ->setClient($this->client)
            ->setSource($source)
            ->setVaultName(self::TEST_VAULT)
            ->resumeFrom($state)
            ->build();

        try {
            $result = $transfer->upload();
        } catch (MultipartUploadException $e) {
            $result = null;
            $this->fail('Unexpected code execution - exit point 2');
        }

        $this->assertNotEmpty($result['archiveId']);
        $this->assertEquals($result['checksum'], $transfer->getState()->getPartGenerator()->getRootChecksum());
    }
}
