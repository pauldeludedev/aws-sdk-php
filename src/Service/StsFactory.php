<?php
namespace Aws\Service;

/**
 * Client to interact with AWS Security Token Service
 *
 * @method Model assumeRole(array $args = array()) {@command Sts AssumeRole}
 * @method Model assumeRoleWithSAML(array $args = array()) {@command Sts AssumeRoleWithSAML}
 * @method Model assumeRoleWithWebIdentity(array $args = array()) {@command Sts AssumeRoleWithWebIdentity}
 * @method Model decodeAuthorizationMessage(array $args = array()) {@command Sts DecodeAuthorizationMessage}
 * @method Model getFederationToken(array $args = array()) {@command Sts GetFederationToken}
 * @method Model getSessionToken(array $args = array()) {@command Sts GetSessionToken}
 */
class StsFactory extends ClientFactory
{
    /**
     * Factory method to create a new Amazon STS client using an array of configuration options:
     *
     * @param array|Collection $config Client configuration data
     *
     * @return self
     * @throws InvalidArgumentException
     * @link http://docs.aws.amazon.com/aws-sdk-php/guide/latest/configuration.html#client-configuration-options
     */
    public static function factory($config = array())
    {
        // Always need long term credentials
        if (!isset($config[Options::CREDENTIALS]) && isset($config[Options::TOKEN])) {
            throw new InvalidArgumentException('You must use long-term credentials with Amazon STS');
        }

        // Construct the STS client with the client builder
        $client = ClientBuilder::factory(__NAMESPACE__)
            ->setConfig($config)
            ->setConfigDefaults(array(
                Options::VERSION             => self::LATEST_API_VERSION,
                Options::SERVICE_DESCRIPTION => __DIR__ . '/Resources/sts-%s.php'
            ))
            ->build();

        // Attach a listener to prevent AssumeRoleWithWebIdentity requests from being signed
        $client->getEventDispatcher()->addListener('command.before_send', function(Event $event) {
            /** @var AbstractCommand $command */
            $command = $event['command'];
            if ($command->getName() === 'AssumeRoleWithWebIdentity') {
                /** @var EventDispatcher $dispatcher */
                $dispatcher = $command->getRequest()->getEventDispatcher();
                foreach ($dispatcher->getListeners('request.before_send') as $listener) {
                    if (is_array($listener) && $listener[0] instanceof SignatureListener) {
                        $dispatcher->removeListener('request.before_send', $listener);
                        break;
                    }
                }
            }
        });

        return $client;
    }

    /**
     * Creates a credentials object from the credential data return by an STS operation
     *
     * @param Model $result The result of an STS operation
     *
     * @return Credentials
     * @throws InvalidArgumentException if the result does not contain credential data
     */
    public function createCredentials(Model $result)
    {
        if (!$result->hasKey('Credentials')) {
            throw new InvalidArgumentException('The modeled result provided contained no credentials.');
        }

        return new Credentials(
            $result->getPath('Credentials/AccessKeyId'),
            $result->getPath('Credentials/SecretAccessKey'),
            $result->getPath('Credentials/SessionToken'),
            $result->getPath('Credentials/Expiration')
        );
    }
}
