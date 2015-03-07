<?php
namespace Aws\Test\Signature;

use Aws\Credentials\Credentials;
use Aws\Signature\AnonymousSignature;
use GuzzleHttp\Psr7\Request;

/**
 * @covers Aws\Signature\AnonymousSignature
 */
class AnonymousTest extends \PHPUnit_Framework_TestCase
{
    public function testDoesNotSignsRequests()
    {
        $creds = new Credentials('foo', 'bar', 'baz');
        $signature = new AnonymousSignature();
        $request = new Request(
            'PUT',
            'http://s3.amazonaws.com/bucket/key',
            [
                'Content-Type'   => 'Baz',
                'X-Amz-Meta-Boo' => 'bam'
            ],
            'body'
        );

        $result = $signature->signRequest($request, $creds);
        $this->assertSame($result, $request);

        $this->assertEquals('', $signature->createPresignedUrl(
            $request,
            $creds,
            '+1 minute'
        ));
    }
}
