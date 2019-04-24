<?php
// This file was auto-generated from sdk-root/src/data/mediaconnect/2018-11-14/docs-2.json
return [ 'version' => '2.0', 'service' => 'API for AWS Elemental MediaConnect', 'operations' => [ 'AddFlowOutputs' => 'Adds outputs to an existing flow. You can create up to 20 outputs per flow.', 'CreateFlow' => 'Creates a new flow. The request must include one source. The request optionally can include outputs (up to 20) and entitlements (up to 50).', 'DeleteFlow' => 'Deletes a flow. Before you can delete a flow, you must stop the flow.', 'DescribeFlow' => 'Displays the details of a flow. The response includes the flow ARN, name, and Availability Zone, as well as details about the source, outputs, and entitlements.', 'GrantFlowEntitlements' => 'Grants entitlements to an existing flow.', 'ListEntitlements' => 'Displays a list of all entitlements that have been granted to this account. This request returns 20 results per page.', 'ListFlows' => 'Displays a list of flows that are associated with this account. This request returns a paginated result.', 'ListTagsForResource' => 'List all tags on an AWS Elemental MediaConnect resource', 'RemoveFlowOutput' => 'Removes an output from an existing flow. This request can be made only on an output that does not have an entitlement associated with it. If the output has an entitlement, you must revoke the entitlement instead. When an entitlement is revoked from a flow, the service automatically removes the associated output.', 'RevokeFlowEntitlement' => 'Revokes an entitlement from a flow. Once an entitlement is revoked, the content becomes unavailable to the subscriber and the associated output is removed.', 'StartFlow' => 'Starts a flow.', 'StopFlow' => 'Stops a flow.', 'TagResource' => 'Associates the specified tags to a resource with the specified resourceArn. If existing tags on a resource are not specified in the request parameters, they are not changed. When a resource is deleted, the tags associated with that resource are deleted as well.', 'UntagResource' => 'Deletes specified tags from a resource.', 'UpdateFlowEntitlement' => 'You can change an entitlement\'s description, subscribers, and encryption. If you change the subscribers, the service will remove the outputs that are are used by the subscribers that are removed.', 'UpdateFlowOutput' => 'Updates an existing flow output.', 'UpdateFlowSource' => 'Updates the source of a flow.', ], 'shapes' => [ 'AddFlowOutputs420Exception' => [ 'base' => 'Exception raised by AWS Elemental MediaConnect. See the error message and documentation for the operation for more information on the cause of this exception.', 'refs' => [], ], 'AddFlowOutputsRequest' => [ 'base' => 'Adds outputs to an existing flow. You can create up to 20 outputs per flow.', 'refs' => [], ], 'AddFlowOutputsResponse' => [ 'base' => 'The result of a successful AddOutput request. The response includes the details of the newly added outputs.', 'refs' => [], ], 'AddOutputRequest' => [ 'base' => 'The output that you want to add to this flow.', 'refs' => [ '__listOfAddOutputRequest$member' => NULL, ], ], 'Algorithm' => [ 'base' => NULL, 'refs' => [ 'Encryption$Algorithm' => 'The type of algorithm that is used for the encryption (such as aes128, aes192, or aes256).', 'UpdateEncryption$Algorithm' => 'The type of algorithm that is used for the encryption (such as aes128, aes192, or aes256).', ], ], 'BadRequestException' => [ 'base' => 'Exception raised by AWS Elemental MediaConnect. See the error message and documentation for the operation for more information on the cause of this exception.', 'refs' => [], ], 'CreateFlow420Exception' => [ 'base' => 'Exception raised by AWS Elemental MediaConnect. See the error message and documentation for the operation for more information on the cause of this exception.', 'refs' => [], ], 'CreateFlowRequest' => [ 'base' => 'Creates a new flow. The request must include one source. The request optionally can include outputs (up to 20) and one entitlement.', 'refs' => [], ], 'CreateFlowResponse' => [ 'base' => 'The result of a successful CreateFlow request.', 'refs' => [], ], 'DeleteFlowResponse' => [ 'base' => 'The result of a successful DeleteFlow request.', 'refs' => [], ], 'DescribeFlowResponse' => [ 'base' => 'The result of a successful DescribeFlow request.', 'refs' => [], ], 'Encryption' => [ 'base' => 'Information about the encryption of the flow.', 'refs' => [ 'AddOutputRequest$Encryption' => 'The type of key used for the encryption. If no keyType is provided, the service will use the default setting (static-key).', 'Entitlement$Encryption' => 'The type of encryption that will be used on the output that is associated with this entitlement.', 'GrantEntitlementRequest$Encryption' => 'The type of encryption that will be used on the output that is associated with this entitlement.', 'Output$Encryption' => 'The type of key used for the encryption. If no keyType is provided, the service will use the default setting (static-key).', 'SetSourceRequest$Decryption' => 'The type of encryption that is used on the content ingested from this source.', 'Source$Decryption' => 'The type of encryption that is used on the content ingested from this source.', ], ], 'Entitlement' => [ 'base' => 'The settings for a flow entitlement.', 'refs' => [ 'UpdateFlowEntitlementResponse$Entitlement' => NULL, '__listOfEntitlement$member' => NULL, ], ], 'Flow' => [ 'base' => 'The settings for a flow, including its source, outputs, and entitlements.', 'refs' => [ 'CreateFlowResponse$Flow' => NULL, 'DescribeFlowResponse$Flow' => NULL, ], ], 'ForbiddenException' => [ 'base' => 'Exception raised by AWS Elemental MediaConnect. See the error message and documentation for the operation for more information on the cause of this exception.', 'refs' => [], ], 'GrantEntitlementRequest' => [ 'base' => 'The entitlements that you want to grant on a flow.', 'refs' => [ '__listOfGrantEntitlementRequest$member' => NULL, ], ], 'GrantFlowEntitlements420Exception' => [ 'base' => 'Exception raised by AWS Elemental MediaConnect. See the error message and documentation for the operation for more information on the cause of this exception.', 'refs' => [], ], 'GrantFlowEntitlementsRequest' => [ 'base' => 'Grants an entitlement on a flow.', 'refs' => [], ], 'GrantFlowEntitlementsResponse' => [ 'base' => 'The entitlements that were just granted.', 'refs' => [], ], 'InternalServerErrorException' => [ 'base' => 'Exception raised by AWS Elemental MediaConnect. See the error message and documentation for the operation for more information on the cause of this exception.', 'refs' => [], ], 'KeyType' => [ 'base' => NULL, 'refs' => [ 'Encryption$KeyType' => 'The type of key that is used for the encryption. If no keyType is provided, the service will use the default setting (static-key).', 'UpdateEncryption$KeyType' => 'The type of key that is used for the encryption. If no keyType is provided, the service will use the default setting (static-key).', ], ], 'ListEntitlementsResponse' => [ 'base' => 'The result of a successful ListEntitlements request. The response includes the ARN of each entitlement, the name of the associated flow, and the NextToken to use in a subsequent ListEntitlements request.', 'refs' => [], ], 'ListFlowsResponse' => [ 'base' => 'The result of a successful ListFlows request. The response includes flow summaries and the NextToken to use in a subsequent ListFlows request.', 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => 'The tags for the resource.', 'refs' => [], ], 'ListedEntitlement' => [ 'base' => 'An entitlement that has been granted to you from other AWS accounts.', 'refs' => [ '__listOfListedEntitlement$member' => NULL, ], ], 'ListedFlow' => [ 'base' => 'Provides a summary of a flow, including its ARN, Availability Zone, and source type.', 'refs' => [ '__listOfListedFlow$member' => NULL, ], ], 'Messages' => [ 'base' => 'Messages that provide the state of the flow.', 'refs' => [ 'DescribeFlowResponse$Messages' => NULL, ], ], 'NotFoundException' => [ 'base' => 'Exception raised by AWS Elemental MediaConnect. See the error message and documentation for the operation for more information on the cause of this exception.', 'refs' => [], ], 'Output' => [ 'base' => 'The settings for an output.', 'refs' => [ 'UpdateFlowOutputResponse$Output' => NULL, '__listOfOutput$member' => NULL, ], ], 'Protocol' => [ 'base' => NULL, 'refs' => [ 'AddOutputRequest$Protocol' => 'The protocol to use for the output.', 'SetSourceRequest$Protocol' => 'The protocol that is used by the source.', 'Transport$Protocol' => 'The protocol that is used by the source or output.', 'UpdateFlowOutputRequest$Protocol' => 'The protocol to use for the output.', 'UpdateFlowSourceRequest$Protocol' => 'The protocol that is used by the source.', ], ], 'RemoveFlowOutputResponse' => [ 'base' => 'The result of a successful RemoveFlowOutput request including the flow ARN and the output ARN that was removed.', 'refs' => [], ], 'ResponseError' => [ 'base' => 'Exception raised by AWS Elemental MediaConnect. See the error message and documentation for the operation for more information on the cause of this exception.', 'refs' => [], ], 'RevokeFlowEntitlementResponse' => [ 'base' => 'The result of a successful RevokeFlowEntitlement request. The response includes the ARN of the flow that was updated and the ARN of the entitlement that was revoked.', 'refs' => [], ], 'ServiceUnavailableException' => [ 'base' => 'Exception raised by AWS Elemental MediaConnect. See the error message and documentation for the operation for more information on the cause of this exception.', 'refs' => [], ], 'SetSourceRequest' => [ 'base' => 'The settings for the source of the flow.', 'refs' => [ 'CreateFlowRequest$Source' => NULL, ], ], 'Source' => [ 'base' => 'The settings for the source of the flow.', 'refs' => [ 'Flow$Source' => NULL, 'UpdateFlowSourceResponse$Source' => 'The settings for the source of the flow.', ], ], 'SourceType' => [ 'base' => NULL, 'refs' => [ 'ListedFlow$SourceType' => 'The type of source. This value is either owned (originated somewhere other than an AWS Elemental MediaConnect flow owned by another AWS account) or entitled (originated at an AWS Elemental MediaConnect flow owned by another AWS account).', ], ], 'StartFlowResponse' => [ 'base' => 'The result of a successful StartFlow request.', 'refs' => [], ], 'Status' => [ 'base' => NULL, 'refs' => [ 'DeleteFlowResponse$Status' => 'The status of the flow when the DeleteFlow process begins.', 'Flow$Status' => 'The current status of the flow.', 'ListedFlow$Status' => 'The current status of the flow.', 'StartFlowResponse$Status' => 'The status of the flow when the StartFlow process begins.', 'StopFlowResponse$Status' => 'The status of the flow when the StopFlow process begins.', ], ], 'StopFlowResponse' => [ 'base' => 'The result of a successful StopFlow request.', 'refs' => [], ], 'TagResourceRequest' => [ 'base' => 'The tags to add to the resource. Tag keys can have a maximum character length of 128 characters, and tag values can have a maximum length of 256 characters.', 'refs' => [], ], 'TooManyRequestsException' => [ 'base' => 'Exception raised by AWS Elemental MediaConnect. See the error message and documentation for the operation for more information on the cause of this exception.', 'refs' => [], ], 'Transport' => [ 'base' => 'Attributes related to the transport stream that are used in a source or output.', 'refs' => [ 'Output$Transport' => 'Attributes related to the transport stream that are used in the output.', 'Source$Transport' => 'Attributes related to the transport stream that are used in the source.', ], ], 'UpdateEncryption' => [ 'base' => 'Information about the encryption of the flow.', 'refs' => [ 'UpdateFlowEntitlementRequest$Encryption' => 'The type of encryption that will be used on the output associated with this entitlement.', 'UpdateFlowOutputRequest$Encryption' => 'The type of key used for the encryption. If no keyType is provided, the service will use the default setting (static-key).', 'UpdateFlowSourceRequest$Decryption' => 'The type of encryption used on the content ingested from this source.', ], ], 'UpdateFlowEntitlementRequest' => [ 'base' => 'The updates that you want to make to a specific entitlement.', 'refs' => [], ], 'UpdateFlowEntitlementResponse' => [ 'base' => 'The result of a successful UpdateFlowEntitlement request. The response includes the ARN of the flow that was updated and the updated entitlement configuration.', 'refs' => [], ], 'UpdateFlowOutputRequest' => [ 'base' => 'The updates that you want to make to an existing output of an existing flow.', 'refs' => [], ], 'UpdateFlowOutputResponse' => [ 'base' => 'The result of a successful UpdateFlowOutput request including the flow ARN and the updated output.', 'refs' => [], ], 'UpdateFlowSourceRequest' => [ 'base' => 'The settings for the updated source of the flow.', 'refs' => [], ], 'UpdateFlowSourceResponse' => [ 'base' => 'The result of a successful UpdateFlowSource request. The response includes the ARN of the flow that was updated and the updated source configuration.', 'refs' => [], ], '__integer' => [ 'base' => NULL, 'refs' => [ 'AddOutputRequest$MaxLatency' => 'The maximum latency in milliseconds for Zixi-based streams.', 'AddOutputRequest$Port' => 'The port to use when content is distributed to this output.', 'AddOutputRequest$SmoothingLatency' => 'The smoothing latency in milliseconds for RTP and RTP-FEC streams.', 'Output$Port' => 'The port to use when content is distributed to this output.', 'SetSourceRequest$IngestPort' => 'The port that the flow will be listening on for incoming content.', 'SetSourceRequest$MaxBitrate' => 'The smoothing max bitrate for RTP and RTP-FEC streams.', 'SetSourceRequest$MaxLatency' => 'The maximum latency in milliseconds for Zixi-based streams.', 'Source$IngestPort' => 'The port that the flow will be listening on for incoming content.', 'Transport$MaxBitrate' => 'The smoothing max bitrate for RTP and RTP-FEC streams.', 'Transport$MaxLatency' => 'The maximum latency in milliseconds for Zixi-based streams.', 'Transport$SmoothingLatency' => 'The smoothing latency in milliseconds for RTP and RTP-FEC streams.', 'UpdateFlowOutputRequest$MaxLatency' => 'The maximum latency in milliseconds for Zixi-based streams.', 'UpdateFlowOutputRequest$Port' => 'The port to use when content is distributed to this output.', 'UpdateFlowOutputRequest$SmoothingLatency' => 'The smoothing latency in milliseconds for RTP and RTP-FEC streams.', 'UpdateFlowSourceRequest$IngestPort' => 'The port that the flow will be listening on for incoming content.', 'UpdateFlowSourceRequest$MaxBitrate' => 'The smoothing max bitrate for RTP and RTP-FEC streams.', 'UpdateFlowSourceRequest$MaxLatency' => 'The maximum latency in milliseconds for Zixi-based streams.', ], ], '__listOfAddOutputRequest' => [ 'base' => NULL, 'refs' => [ 'AddFlowOutputsRequest$Outputs' => 'A list of outputs that you want to add.', 'CreateFlowRequest$Outputs' => 'The outputs that you want to add to this flow.', ], ], '__listOfEntitlement' => [ 'base' => NULL, 'refs' => [ 'Flow$Entitlements' => 'The entitlements in this flow.', 'GrantFlowEntitlementsResponse$Entitlements' => 'The entitlements that were just granted.', ], ], '__listOfGrantEntitlementRequest' => [ 'base' => NULL, 'refs' => [ 'CreateFlowRequest$Entitlements' => 'The entitlements that you want to grant on a flow.', 'GrantFlowEntitlementsRequest$Entitlements' => 'The list of entitlements that you want to grant.', ], ], '__listOfListedEntitlement' => [ 'base' => NULL, 'refs' => [ 'ListEntitlementsResponse$Entitlements' => 'A list of entitlements that have been granted to you from other AWS accounts.', ], ], '__listOfListedFlow' => [ 'base' => NULL, 'refs' => [ 'ListFlowsResponse$Flows' => 'A list of flow summaries.', ], ], '__listOfOutput' => [ 'base' => NULL, 'refs' => [ 'AddFlowOutputsResponse$Outputs' => 'The details of the newly added outputs.', 'Flow$Outputs' => 'The outputs in this flow.', ], ], '__listOf__string' => [ 'base' => NULL, 'refs' => [ 'Entitlement$Subscribers' => 'The AWS account IDs that you want to share your content with. The receiving accounts (subscribers) will be allowed to create their own flow using your content as the source.', 'GrantEntitlementRequest$Subscribers' => 'The AWS account IDs that you want to share your content with. The receiving accounts (subscribers) will be allowed to create their own flows using your content as the source.', 'Messages$Errors' => 'A list of errors that might have been generated from processes on this flow.', 'UpdateFlowEntitlementRequest$Subscribers' => 'The AWS account IDs that you want to share your content with. The receiving accounts (subscribers) will be allowed to create their own flow using your content as the source.', ], ], '__mapOf__string' => [ 'base' => NULL, 'refs' => [ 'ListTagsForResourceResponse$Tags' => 'A map from tag keys to values. Tag keys can have a maximum character length of 128 characters, and tag values can have a maximum length of 256 characters.', 'TagResourceRequest$Tags' => 'A map from tag keys to values. Tag keys can have a maximum character length of 128 characters, and tag values can have a maximum length of 256 characters.', ], ], '__string' => [ 'base' => NULL, 'refs' => [ 'AddFlowOutputsResponse$FlowArn' => 'The ARN of the flow that these outputs were added to.', 'AddOutputRequest$Description' => 'A description of the output. This description appears only on the AWS Elemental MediaConnect console and will not be seen by the end user.', 'AddOutputRequest$Destination' => 'The IP address from which video will be sent to output destinations.', 'AddOutputRequest$Name' => 'The name of the output. This value must be unique within the current flow.', 'AddOutputRequest$StreamId' => 'The stream ID that you want to use for this transport. This parameter applies only to Zixi-based streams.', 'CreateFlowRequest$AvailabilityZone' => 'The Availability Zone that you want to create the flow in. These options are limited to the Availability Zones within the current AWS Region.', 'CreateFlowRequest$Name' => 'The name of the flow.', 'DeleteFlowResponse$FlowArn' => 'The ARN of the flow that was deleted.', 'Encryption$RoleArn' => 'The ARN of the role that you created during setup (when you set up AWS Elemental MediaConnect as a trusted entity).', 'Encryption$SecretArn' => 'The ARN that was assigned to the secret that you created in AWS Secrets Manager to store the encryption key.', 'Entitlement$Description' => 'A description of the entitlement.', 'Entitlement$EntitlementArn' => 'The ARN of the entitlement.', 'Entitlement$Name' => 'The name of the entitlement.', 'Flow$AvailabilityZone' => 'The Availability Zone that you want to create the flow in. These options are limited to the Availability Zones within the current AWS.', 'Flow$Description' => 'A description of the flow. This value is not used or seen outside of the current AWS Elemental MediaConnect account.', 'Flow$EgressIp' => 'The IP address from which video will be sent to output destinations.', 'Flow$FlowArn' => 'The Amazon Resource Name (ARN), a unique identifier for any AWS resource, of the flow.', 'Flow$Name' => 'The name of the flow.', 'GrantEntitlementRequest$Description' => 'A description of the entitlement. This description appears only on the AWS Elemental MediaConnect console and will not be seen by the subscriber or end user.', 'GrantEntitlementRequest$Name' => 'The name of the entitlement. This value must be unique within the current flow.', 'GrantFlowEntitlementsResponse$FlowArn' => 'The ARN of the flow that these entitlements were granted to.', 'ListEntitlementsResponse$NextToken' => 'The token that identifies which batch of results that you want to see. For example, you submit a ListEntitlements request with MaxResults set at 5. The service returns the first batch of results (up to 5) and a NextToken value. To see the next batch of results, you can submit the ListEntitlements request a second time and specify the NextToken value.', 'ListFlowsResponse$NextToken' => 'The token that identifies which batch of results that you want to see. For example, you submit a ListFlows request with MaxResults set at 5. The service returns the first batch of results (up to 5) and a NextToken value. To see the next batch of results, you can submit the ListFlows request a second time and specify the NextToken value.', 'ListedEntitlement$EntitlementArn' => 'The ARN of the entitlement.', 'ListedEntitlement$EntitlementName' => 'The name of the entitlement.', 'ListedFlow$AvailabilityZone' => 'The Availability Zone that the flow was created in.', 'ListedFlow$Description' => 'A description of the flow.', 'ListedFlow$FlowArn' => 'The ARN of the flow.', 'ListedFlow$Name' => 'The name of the flow.', 'Output$Description' => 'A description of the output.', 'Output$Destination' => 'The address where you want to send the output.', 'Output$EntitlementArn' => 'The ARN of the entitlement on the originator\'\'s flow. This value is relevant only on entitled flows.', 'Output$MediaLiveInputArn' => 'The input ARN of the AWS Elemental MediaLive channel. This parameter is relevant only for outputs that were added by creating a MediaLive input.', 'Output$Name' => 'The name of the output. This value must be unique within the current flow.', 'Output$OutputArn' => 'The ARN of the output.', 'RemoveFlowOutputResponse$FlowArn' => 'The ARN of the flow that is associated with the output you removed.', 'RemoveFlowOutputResponse$OutputArn' => 'The ARN of the output that was removed.', 'ResponseError$Message' => 'The error message returned by AWS Elemental MediaConnect.', 'RevokeFlowEntitlementResponse$EntitlementArn' => 'The ARN of the entitlement that was revoked.', 'RevokeFlowEntitlementResponse$FlowArn' => 'The ARN of the flow that the entitlement was revoked from.', 'SetSourceRequest$Description' => 'A description for the source. This value is not used or seen outside of the current AWS Elemental MediaConnect account.', 'SetSourceRequest$EntitlementArn' => 'The ARN of the entitlement that allows you to subscribe to this flow. The entitlement is set by the flow originator, and the ARN is generated as part of the originator\'s flow.', 'SetSourceRequest$Name' => 'The name of the source.', 'SetSourceRequest$StreamId' => 'The stream ID that you want to use for this transport. This parameter applies only to Zixi-based streams.', 'SetSourceRequest$WhitelistCidr' => 'The range of IP addresses that should be allowed to contribute content to your source. These IP addresses should in the form of a Classless Inter-Domain Routing (CIDR) block; for example, 10.0.0.0/16.', 'Source$Description' => 'A description for the source. This value is not used or seen outside of the current AWS Elemental MediaConnect account.', 'Source$EntitlementArn' => 'The ARN of the entitlement that allows you to subscribe to content that comes from another AWS account. The entitlement is set by the content originator and the ARN is generated as part of the originator\'s flow.', 'Source$IngestIp' => 'The IP address that the flow will be listening on for incoming content.', 'Source$Name' => 'The name of the source.', 'Source$SourceArn' => 'The ARN of the source.', 'Source$WhitelistCidr' => 'The range of IP addresses that should be allowed to contribute content to your source. These IP addresses should in the form of a Classless Inter-Domain Routing (CIDR) block; for example, 10.0.0.0/16.', 'StartFlowResponse$FlowArn' => 'The ARN of the flow that you started.', 'StopFlowResponse$FlowArn' => 'The ARN of the flow that you stopped.', 'Transport$StreamId' => 'The stream ID that you want to use for this transport. This parameter applies only to Zixi-based streams.', 'UpdateEncryption$RoleArn' => 'The ARN of the role that you created during setup (when you set up AWS Elemental MediaConnect as a trusted entity).', 'UpdateEncryption$SecretArn' => 'The ARN that was assigned to the secret that you created in AWS Secrets Manager to store the encryption key.', 'UpdateFlowEntitlementRequest$Description' => 'A description of the entitlement. This description appears only on the AWS Elemental MediaConnect console and will not be seen by the subscriber or end user.', 'UpdateFlowEntitlementResponse$FlowArn' => 'The ARN of the flow that this entitlement was granted on.', 'UpdateFlowOutputRequest$Description' => 'A description of the output. This description appears only on the AWS Elemental MediaConnect console and will not be seen by the end user.', 'UpdateFlowOutputRequest$Destination' => 'The IP address where you want to send the output.', 'UpdateFlowOutputRequest$StreamId' => 'The stream ID that you want to use for this transport. This parameter applies only to Zixi-based streams.', 'UpdateFlowOutputResponse$FlowArn' => 'The ARN of the flow that is associated with the updated output.', 'UpdateFlowSourceRequest$Description' => 'A description for the source. This value is not used or seen outside of the current AWS Elemental MediaConnect account.', 'UpdateFlowSourceRequest$EntitlementArn' => 'The ARN of the entitlement that allows you to subscribe to this flow. The entitlement is set by the flow originator, and the ARN is generated as part of the originator\'s flow.', 'UpdateFlowSourceRequest$StreamId' => 'The stream ID that you want to use for this transport. This parameter applies only to Zixi-based streams.', 'UpdateFlowSourceRequest$WhitelistCidr' => 'The range of IP addresses that should be allowed to contribute content to your source. These IP addresses should in the form of a Classless Inter-Domain Routing (CIDR) block; for example, 10.0.0.0/16.', 'UpdateFlowSourceResponse$FlowArn' => 'The ARN of the flow that you want to update.', '__listOf__string$member' => NULL, '__mapOf__string$member' => NULL, ], ], ],];
