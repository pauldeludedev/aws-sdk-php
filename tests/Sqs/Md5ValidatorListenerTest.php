<?php
namespace Aws\Test\Sqs;

use Aws\Result;
use Aws\Sqs\Md5ValidatorListener;
use Aws\Sqs\SqsClient;
use GuzzleHttp\Command\CommandTransaction;
use GuzzleHttp\Command\Event\ProcessEvent;

/**
 * @covers Aws\Sqs\Md5ValidatorListener
 */
class Md5ValidatorListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Aws\Sqs\SqsException
     */
    public function testValidatesMd5WithException()
    {
        $model  = new Result([
            'Messages' => [['MD5OfBody' => 'foo', 'Body' => 'Bar']]
        ]);
        $client = SqsClient::factory(['region' => 'us-west-2']);
        $command = $client->getCommand('ReceiveMessage');
        $event = new ProcessEvent(new CommandTransaction($client, $command));
        $event->setResult($model);
        $listener = new Md5ValidatorListener();
        $listener->onProcess($event);
    }

    public function testValidatesMd5()
    {
        $model  = new Result([
            'Messages' => [
                [
                    'MD5OfBody' => 'fafb00f5732ab283681e124bf8747ed1',
                    'Body' => 'This is a test message'
                ]
            ]
        ]);

        $client = SqsClient::factory(['region' => 'us-west-2']);
        $command = $client->getCommand('ReceiveMessage');
        $event = new ProcessEvent(new CommandTransaction($client, $command));
        $event->setResult($model);
        $listener = new Md5ValidatorListener();
        $listener->onProcess($event);
    }

    public function testIgnoresIrrelevantCommands()
    {
        $model  = new Result([]);
        $client = SqsClient::factory(['region' => 'us-west-2']);
        $command = $client->getCommand('ListQueues');
        $event = new ProcessEvent(new CommandTransaction($client, $command));
        $event->setResult($model);
        $listener = new Md5ValidatorListener();
        $listener->onProcess($event);
    }
}
