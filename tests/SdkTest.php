<?php
namespace Aws\Test;

use Aws\Sdk;

/**
 * @covers Aws\Sdk
 */
class SdkTest extends \PHPUnit_Framework_TestCase
{
    public function testCreatesDefaultSharedValues()
    {
        $sdk = new Sdk(['foo' => 'bar']);
        $args = $this->readAttribute($sdk, 'args');
        $this->assertEquals('bar', $args['foo']);
        $this->assertTrue($args['retries']);
        $this->assertInstanceOf(
            'Aws\Api\ApiProviderInterface',
            $args['api_provider']
        );
        $this->assertInstanceOf(
            'Aws\Api\EndpointProviderInterface',
            $args['endpoint_provider']
        );
    }

    /**
     * @expectedException \BadMethodCallException
     */
    public function testEnsuresMissingMethodThrowsException()
    {
        (new Sdk())->foo();
    }

    public function testHasMagicMethods()
    {
        $sdk = $this->getMockBuilder('Aws\Sdk')
            ->setMethods(['getClient'])
            ->getMock();
        $sdk->expects($this->once())
            ->method('getClient')
            ->with('Foo', ['bar' => 'baz']);
        $sdk->getFoo(['bar' => 'baz']);
    }

    public function testCreatesClients()
    {
        $this->assertInstanceOf(
            'Aws\AwsClientInterface',
            (new Sdk())->getDynamoDb(['region' => 'us-east-1'])
        );
    }

    public function testCreatesClientsWithAlias()
    {
        $this->assertInstanceOf(
            'Aws\AwsClientInterface',
            (new Sdk())->getCloudWatch(['region' => 'us-east-1'])
        );
    }

    public function testMergesInstanceArgsWithStoredArgs()
    {
        $sdk = new Sdk(['foo' => 1]);

        $customFactories = (new \ReflectionObject($sdk))
            ->getProperty('customFactories');
        $customFactories->setAccessible(true);

        eval('class FooFactory {function create($args) {return $args;}}');
        $customFactories->setValue($sdk, ['foo' => 'FooFactory']);

        $args = $sdk->getFoo(['bar' => 2]);

        $this->assertArrayHasKey('foo', $args);
        $this->assertArrayHasKey('bar', $args);
    }
}
