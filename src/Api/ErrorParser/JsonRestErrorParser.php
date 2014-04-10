<?php
namespace Aws\Api\ErrorParser;

use GuzzleHttp\Message\ResponseInterface;

/**
 * Parses JSON-REST errors.
 */
class JsonRestErrorParser
{
    use JsonParserTrait;

    public function __invoke(ResponseInterface $response)
    {
        $data = $this->genericHandler($response);

        // Merge in error data from the JSON body
        if ($json = $data['parsed']) {
            $data = array_replace($data, $json);
        }

        // Correct error type from services like Amazon Glacier
        if (!empty($data['type'])) {
            $data['type'] = strtolower($data['type']);
        }

        // Retrieve the error code from services like Amazon Elastic Transcoder
        if ($code = $response->getHeader('x-amzn-errortype')) {
            $data['code'] = substr($code, 0, strpos($code, ':'));
        }

        return $data;
    }
}
