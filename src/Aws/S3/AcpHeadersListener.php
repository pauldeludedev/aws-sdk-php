<?php
/**
 * Copyright 2010-2012 Amazon.com, Inc. or its affiliates. All Rights Reserved.
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

use Aws\Common\Exception\InvalidArgumentException;
use Aws\S3\Model\Acp;
use Guzzle\Common\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener used to ADD ACP headers to an operation using an {@see Acl} object
 */
class AcpHeadersListener implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array('command.before_prepare' => array('onCommandBeforePrepare', -255));
    }

    /**
     * {@inheritdoc}
     */
    public function onCommandBeforePrepare(Event $event)
    {
        /** @var $command \Guzzle\Service\Command\AbstractCommand */
        $command = $event['command'];
        $operation = $command->getOperation();
        if ($operation->hasParam('ACP') && !$operation->hasParam('Grants')) {
            if ($acp = $command->get('ACP')) {

                // Ensure that the correct object was passed
                if (!($acp instanceof Acp)) {
                    throw new InvalidArgumentException('ACP must be an instance of Aws\S3\Model\Acp');
                }

                // Check if the user specified both an ACP and Grants
                if ($command->hasKey('Grants')) {
                    throw new InvalidArgumentException(
                        'Use either the ACP parameter or the Grants parameter. Do not use both.'
                    );
                }

                // Add the correct header based parameters to the command
                $acp->updateCommand($command);
                // Remove the ACP parameter
                $command->remove('ACP');
            }
        }
    }
}
