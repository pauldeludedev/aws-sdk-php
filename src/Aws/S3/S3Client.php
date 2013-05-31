<?php
/**
 * Copyright 2010-2013 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Aws\S3;

use Aws\Common\Iterator\AwsResourceIterator;
use Aws\Common\Client\AbstractClient;
use Aws\Common\Client\ClientBuilder;
use Aws\Common\Client\UploadBodyListener;
use Aws\Common\Enum\ClientOptions as Options;
use Aws\Common\Exception\InvalidArgumentException;
use Aws\Common\Client\ExpiredCredentialsChecker;
use Aws\S3\Exception\AccessDeniedException;
use Aws\S3\Exception\Parser\S3ExceptionParser;
use Aws\S3\Exception\S3Exception;
use Aws\S3\Model\ClearBucket;
use Aws\S3\S3Signature;
use Aws\S3\Sync\UploadSync;
use Aws\S3\Sync\UploadSyncBuilder;
use Guzzle\Common\Collection;
use Guzzle\Http\EntityBody;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Plugin\Backoff\BackoffPlugin;
use Guzzle\Plugin\Backoff\HttpBackoffStrategy;
use Guzzle\Plugin\Backoff\CurlBackoffStrategy;
use Guzzle\Plugin\Backoff\TruncatedBackoffStrategy;
use Guzzle\Plugin\Backoff\ExponentialBackoffStrategy;
use Guzzle\Plugin\Md5\CommandContentMd5Plugin;
use Guzzle\Service\Command\CommandInterface;
use Guzzle\Service\Command\Factory\AliasFactory;
use Guzzle\Service\Resource\Model;
use Guzzle\Service\Command\Factory\CompositeFactory;

use Aws\S3\Model\MultipartUpload\UploadBuilder;
use Aws\Common\Model\MultipartUpload\AbstractTransfer;
use Aws\S3\Model\MultipartUpload\AbstractTransfer as AbstractMulti;

/**
 * Client to interact with Amazon Simple Storage Service
 *
 * @method Model abortMultipartUpload(array $args = array()) {@command S3 AbortMultipartUpload}
 * @method Model completeMultipartUpload(array $args = array()) {@command S3 CompleteMultipartUpload}
 * @method Model copyObject(array $args = array()) {@command S3 CopyObject}
 * @method Model createBucket(array $args = array()) {@command S3 CreateBucket}
 * @method Model createMultipartUpload(array $args = array()) {@command S3 CreateMultipartUpload}
 * @method Model deleteBucket(array $args = array()) {@command S3 DeleteBucket}
 * @method Model deleteBucketCors(array $args = array()) {@command S3 DeleteBucketCors}
 * @method Model deleteBucketLifecycle(array $args = array()) {@command S3 DeleteBucketLifecycle}
 * @method Model deleteBucketPolicy(array $args = array()) {@command S3 DeleteBucketPolicy}
 * @method Model deleteBucketTagging(array $args = array()) {@command S3 DeleteBucketTagging}
 * @method Model deleteBucketWebsite(array $args = array()) {@command S3 DeleteBucketWebsite}
 * @method Model deleteObject(array $args = array()) {@command S3 DeleteObject}
 * @method Model deleteObjects(array $args = array()) {@command S3 DeleteObjects}
 * @method Model getBucketAcl(array $args = array()) {@command S3 GetBucketAcl}
 * @method Model getBucketCors(array $args = array()) {@command S3 GetBucketCors}
 * @method Model getBucketLifecycle(array $args = array()) {@command S3 GetBucketLifecycle}
 * @method Model getBucketLocation(array $args = array()) {@command S3 GetBucketLocation}
 * @method Model getBucketLogging(array $args = array()) {@command S3 GetBucketLogging}
 * @method Model getBucketNotification(array $args = array()) {@command S3 GetBucketNotification}
 * @method Model getBucketPolicy(array $args = array()) {@command S3 GetBucketPolicy}
 * @method Model getBucketRequestPayment(array $args = array()) {@command S3 GetBucketRequestPayment}
 * @method Model getBucketTagging(array $args = array()) {@command S3 GetBucketTagging}
 * @method Model getBucketVersioning(array $args = array()) {@command S3 GetBucketVersioning}
 * @method Model getBucketWebsite(array $args = array()) {@command S3 GetBucketWebsite}
 * @method Model getObject(array $args = array()) {@command S3 GetObject}
 * @method Model getObjectAcl(array $args = array()) {@command S3 GetObjectAcl}
 * @method Model getObjectTorrent(array $args = array()) {@command S3 GetObjectTorrent}
 * @method Model headBucket(array $args = array()) {@command S3 HeadBucket}
 * @method Model headObject(array $args = array()) {@command S3 HeadObject}
 * @method Model listBuckets(array $args = array()) {@command S3 ListBuckets}
 * @method Model listMultipartUploads(array $args = array()) {@command S3 ListMultipartUploads}
 * @method Model listObjectVersions(array $args = array()) {@command S3 ListObjectVersions}
 * @method Model listObjects(array $args = array()) {@command S3 ListObjects}
 * @method Model listParts(array $args = array()) {@command S3 ListParts}
 * @method Model putBucketAcl(array $args = array()) {@command S3 PutBucketAcl}
 * @method Model putBucketCors(array $args = array()) {@command S3 PutBucketCors}
 * @method Model putBucketLifecycle(array $args = array()) {@command S3 PutBucketLifecycle}
 * @method Model putBucketLogging(array $args = array()) {@command S3 PutBucketLogging}
 * @method Model putBucketNotification(array $args = array()) {@command S3 PutBucketNotification}
 * @method Model putBucketPolicy(array $args = array()) {@command S3 PutBucketPolicy}
 * @method Model putBucketRequestPayment(array $args = array()) {@command S3 PutBucketRequestPayment}
 * @method Model putBucketTagging(array $args = array()) {@command S3 PutBucketTagging}
 * @method Model putBucketVersioning(array $args = array()) {@command S3 PutBucketVersioning}
 * @method Model putBucketWebsite(array $args = array()) {@command S3 PutBucketWebsite}
 * @method Model putObject(array $args = array()) {@command S3 PutObject}
 * @method Model putObjectAcl(array $args = array()) {@command S3 PutObjectAcl}
 * @method Model restoreObject(array $args = array()) {@command S3 RestoreObject}
 * @method Model uploadPart(array $args = array()) {@command S3 UploadPart}
 * @method Model uploadPartCopy(array $args = array()) {@command S3 UploadPartCopy}
 * @method waitUntilBucketExists(array $input) Wait until a bucket exists. The input array uses the parameters of the HeadBucket operation and waiter specific settings
 * @method waitUntilBucketNotExists(array $input) Wait until a bucket does not exist. The input array uses the parameters of the HeadBucket operation and waiter specific settings
 * @method waitUntilObjectExists(array $input) Wait until an object exists. The input array uses the parameters of the HeadObject operation and waiter specific settings
 *
 * @link http://docs.aws.amazon.com/aws-sdk-php-2/guide/latest/service-s3.html User guide
 * @link http://docs.aws.amazon.com/aws-sdk-php-2/latest/class-Aws.S3.S3Client.html API docs
 */
class S3Client extends AbstractClient
{
    const LATEST_API_VERSION = '2006-03-01';

    /**
     * @var array Aliases for S3 operations
     */
    protected static $commandAliases = array(
        // REST API Docs Aliases
        'GetService' => 'ListBuckets',
        'GetBucket'  => 'ListObjects',
        'PutBucket'  => 'CreateBucket',

        // SDK 1.x Aliases
        'GetBucketHeaders'              => 'HeadBucket',
        'GetObjectHeaders'              => 'HeadObject',
        'SetBucketAcl'                  => 'PutBucketAcl',
        'CreateObject'                  => 'PutObject',
        'DeleteObjects'                 => 'DeleteMultipleObjects',
        'PutObjectCopy'                 => 'CopyObject',
        'SetObjectAcl'                  => 'PutObjectAcl',
        'GetLogs'                       => 'GetBucketLogging',
        'GetVersioningStatus'           => 'GetBucketVersioning',
        'SetBucketPolicy'               => 'PutBucketPolicy',
        'CreateBucketNotification'      => 'PutBucketNotification',
        'GetBucketNotifications'        => 'GetBucketNotification',
        'CopyPart'                      => 'UploadPartCopy',
        'CreateWebsiteConfig'           => 'PutBucketWebsite',
        'GetWebsiteConfig'              => 'GetBucketWebsite',
        'DeleteWebsiteConfig'           => 'DeleteBucketWebsite',
        'CreateObjectExpirationConfig'  => 'PutBucketLifecycle',
        'GetObjectExpirationConfig'     => 'GetBucketLifecycle',
        'DeleteObjectExpirationConfig'  => 'DeleteBucketLifecycle',
    );

    /**
     * @inheritdoc
     */
    protected $directory = __DIR__;

    /**
     * Factory method to create a new Amazon S3 client using an array of configuration options.
     *
     * The following array keys and values are available options:
     *
     * Credential options (key, secret, and optional token OR credentials is required)
     *
     * - key - AWS Access Key ID
     * - secret - AWS secret access key
     * - credentials - You can optionally provide a custom `Aws\Common\Credentials\CredentialsInterface` object
     * - token - Custom AWS security token to use with request authentication
     * - token.ttd - UNIX timestamp for when the custom credentials expire
     * - credentials.cache - Used to cache credentials when using providers that require HTTP requests. Set the true
     *   to use the default APC cache or provide a `Guzzle\Cache\CacheAdapterInterface` object.
     * - credentials.cache.key - Optional custom cache key to use with the credentials
     * - credentials.client - Pass this option to specify a custom `Guzzle\Http\ClientInterface` to use if your
     *   credentials require a HTTP request (e.g. RefreshableInstanceProfileCredentials)
     *
     * Region and Endpoint options (a `region` and optional `scheme` OR a `base_url` is required)
     *
     * - region - Region name (e.g. 'us-east-1', 'us-west-1', 'us-west-2', 'eu-west-1', etc...)
     * - scheme - URI Scheme of the base URL (e.g. 'https', 'http').
     * - base_url - Instead of using a `region` and `scheme`, you can specify a custom base URL for the client
     *
     * Generic client options
     *
     * - ssl.certificate_authority: Set to true to use the bundled CA cert (default), system to use the certificate
     *   bundled with your system, or pass the full path to an SSL certificate bundle. This option should be used when
     *   you encounter curl error code 60.
     * - curl.options - Array of cURL options to apply to every request.
     *   See http://www.php.net/manual/en/function.curl-setopt.php for a list of available options
     * - signature - You can optionally provide a custom signature implementation used to sign requests
     * - client.backoff.logger - `Guzzle\Log\LogAdapterInterface` object used to log backoff retries. Use
     *   'debug' to emit PHP warnings when a retry is issued.
     * - client.backoff.logger.template - Optional template to use for exponential backoff log messages. See
     *   `Guzzle\Plugin\Backoff\BackoffLogger` for formatting information.
     *
     * @param array|Collection $config Client configuration data
     *
     * @return self
     */
    public static function factory($config = array())
    {
        $exceptionParser = new S3ExceptionParser();

        // Configure the custom exponential backoff plugin for retrying S3 specific errors
        if (!isset($config[Options::BACKOFF])) {
            $config[Options::BACKOFF] = new BackoffPlugin(
                new TruncatedBackoffStrategy(3,
                    new HttpBackoffStrategy(null,
                        new SocketTimeoutChecker(
                            new CurlBackoffStrategy(null,
                                new ExpiredCredentialsChecker($exceptionParser,
                                    new ExponentialBackoffStrategy()
                                )
                            )
                        )
                    )
                )
            );
        }

        $client = ClientBuilder::factory(__NAMESPACE__)
            ->setConfig($config)
            ->setConfigDefaults(array(
                Options::SIGNATURE => new S3Signature(),
                Options::VERSION => self::LATEST_API_VERSION,
                Options::SERVICE_DESCRIPTION => __DIR__ . '/Resources/s3-%s.php'
            ))
            ->setExceptionParser($exceptionParser)
            ->setIteratorsConfig(array(
                'more_key' => 'IsTruncated',
                'operations' => array(
                    'ListBuckets',
                    'ListMultipartUploads' => array(
                        'limit_param' => 'MaxUploads',
                        'token_param' => array('KeyMarker', 'UploadIdMarker'),
                        'token_key'   => array('NextKeyMarker', 'NextUploadIdMarker'),
                    ),
                    'ListObjects' => array(
                        'limit_param' => 'MaxKeys',
                        'token_param' => 'Marker',
                        'token_key'   => 'NextMarker',
                    ),
                    'ListObjectVersions' => array(
                        'limit_param' => 'MaxKeys',
                        'token_param' => array('KeyMarker', 'VersionIdMarker'),
                        'token_key'   => array('nextKeyMarker', 'nextVersionIdMarker'),
                    ),
                    'ListParts' => array(
                        'limit_param' => 'MaxParts',
                        'result_key'  => 'Parts',
                        'token_param' => 'PartNumberMarker',
                        'token_key'   => 'NextPartNumberMarker',
                    ),
                )
            ))
            ->build();

        // Use virtual hosted buckets when possible
        $client->addSubscriber(new BucketStyleListener());

        // Ensure that ACP headers are applied when needed
        $client->addSubscriber(new AcpListener());

        // Validate and add Content-MD5 hashes
        $client->addSubscriber(new CommandContentMd5Plugin());

        // Allow for specifying bodies with file paths and file handles
        $client->addSubscriber(new UploadBodyListener(array('PutObject', 'UploadPart')));

        // Add aliases for some S3 operations
        $default = CompositeFactory::getDefaultChain($client);
        $default->add(
            new AliasFactory($client, self::$commandAliases),
            'Guzzle\Service\Command\Factory\ServiceDescriptionFactory'
        );
        $client->setCommandFactory($default);

        return $client;
    }

    /**
     * Find out if a string is a valid name for an Amazon S3 bucket.
     *
     * @param string $bucket The name of the bucket to check.
     *
     * @return bool TRUE if the bucket name is valid or FALSE if it is invalid.
     */
    public static function isValidBucketName($bucket)
    {
        $bucketLen = strlen($bucket);
        if (!$bucket || $bucketLen < 3 || $bucketLen > 63
            // Cannot start or end with a '.'
            || $bucket[0] == '.'
            || $bucket[$bucketLen - 1] == '.'
            // Cannot look like an IP address
            || preg_match('/^\d+\.\d+\.\d+\.\d+$/', $bucket)
            // Cannot include special characters, must start and end with lower alnum
            || !preg_match('/^[a-z0-9][a-z0-9\-.]*[a-z0-9]?$/', $bucket)) {
            return false;
        }

        return true;
    }

    /**
     * Create a pre-signed URL for a request
     *
     * @param RequestInterface     $request Request to generate the URL for. Use the factory methods of the client to
     *                                      create this request object
     * @param int|string|\DateTime $expires The time at which the URL should expire. This can be a Unix timestamp, a
     *                                      PHP DateTime object, or a string that can be evaluated by strtotime
     *
     * @return string
     * @throws InvalidArgumentException if the request is not associated with this client object
     */
    public function createPresignedUrl(RequestInterface $request, $expires)
    {
        if ($request->getClient() !== $this) {
            throw new InvalidArgumentException('The request object must be associated with the client. Use the '
                . '$client->get(), $client->head(), $client->post(), $client->put(), etc. methods when passing in a '
                . 'request object');
        }

        if ($expires instanceof \DateTime) {
            $expires = $expires->getTimestamp();
        } elseif (!is_numeric($expires)) {
            $expires = strtotime($expires);
        }

        // Operate on a clone of the request, so the original is not altered
        $request = clone $request;

        // URL encoding already occurs in the URI template expansion. Undo that and encode using the same encoding as
        // GET object, PUT object, etc.
        $path = $this->encodeKey(rawurldecode($request->getPath()));
        $request->setPath($path);

        // Make sure to handle temporary credentials
        if ($token = $this->credentials->getSecurityToken()) {
            $request->setHeader('x-amz-security-token', $token);
            $request->getQuery()->set('x-amz-security-token', $token);
        }

        // Set query params required for pre-signed URLs
        $request->getQuery()
            ->set('AWSAccessKeyId', $this->credentials->getAccessKeyId())
            ->set('Expires', $expires)
            ->set('Signature', $this->signature->signString(
                $this->signature->createCanonicalizedString($request, $expires),
                $this->credentials
            ));

        return $request->getUrl();
    }

    /**
     * Returns the URL to an object identified by its bucket and key. If an expiration time is provided, the URL will
     * be signed and set to expire at the provided time.
     *
     * @param string $bucket  The name of the bucket where the object is located
     * @param string $key     The key of the object
     * @param mixed  $expires The time at which the URL should expire
     * @param array  $args    Arguments to the GetObject command. Additionally you can specify a "Scheme" if you would
     *                        like the URL to use a different scheme than what the client is configured to use
     *
     * @return string The URL to the object
     */
    public function getObjectUrl($bucket, $key, $expires = null, array $args = array())
    {
        $command = $this->getCommand('GetObject', $args + array('Bucket' => $bucket, 'Key' => $key));

        if ($command->hasKey('Scheme')) {
            $scheme = $command['Scheme'];
            $request = $command->remove('Scheme')->prepare()->setScheme($scheme)->setPort(null);
        } else {
            $request = $command->prepare();
        }

        return $expires ? $this->createPresignedUrl($request, $expires) : $request->getUrl();
    }

    /**
     * Helper used to clear the contents of a bucket. Use the {@see ClearBucket} object directly
     * for more advanced options and control.
     *
     * @param string $bucket Name of the bucket to clear.
     *
     * @return int Returns the number of deleted keys
     */
    public function clearBucket($bucket)
    {
        $clear = new ClearBucket($this, $bucket);

        return $clear->clear();
    }

    /**
     * Determines whether or not a bucket exists by name
     *
     * @param string $bucket    The name of the bucket
     * @param bool   $accept403 Set to true if 403s are acceptable
     * @param array  $options   Additional options to add to the executed command
     *
     * @return bool
     */
    public function doesBucketExist($bucket, $accept403 = true, array $options = array())
    {
        return $this->checkExistenceWithCommand(
            $this->getCommand('HeadBucket', array_merge($options, array(
                'Bucket' => $bucket
            ))), $accept403
        );
    }

    /**
     * Determines whether or not an object exists by name
     *
     * @param string $bucket  The name of the bucket
     * @param string $key     The key of the object
     * @param array  $options Additional options to add to the executed command
     *
     * @return bool
     */
    public function doesObjectExist($bucket, $key, array $options = array())
    {
        return $this->checkExistenceWithCommand(
            $this->getCommand('HeadObject', array_merge($options, array(
                'Bucket' => $bucket,
                'Key'    => $key
            )))
        );
    }

    /**
     * Determines whether or not a bucket policy exists for a bucket
     *
     * @param string $bucket  The name of the bucket
     * @param array  $options Additional options to add to the executed command
     *
     * @return bool
     */
    public function doesBucketPolicyExist($bucket, array $options = array())
    {
        return $this->checkExistenceWithCommand(
            $this->getCommand('GetBucketPolicy', array_merge($options, array(
                'Bucket' => $bucket
            )))
        );
    }

    /**
     * Raw URL encode a key and allow for '/' characters
     *
     * @param string $key Key to encode
     *
     * @return string Returns the encoded key
     */
    public static function encodeKey($key)
    {
        return str_replace('%2F', '/', rawurlencode($key));
    }

    /**
     * Explode a prefixed key into an array of values
     *
     * @param string $key Key to explode
     *
     * @return array Returns the exploded
     */
    public static function explodeKey($key)
    {
        // Remove a leading slash if one is found
        return explode('/', $key && $key[0] == '/' ? substr($key, 1) : $key);
    }

    /**
     * Register the Amazon S3 stream wrapper and associates it with this client object
     *
     * @return self
     */
    public function registerStreamWrapper()
    {
        StreamWrapper::register($this);

        return $this;
    }

    /**
     * Upload a file, stream, or string to a bucket. If the upload size exceeds the specified threshold, the upload
     * will be performed using parallel multipart uploads.
     *
     * @param string $bucket  Bucket to upload the object
     * @param string $key     Key of the object
     * @param mixed  $body    Object data to upload. Can be a Guzzle\Http\EntityBodyInterface, stream resource, or
     *                        string of data to upload.
     * @param string $acl     ACL to apply to the object
     * @param array  $options Custom options used when executing commands:
     *     - object_parameters: Custom parameters to use with the upload. The parameters must map to a PutObject
     *       or InitiateMultipartUpload operation parameters.
     *     - min_part_size: Minimum size to allow for each uploaded part when performing a multipart upload.
     *     - concurrency: Maximum number of concurrent multipart uploads.
     *     - before_upload: Callback to invoke before each multipart upload. The callback will receive a
     *       Guzzle\Common\Event object with context.
     *
     * @see Aws\S3\Model\MultipartUpload\UploadBuilder for more options and customization
     * @return \Guzzle\Service\Resource\Model Returns the modeled result of the performed operation
     */
    public function upload($bucket, $key, $body, $acl = 'private', array $options = array())
    {
        $options = Collection::fromConfig(array_change_key_case($options), array(
            'min_part_size'     => AbstractMulti::MIN_PART_SIZE,
            'object_parameters' => array(),
            'concurrency'       => 3
        ));

        $body = EntityBody::factory($body);
        if ($body->getSize() >= $options['min_part_size']) {
            // Perform a multipart upload if the file is large enough
            return UploadBuilder::newInstance()
                ->setBucket($bucket)
                ->setKey($key)
                ->setMinPartSize($options['min_part_size'])
                ->setConcurrency($options['concurrency'])
                ->setClient($this)
                ->setSource($body)
                ->setTransferOptions($options->toArray())
                ->beforeUpload($options['before_upload'])
                ->addOptions($options['object_parameters'])
                ->build()
                ->upload();
        } else {
            // Perform a simple PutObject operation
            return $this->putObject(array(
                'Bucket' => $bucket,
                'Key'    => $key,
                'Body'   => $body,
                'ACL'    => $acl
            ) + $options['object_parameters']);
        }
    }

    /**
     * Recursively uploads all files in a given directory to a given bucket.
     *
     * @param string $directory                 Full path to a directory to upload
     * @param string $bucket                    Name of the bucket
     * @param string $virtualDirectoryKeyPrefix Key prefix to add to each upload
     * @param array  $options                   Upload options
     *     - object_parameters: Array of parameters to use with each PutObject operation performed during the uploads
     *     - base_dir: Base directory to remove from each object key
     *     - force: Set to true to upload every file, even if the file is already in Amazon S3 and has not changed
     *     - concurrency: Maximum number of parallel uploads (defaults to 3)
     *     - before_upload: Callback to invoke before each upload. The callback will receive a
     *       Guzzle\Common\Event object with context.
     *     - debug: Set to true to enable debug mode to print information about each upload
     *
     * @see Aws\S3\S3Sync\S3Sync for more options and customization
     */
    public function uploadDirectory(
        $directory,
        $bucket,
        $virtualDirectoryKeyPrefix = null,
        array $options = array()
    ) {
        $options = Collection::fromConfig($options, array(
            'concurrency'       => 3,
            'object_parameters' => array(),
            'base_dir'          => $directory
        ));

        $uploader = UploadSyncBuilder::getInstance()
            ->uploadFromDirectory($directory)
            ->setBucket($bucket)
            ->setKeyPrefix($virtualDirectoryKeyPrefix)
            ->setConcurrency($options['concurrency'])
            ->setBaseDir($options['base_dir'])
            ->disableCheck($options['force'])
            ->setPutObjectParams($options['object_parameters'])
            ->enableDebugOutput($options['debug'])
            ->build();

        if ($options['before_upload']) {
            $uploader->getEventDispatcher()->addListener(UploadSync::BEFORE_UPLOAD_EVENT, $options['before_upload']);
        }

        $uploader->transfer();
    }

    /**
     * Downloads all objects in the virtual directory designated by the keyPrefix given to the destination
     * directory given.
     *
     * @param string $destinationDirectory The directory to place downloaded files. Subdirectories will be created as
     *                                     necessary.
     * @param string $bucket               The bucket containing the virtual directory
     * @param string $keyPrefix            The key prefix for the virtual directory, or null for the entire bucket
     */
    public function downloadDirectory($destinationDirectory, $bucket, $keyPrefix = null)
    {

    }

    /**
     * Deletes objects from Amazon S3 that match the result of a ListObjects operation. For example, this allows you
     * to do things like delete all objects that match a specific key prefix.
     *
     * @param string                    $bucket      Bucket that contains the object keys
     * @param array|AwsResourceIterator $keyCriteria Pass an iterator to delete the object keys of an iterator, or pass
     *                                               in an array of parameters that will be used to create a ListObjects
     *                                               operation.
     * @param array                     $options     Options used when deleting the object:
     *     - before_delete: Callback to invoke before each delete. The callback will receive a
     *       Guzzle\Common\Event object with context.
     *
     * @see Aws\S3\S3Client::listObjects
     * @see Aws\S3\Model\ClearBucket For more options or customization
     * @return int Returns the number of deleted keys
     */
    public function deleteMatchingObjects($bucket, $keyCriteria, array $options = array())
    {
        if (is_array($keyCriteria)) {
            $keyCriteria = $this->getIterator('ListObjects', $keyCriteria);
        }

        $clear = new ClearBucket($this, $bucket);
        $clear->setIterator($keyCriteria);
        if (isset($options['before_delete'])) {
            $clear->getEventDispatcher()->addListener(ClearBucket::BEFORE_CLEAR, $options['before_delete']);
        }

        return $clear->clear();
    }

    /**
     * Determines whether or not a resource exists using a command
     *
     * @param CommandInterface $command   Command used to poll for the resource
     * @param bool             $accept403 Set to true if 403s are acceptable
     *
     * @return bool
     * @throws S3Exception|\Exception if there is an unhandled exception
     */
    protected function checkExistenceWithCommand(CommandInterface $command, $accept403 = false)
    {
        try {
            $command->execute();
            $exists = true;
        } catch (AccessDeniedException $e) {
            $exists = (bool) $accept403;
        } catch (S3Exception $e) {
            $exists = false;
            if ($e->getResponse()->getStatusCode() >= 500) {
                // @codeCoverageIgnoreStart
                throw $e;
                // @codeCoverageIgnoreEnd
            }
        }

        return $exists;
    }
}
