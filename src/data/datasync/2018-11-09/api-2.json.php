<?php
// This file was auto-generated from sdk-root/src/data/datasync/2018-11-09/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-11-09', 'endpointPrefix' => 'datasync', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'DataSync', 'serviceFullName' => 'AWS DataSync', 'serviceId' => 'DataSync', 'signatureVersion' => 'v4', 'signingName' => 'datasync', 'targetPrefix' => 'FmrsService', 'uid' => 'datasync-2018-11-09', ], 'operations' => [ 'CancelTaskExecution' => [ 'name' => 'CancelTaskExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CancelTaskExecutionRequest', ], 'output' => [ 'shape' => 'CancelTaskExecutionResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'CreateAgent' => [ 'name' => 'CreateAgent', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateAgentRequest', ], 'output' => [ 'shape' => 'CreateAgentResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'CreateLocationEfs' => [ 'name' => 'CreateLocationEfs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateLocationEfsRequest', ], 'output' => [ 'shape' => 'CreateLocationEfsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'CreateLocationFsxWindows' => [ 'name' => 'CreateLocationFsxWindows', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateLocationFsxWindowsRequest', ], 'output' => [ 'shape' => 'CreateLocationFsxWindowsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'CreateLocationNfs' => [ 'name' => 'CreateLocationNfs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateLocationNfsRequest', ], 'output' => [ 'shape' => 'CreateLocationNfsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'CreateLocationObjectStorage' => [ 'name' => 'CreateLocationObjectStorage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateLocationObjectStorageRequest', ], 'output' => [ 'shape' => 'CreateLocationObjectStorageResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'CreateLocationS3' => [ 'name' => 'CreateLocationS3', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateLocationS3Request', ], 'output' => [ 'shape' => 'CreateLocationS3Response', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'CreateLocationSmb' => [ 'name' => 'CreateLocationSmb', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateLocationSmbRequest', ], 'output' => [ 'shape' => 'CreateLocationSmbResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'CreateTask' => [ 'name' => 'CreateTask', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateTaskRequest', ], 'output' => [ 'shape' => 'CreateTaskResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'DeleteAgent' => [ 'name' => 'DeleteAgent', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteAgentRequest', ], 'output' => [ 'shape' => 'DeleteAgentResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'DeleteLocation' => [ 'name' => 'DeleteLocation', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteLocationRequest', ], 'output' => [ 'shape' => 'DeleteLocationResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'DeleteTask' => [ 'name' => 'DeleteTask', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteTaskRequest', ], 'output' => [ 'shape' => 'DeleteTaskResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'DescribeAgent' => [ 'name' => 'DescribeAgent', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAgentRequest', ], 'output' => [ 'shape' => 'DescribeAgentResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'DescribeLocationEfs' => [ 'name' => 'DescribeLocationEfs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeLocationEfsRequest', ], 'output' => [ 'shape' => 'DescribeLocationEfsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'DescribeLocationFsxWindows' => [ 'name' => 'DescribeLocationFsxWindows', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeLocationFsxWindowsRequest', ], 'output' => [ 'shape' => 'DescribeLocationFsxWindowsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'DescribeLocationNfs' => [ 'name' => 'DescribeLocationNfs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeLocationNfsRequest', ], 'output' => [ 'shape' => 'DescribeLocationNfsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'DescribeLocationObjectStorage' => [ 'name' => 'DescribeLocationObjectStorage', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeLocationObjectStorageRequest', ], 'output' => [ 'shape' => 'DescribeLocationObjectStorageResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'DescribeLocationS3' => [ 'name' => 'DescribeLocationS3', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeLocationS3Request', ], 'output' => [ 'shape' => 'DescribeLocationS3Response', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'DescribeLocationSmb' => [ 'name' => 'DescribeLocationSmb', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeLocationSmbRequest', ], 'output' => [ 'shape' => 'DescribeLocationSmbResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'DescribeTask' => [ 'name' => 'DescribeTask', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeTaskRequest', ], 'output' => [ 'shape' => 'DescribeTaskResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'DescribeTaskExecution' => [ 'name' => 'DescribeTaskExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeTaskExecutionRequest', ], 'output' => [ 'shape' => 'DescribeTaskExecutionResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'ListAgents' => [ 'name' => 'ListAgents', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListAgentsRequest', ], 'output' => [ 'shape' => 'ListAgentsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'ListLocations' => [ 'name' => 'ListLocations', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListLocationsRequest', ], 'output' => [ 'shape' => 'ListLocationsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'ListTaskExecutions' => [ 'name' => 'ListTaskExecutions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTaskExecutionsRequest', ], 'output' => [ 'shape' => 'ListTaskExecutionsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'ListTasks' => [ 'name' => 'ListTasks', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTasksRequest', ], 'output' => [ 'shape' => 'ListTasksResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'StartTaskExecution' => [ 'name' => 'StartTaskExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartTaskExecutionRequest', ], 'output' => [ 'shape' => 'StartTaskExecutionResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'UpdateAgent' => [ 'name' => 'UpdateAgent', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateAgentRequest', ], 'output' => [ 'shape' => 'UpdateAgentResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], 'UpdateTask' => [ 'name' => 'UpdateTask', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateTaskRequest', ], 'output' => [ 'shape' => 'UpdateTaskResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalException', ], ], ], ], 'shapes' => [ 'ActivationKey' => [ 'type' => 'string', 'max' => 29, 'pattern' => '[A-Z0-9]{5}(-[A-Z0-9]{5}){4}', ], 'AgentArn' => [ 'type' => 'string', 'max' => 128, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):datasync:[a-z\\-0-9]+:[0-9]{12}:agent/agent-[0-9a-z]{17}$', ], 'AgentArnList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgentArn', ], 'max' => 4, 'min' => 1, ], 'AgentList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AgentListEntry', ], ], 'AgentListEntry' => [ 'type' => 'structure', 'members' => [ 'AgentArn' => [ 'shape' => 'AgentArn', ], 'Name' => [ 'shape' => 'TagValue', ], 'Status' => [ 'shape' => 'AgentStatus', ], ], ], 'AgentStatus' => [ 'type' => 'string', 'enum' => [ 'ONLINE', 'OFFLINE', ], ], 'Atime' => [ 'type' => 'string', 'enum' => [ 'NONE', 'BEST_EFFORT', ], ], 'BytesPerSecond' => [ 'type' => 'long', 'min' => -1, ], 'CancelTaskExecutionRequest' => [ 'type' => 'structure', 'required' => [ 'TaskExecutionArn', ], 'members' => [ 'TaskExecutionArn' => [ 'shape' => 'TaskExecutionArn', ], ], ], 'CancelTaskExecutionResponse' => [ 'type' => 'structure', 'members' => [], ], 'CreateAgentRequest' => [ 'type' => 'structure', 'required' => [ 'ActivationKey', ], 'members' => [ 'ActivationKey' => [ 'shape' => 'ActivationKey', ], 'AgentName' => [ 'shape' => 'TagValue', ], 'Tags' => [ 'shape' => 'InputTagList', ], 'VpcEndpointId' => [ 'shape' => 'VpcEndpointId', ], 'SubnetArns' => [ 'shape' => 'PLSubnetArnList', ], 'SecurityGroupArns' => [ 'shape' => 'PLSecurityGroupArnList', ], ], ], 'CreateAgentResponse' => [ 'type' => 'structure', 'members' => [ 'AgentArn' => [ 'shape' => 'AgentArn', ], ], ], 'CreateLocationEfsRequest' => [ 'type' => 'structure', 'required' => [ 'EfsFilesystemArn', 'Ec2Config', ], 'members' => [ 'Subdirectory' => [ 'shape' => 'EfsSubdirectory', ], 'EfsFilesystemArn' => [ 'shape' => 'EfsFilesystemArn', ], 'Ec2Config' => [ 'shape' => 'Ec2Config', ], 'Tags' => [ 'shape' => 'InputTagList', ], ], ], 'CreateLocationEfsResponse' => [ 'type' => 'structure', 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], ], ], 'CreateLocationFsxWindowsRequest' => [ 'type' => 'structure', 'required' => [ 'FsxFilesystemArn', 'SecurityGroupArns', 'User', 'Password', ], 'members' => [ 'Subdirectory' => [ 'shape' => 'FsxWindowsSubdirectory', ], 'FsxFilesystemArn' => [ 'shape' => 'FsxFilesystemArn', ], 'SecurityGroupArns' => [ 'shape' => 'Ec2SecurityGroupArnList', ], 'Tags' => [ 'shape' => 'InputTagList', ], 'User' => [ 'shape' => 'SmbUser', ], 'Domain' => [ 'shape' => 'SmbDomain', ], 'Password' => [ 'shape' => 'SmbPassword', ], ], ], 'CreateLocationFsxWindowsResponse' => [ 'type' => 'structure', 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], ], ], 'CreateLocationNfsRequest' => [ 'type' => 'structure', 'required' => [ 'Subdirectory', 'ServerHostname', 'OnPremConfig', ], 'members' => [ 'Subdirectory' => [ 'shape' => 'NfsSubdirectory', ], 'ServerHostname' => [ 'shape' => 'ServerHostname', ], 'OnPremConfig' => [ 'shape' => 'OnPremConfig', ], 'MountOptions' => [ 'shape' => 'NfsMountOptions', ], 'Tags' => [ 'shape' => 'InputTagList', ], ], ], 'CreateLocationNfsResponse' => [ 'type' => 'structure', 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], ], ], 'CreateLocationObjectStorageRequest' => [ 'type' => 'structure', 'required' => [ 'ServerHostname', 'BucketName', 'AgentArns', ], 'members' => [ 'ServerHostname' => [ 'shape' => 'ServerHostname', ], 'ServerPort' => [ 'shape' => 'ObjectStorageServerPort', ], 'ServerProtocol' => [ 'shape' => 'ObjectStorageServerProtocol', ], 'Subdirectory' => [ 'shape' => 'S3Subdirectory', ], 'BucketName' => [ 'shape' => 'ObjectStorageBucketName', ], 'AccessKey' => [ 'shape' => 'ObjectStorageAccessKey', ], 'SecretKey' => [ 'shape' => 'ObjectStorageSecretKey', ], 'AgentArns' => [ 'shape' => 'AgentArnList', ], 'Tags' => [ 'shape' => 'InputTagList', ], ], ], 'CreateLocationObjectStorageResponse' => [ 'type' => 'structure', 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], ], ], 'CreateLocationS3Request' => [ 'type' => 'structure', 'required' => [ 'S3BucketArn', 'S3Config', ], 'members' => [ 'Subdirectory' => [ 'shape' => 'S3Subdirectory', ], 'S3BucketArn' => [ 'shape' => 'S3BucketArn', ], 'S3StorageClass' => [ 'shape' => 'S3StorageClass', ], 'S3Config' => [ 'shape' => 'S3Config', ], 'Tags' => [ 'shape' => 'InputTagList', ], ], ], 'CreateLocationS3Response' => [ 'type' => 'structure', 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], ], ], 'CreateLocationSmbRequest' => [ 'type' => 'structure', 'required' => [ 'Subdirectory', 'ServerHostname', 'User', 'Password', 'AgentArns', ], 'members' => [ 'Subdirectory' => [ 'shape' => 'SmbSubdirectory', ], 'ServerHostname' => [ 'shape' => 'ServerHostname', ], 'User' => [ 'shape' => 'SmbUser', ], 'Domain' => [ 'shape' => 'SmbDomain', ], 'Password' => [ 'shape' => 'SmbPassword', ], 'AgentArns' => [ 'shape' => 'AgentArnList', ], 'MountOptions' => [ 'shape' => 'SmbMountOptions', ], 'Tags' => [ 'shape' => 'InputTagList', ], ], ], 'CreateLocationSmbResponse' => [ 'type' => 'structure', 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], ], ], 'CreateTaskRequest' => [ 'type' => 'structure', 'required' => [ 'SourceLocationArn', 'DestinationLocationArn', ], 'members' => [ 'SourceLocationArn' => [ 'shape' => 'LocationArn', ], 'DestinationLocationArn' => [ 'shape' => 'LocationArn', ], 'CloudWatchLogGroupArn' => [ 'shape' => 'LogGroupArn', ], 'Name' => [ 'shape' => 'TagValue', ], 'Options' => [ 'shape' => 'Options', ], 'Excludes' => [ 'shape' => 'FilterList', ], 'Schedule' => [ 'shape' => 'TaskSchedule', ], 'Tags' => [ 'shape' => 'InputTagList', ], ], ], 'CreateTaskResponse' => [ 'type' => 'structure', 'members' => [ 'TaskArn' => [ 'shape' => 'TaskArn', ], ], ], 'DeleteAgentRequest' => [ 'type' => 'structure', 'required' => [ 'AgentArn', ], 'members' => [ 'AgentArn' => [ 'shape' => 'AgentArn', ], ], ], 'DeleteAgentResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteLocationRequest' => [ 'type' => 'structure', 'required' => [ 'LocationArn', ], 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], ], ], 'DeleteLocationResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteTaskRequest' => [ 'type' => 'structure', 'required' => [ 'TaskArn', ], 'members' => [ 'TaskArn' => [ 'shape' => 'TaskArn', ], ], ], 'DeleteTaskResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeAgentRequest' => [ 'type' => 'structure', 'required' => [ 'AgentArn', ], 'members' => [ 'AgentArn' => [ 'shape' => 'AgentArn', ], ], ], 'DescribeAgentResponse' => [ 'type' => 'structure', 'members' => [ 'AgentArn' => [ 'shape' => 'AgentArn', ], 'Name' => [ 'shape' => 'TagValue', ], 'Status' => [ 'shape' => 'AgentStatus', ], 'LastConnectionTime' => [ 'shape' => 'Time', ], 'CreationTime' => [ 'shape' => 'Time', ], 'EndpointType' => [ 'shape' => 'EndpointType', ], 'PrivateLinkConfig' => [ 'shape' => 'PrivateLinkConfig', ], ], ], 'DescribeLocationEfsRequest' => [ 'type' => 'structure', 'required' => [ 'LocationArn', ], 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], ], ], 'DescribeLocationEfsResponse' => [ 'type' => 'structure', 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], 'LocationUri' => [ 'shape' => 'LocationUri', ], 'Ec2Config' => [ 'shape' => 'Ec2Config', ], 'CreationTime' => [ 'shape' => 'Time', ], ], ], 'DescribeLocationFsxWindowsRequest' => [ 'type' => 'structure', 'required' => [ 'LocationArn', ], 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], ], ], 'DescribeLocationFsxWindowsResponse' => [ 'type' => 'structure', 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], 'LocationUri' => [ 'shape' => 'LocationUri', ], 'SecurityGroupArns' => [ 'shape' => 'Ec2SecurityGroupArnList', ], 'CreationTime' => [ 'shape' => 'Time', ], 'User' => [ 'shape' => 'SmbUser', ], 'Domain' => [ 'shape' => 'SmbDomain', ], ], ], 'DescribeLocationNfsRequest' => [ 'type' => 'structure', 'required' => [ 'LocationArn', ], 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], ], ], 'DescribeLocationNfsResponse' => [ 'type' => 'structure', 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], 'LocationUri' => [ 'shape' => 'LocationUri', ], 'OnPremConfig' => [ 'shape' => 'OnPremConfig', ], 'MountOptions' => [ 'shape' => 'NfsMountOptions', ], 'CreationTime' => [ 'shape' => 'Time', ], ], ], 'DescribeLocationObjectStorageRequest' => [ 'type' => 'structure', 'required' => [ 'LocationArn', ], 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], ], ], 'DescribeLocationObjectStorageResponse' => [ 'type' => 'structure', 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], 'LocationUri' => [ 'shape' => 'LocationUri', ], 'AccessKey' => [ 'shape' => 'ObjectStorageAccessKey', ], 'ServerPort' => [ 'shape' => 'ObjectStorageServerPort', ], 'ServerProtocol' => [ 'shape' => 'ObjectStorageServerProtocol', ], 'AgentArns' => [ 'shape' => 'AgentArnList', ], 'CreationTime' => [ 'shape' => 'Time', ], ], ], 'DescribeLocationS3Request' => [ 'type' => 'structure', 'required' => [ 'LocationArn', ], 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], ], ], 'DescribeLocationS3Response' => [ 'type' => 'structure', 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], 'LocationUri' => [ 'shape' => 'LocationUri', ], 'S3StorageClass' => [ 'shape' => 'S3StorageClass', ], 'S3Config' => [ 'shape' => 'S3Config', ], 'CreationTime' => [ 'shape' => 'Time', ], ], ], 'DescribeLocationSmbRequest' => [ 'type' => 'structure', 'required' => [ 'LocationArn', ], 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], ], ], 'DescribeLocationSmbResponse' => [ 'type' => 'structure', 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], 'LocationUri' => [ 'shape' => 'LocationUri', ], 'AgentArns' => [ 'shape' => 'AgentArnList', ], 'User' => [ 'shape' => 'SmbUser', ], 'Domain' => [ 'shape' => 'SmbDomain', ], 'MountOptions' => [ 'shape' => 'SmbMountOptions', ], 'CreationTime' => [ 'shape' => 'Time', ], ], ], 'DescribeTaskExecutionRequest' => [ 'type' => 'structure', 'required' => [ 'TaskExecutionArn', ], 'members' => [ 'TaskExecutionArn' => [ 'shape' => 'TaskExecutionArn', ], ], ], 'DescribeTaskExecutionResponse' => [ 'type' => 'structure', 'members' => [ 'TaskExecutionArn' => [ 'shape' => 'TaskExecutionArn', ], 'Status' => [ 'shape' => 'TaskExecutionStatus', ], 'Options' => [ 'shape' => 'Options', ], 'Excludes' => [ 'shape' => 'FilterList', ], 'Includes' => [ 'shape' => 'FilterList', ], 'StartTime' => [ 'shape' => 'Time', ], 'EstimatedFilesToTransfer' => [ 'shape' => 'long', ], 'EstimatedBytesToTransfer' => [ 'shape' => 'long', ], 'FilesTransferred' => [ 'shape' => 'long', ], 'BytesWritten' => [ 'shape' => 'long', ], 'BytesTransferred' => [ 'shape' => 'long', ], 'Result' => [ 'shape' => 'TaskExecutionResultDetail', ], ], ], 'DescribeTaskRequest' => [ 'type' => 'structure', 'required' => [ 'TaskArn', ], 'members' => [ 'TaskArn' => [ 'shape' => 'TaskArn', ], ], ], 'DescribeTaskResponse' => [ 'type' => 'structure', 'members' => [ 'TaskArn' => [ 'shape' => 'TaskArn', ], 'Status' => [ 'shape' => 'TaskStatus', ], 'Name' => [ 'shape' => 'TagValue', ], 'CurrentTaskExecutionArn' => [ 'shape' => 'TaskExecutionArn', ], 'SourceLocationArn' => [ 'shape' => 'LocationArn', ], 'DestinationLocationArn' => [ 'shape' => 'LocationArn', ], 'CloudWatchLogGroupArn' => [ 'shape' => 'LogGroupArn', ], 'SourceNetworkInterfaceArns' => [ 'shape' => 'SourceNetworkInterfaceArns', ], 'DestinationNetworkInterfaceArns' => [ 'shape' => 'DestinationNetworkInterfaceArns', ], 'Options' => [ 'shape' => 'Options', ], 'Excludes' => [ 'shape' => 'FilterList', ], 'Schedule' => [ 'shape' => 'TaskSchedule', ], 'ErrorCode' => [ 'shape' => 'string', ], 'ErrorDetail' => [ 'shape' => 'string', ], 'CreationTime' => [ 'shape' => 'Time', ], ], ], 'DestinationNetworkInterfaceArns' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterfaceArn', ], ], 'Duration' => [ 'type' => 'long', 'min' => 0, ], 'Ec2Config' => [ 'type' => 'structure', 'required' => [ 'SubnetArn', 'SecurityGroupArns', ], 'members' => [ 'SubnetArn' => [ 'shape' => 'Ec2SubnetArn', ], 'SecurityGroupArns' => [ 'shape' => 'Ec2SecurityGroupArnList', ], ], ], 'Ec2SecurityGroupArn' => [ 'type' => 'string', 'max' => 128, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):ec2:[a-z\\-0-9]*:[0-9]{12}:security-group/.*$', ], 'Ec2SecurityGroupArnList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ec2SecurityGroupArn', ], 'max' => 5, 'min' => 1, ], 'Ec2SubnetArn' => [ 'type' => 'string', 'max' => 128, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):ec2:[a-z\\-0-9]*:[0-9]{12}:subnet/.*$', ], 'EfsFilesystemArn' => [ 'type' => 'string', 'max' => 128, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):elasticfilesystem:[a-z\\-0-9]*:[0-9]{12}:file-system/fs-.*$', ], 'EfsSubdirectory' => [ 'type' => 'string', 'max' => 4096, 'pattern' => '^[a-zA-Z0-9_\\-\\+\\./\\(\\)\\p{Zs}]*$', ], 'Endpoint' => [ 'type' => 'string', 'max' => 15, 'min' => 7, 'pattern' => '\\A(25[0-5]|2[0-4]\\d|[0-1]?\\d?\\d)(\\.(25[0-5]|2[0-4]\\d|[0-1]?\\d?\\d)){3}\\z', ], 'EndpointType' => [ 'type' => 'string', 'enum' => [ 'PUBLIC', 'PRIVATE_LINK', 'FIPS', ], ], 'FilterList' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilterRule', ], 'max' => 1, 'min' => 0, ], 'FilterRule' => [ 'type' => 'structure', 'members' => [ 'FilterType' => [ 'shape' => 'FilterType', ], 'Value' => [ 'shape' => 'FilterValue', ], ], ], 'FilterType' => [ 'type' => 'string', 'enum' => [ 'SIMPLE_PATTERN', ], 'max' => 128, 'pattern' => '^[A-Z0-9_]+$', ], 'FilterValue' => [ 'type' => 'string', 'max' => 409600, 'pattern' => '^[^\\x00]+$', ], 'FsxFilesystemArn' => [ 'type' => 'string', 'max' => 128, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):fsx:[a-z\\-0-9]*:[0-9]{12}:file-system/fs-.*$', ], 'FsxWindowsSubdirectory' => [ 'type' => 'string', 'max' => 4096, 'pattern' => '^[a-zA-Z0-9_\\-\\+\\./\\(\\)\\$\\p{Zs}]+$', ], 'Gid' => [ 'type' => 'string', 'enum' => [ 'NONE', 'INT_VALUE', 'NAME', 'BOTH', ], ], 'IamRoleArn' => [ 'type' => 'string', 'max' => 2048, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):iam::[0-9]{12}:role/.*$', ], 'InputTagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagListEntry', ], 'max' => 50, 'min' => 0, ], 'InternalException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'string', ], 'errorCode' => [ 'shape' => 'string', ], ], 'exception' => true, 'fault' => true, ], 'InvalidRequestException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'string', ], 'errorCode' => [ 'shape' => 'string', ], ], 'exception' => true, ], 'ListAgentsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListAgentsResponse' => [ 'type' => 'structure', 'members' => [ 'Agents' => [ 'shape' => 'AgentList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListLocationsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListLocationsResponse' => [ 'type' => 'structure', 'members' => [ 'Locations' => [ 'shape' => 'LocationList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'TaggableResourceArn', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'OutputTagList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTaskExecutionsRequest' => [ 'type' => 'structure', 'members' => [ 'TaskArn' => [ 'shape' => 'TaskArn', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTaskExecutionsResponse' => [ 'type' => 'structure', 'members' => [ 'TaskExecutions' => [ 'shape' => 'TaskExecutionList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTasksRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTasksResponse' => [ 'type' => 'structure', 'members' => [ 'Tasks' => [ 'shape' => 'TaskList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'LocationArn' => [ 'type' => 'string', 'max' => 128, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):datasync:[a-z\\-0-9]+:[0-9]{12}:location/loc-[0-9a-z]{17}$', ], 'LocationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LocationListEntry', ], ], 'LocationListEntry' => [ 'type' => 'structure', 'members' => [ 'LocationArn' => [ 'shape' => 'LocationArn', ], 'LocationUri' => [ 'shape' => 'LocationUri', ], ], ], 'LocationUri' => [ 'type' => 'string', 'max' => 4356, 'pattern' => '^(efs|nfs|s3|smb|fsxw)://[a-zA-Z0-9.\\-]+$', ], 'LogGroupArn' => [ 'type' => 'string', 'max' => 562, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):logs:[a-z\\-0-9]*:[0-9]{12}:log-group:([^:\\*]*)(:\\*)?$', ], 'LogLevel' => [ 'type' => 'string', 'enum' => [ 'OFF', 'BASIC', 'TRANSFER', ], ], 'MaxResults' => [ 'type' => 'integer', 'max' => 100, 'min' => 0, ], 'Mtime' => [ 'type' => 'string', 'enum' => [ 'NONE', 'PRESERVE', ], ], 'NetworkInterfaceArn' => [ 'type' => 'string', 'max' => 128, 'pattern' => '^arn:aws[\\-a-z]{0,}:ec2:[a-z\\-0-9]*:[0-9]{12}:network-interface/eni-[0-9a-f]+$', ], 'NextToken' => [ 'type' => 'string', 'max' => 65535, 'pattern' => '[a-zA-Z0-9=_-]+', ], 'NfsMountOptions' => [ 'type' => 'structure', 'members' => [ 'Version' => [ 'shape' => 'NfsVersion', ], ], ], 'NfsSubdirectory' => [ 'type' => 'string', 'max' => 4096, 'pattern' => '^[a-zA-Z0-9_\\-\\+\\./\\(\\)\\p{Zs}]+$', ], 'NfsVersion' => [ 'type' => 'string', 'enum' => [ 'AUTOMATIC', 'NFS3', 'NFS4_0', 'NFS4_1', ], ], 'ObjectStorageAccessKey' => [ 'type' => 'string', 'max' => 200, 'min' => 8, 'pattern' => '^.+$', ], 'ObjectStorageBucketName' => [ 'type' => 'string', 'max' => 63, 'min' => 3, 'pattern' => '^[a-zA-Z0-9_\\-\\+\\./\\(\\)\\$\\p{Zs}]+$', ], 'ObjectStorageSecretKey' => [ 'type' => 'string', 'max' => 200, 'min' => 8, 'pattern' => '^.+$', 'sensitive' => true, ], 'ObjectStorageServerPort' => [ 'type' => 'integer', 'box' => true, 'max' => 65536, 'min' => 1, ], 'ObjectStorageServerProtocol' => [ 'type' => 'string', 'enum' => [ 'HTTPS', 'HTTP', ], ], 'OnPremConfig' => [ 'type' => 'structure', 'required' => [ 'AgentArns', ], 'members' => [ 'AgentArns' => [ 'shape' => 'AgentArnList', ], ], ], 'Options' => [ 'type' => 'structure', 'members' => [ 'VerifyMode' => [ 'shape' => 'VerifyMode', ], 'OverwriteMode' => [ 'shape' => 'OverwriteMode', ], 'Atime' => [ 'shape' => 'Atime', ], 'Mtime' => [ 'shape' => 'Mtime', ], 'Uid' => [ 'shape' => 'Uid', ], 'Gid' => [ 'shape' => 'Gid', ], 'PreserveDeletedFiles' => [ 'shape' => 'PreserveDeletedFiles', ], 'PreserveDevices' => [ 'shape' => 'PreserveDevices', ], 'PosixPermissions' => [ 'shape' => 'PosixPermissions', ], 'BytesPerSecond' => [ 'shape' => 'BytesPerSecond', ], 'TaskQueueing' => [ 'shape' => 'TaskQueueing', ], 'LogLevel' => [ 'shape' => 'LogLevel', ], 'TransferMode' => [ 'shape' => 'TransferMode', ], ], ], 'OutputTagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagListEntry', ], 'max' => 55, 'min' => 0, ], 'OverwriteMode' => [ 'type' => 'string', 'enum' => [ 'ALWAYS', 'NEVER', ], ], 'PLSecurityGroupArnList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ec2SecurityGroupArn', ], 'max' => 1, 'min' => 1, ], 'PLSubnetArnList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ec2SubnetArn', ], 'max' => 1, 'min' => 1, ], 'PhaseStatus' => [ 'type' => 'string', 'enum' => [ 'PENDING', 'SUCCESS', 'ERROR', ], ], 'PosixPermissions' => [ 'type' => 'string', 'enum' => [ 'NONE', 'PRESERVE', ], ], 'PreserveDeletedFiles' => [ 'type' => 'string', 'enum' => [ 'PRESERVE', 'REMOVE', ], ], 'PreserveDevices' => [ 'type' => 'string', 'enum' => [ 'NONE', 'PRESERVE', ], ], 'PrivateLinkConfig' => [ 'type' => 'structure', 'members' => [ 'VpcEndpointId' => [ 'shape' => 'VpcEndpointId', ], 'PrivateLinkEndpoint' => [ 'shape' => 'Endpoint', ], 'SubnetArns' => [ 'shape' => 'PLSubnetArnList', ], 'SecurityGroupArns' => [ 'shape' => 'PLSecurityGroupArnList', ], ], ], 'S3BucketArn' => [ 'type' => 'string', 'max' => 76, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):s3:::([^/]*)$', ], 'S3Config' => [ 'type' => 'structure', 'required' => [ 'BucketAccessRoleArn', ], 'members' => [ 'BucketAccessRoleArn' => [ 'shape' => 'IamRoleArn', ], ], ], 'S3StorageClass' => [ 'type' => 'string', 'enum' => [ 'STANDARD', 'STANDARD_IA', 'ONEZONE_IA', 'INTELLIGENT_TIERING', 'GLACIER', 'DEEP_ARCHIVE', ], ], 'S3Subdirectory' => [ 'type' => 'string', 'max' => 4096, 'pattern' => '^[a-zA-Z0-9_\\-\\+\\./\\(\\)\\p{Zs}]*$', ], 'ScheduleExpressionCron' => [ 'type' => 'string', 'max' => 256, 'pattern' => '^[a-zA-Z0-9\\ \\_\\*\\?\\,\\|\\^\\-\\/\\#\\s\\(\\)\\+]*$', ], 'ServerHostname' => [ 'type' => 'string', 'max' => 255, 'pattern' => '^(([a-zA-Z0-9\\-]*[a-zA-Z0-9])\\.)*([A-Za-z0-9\\-]*[A-Za-z0-9])$', ], 'SmbDomain' => [ 'type' => 'string', 'max' => 253, 'pattern' => '^([A-Za-z0-9]+[A-Za-z0-9-.]*)*[A-Za-z0-9-]*[A-Za-z0-9]$', ], 'SmbMountOptions' => [ 'type' => 'structure', 'members' => [ 'Version' => [ 'shape' => 'SmbVersion', ], ], ], 'SmbPassword' => [ 'type' => 'string', 'max' => 104, 'pattern' => '^.{0,104}$', 'sensitive' => true, ], 'SmbSubdirectory' => [ 'type' => 'string', 'max' => 4096, 'pattern' => '^[a-zA-Z0-9_\\-\\+\\./\\(\\)\\$\\p{Zs}]+$', ], 'SmbUser' => [ 'type' => 'string', 'max' => 104, 'pattern' => '^[^\\x5B\\x5D\\\\/:;|=,+*?]{1,104}$', ], 'SmbVersion' => [ 'type' => 'string', 'enum' => [ 'AUTOMATIC', 'SMB2', 'SMB3', ], ], 'SourceNetworkInterfaceArns' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterfaceArn', ], ], 'StartTaskExecutionRequest' => [ 'type' => 'structure', 'required' => [ 'TaskArn', ], 'members' => [ 'TaskArn' => [ 'shape' => 'TaskArn', ], 'OverrideOptions' => [ 'shape' => 'Options', ], 'Includes' => [ 'shape' => 'FilterList', ], ], ], 'StartTaskExecutionResponse' => [ 'type' => 'structure', 'members' => [ 'TaskExecutionArn' => [ 'shape' => 'TaskExecutionArn', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^[a-zA-Z0-9\\s+=._:/-]+$', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 50, 'min' => 1, ], 'TagListEntry' => [ 'type' => 'structure', 'required' => [ 'Key', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'Tags', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'TaggableResourceArn', ], 'Tags' => [ 'shape' => 'InputTagList', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^[a-zA-Z0-9\\s+=._:@/-]+$', ], 'TaggableResourceArn' => [ 'type' => 'string', 'max' => 128, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):datasync:[a-z\\-0-9]+:[0-9]{12}:(agent|task|location)/(agent|task|loc)-[0-9a-z]{17}$', ], 'TaskArn' => [ 'type' => 'string', 'max' => 128, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):datasync:[a-z\\-0-9]*:[0-9]{12}:task/task-[0-9a-f]{17}$', ], 'TaskExecutionArn' => [ 'type' => 'string', 'max' => 128, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso|aws-iso-b):datasync:[a-z\\-0-9]*:[0-9]{12}:task/task-[0-9a-f]{17}/execution/exec-[0-9a-f]{17}$', ], 'TaskExecutionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskExecutionListEntry', ], ], 'TaskExecutionListEntry' => [ 'type' => 'structure', 'members' => [ 'TaskExecutionArn' => [ 'shape' => 'TaskExecutionArn', ], 'Status' => [ 'shape' => 'TaskExecutionStatus', ], ], ], 'TaskExecutionResultDetail' => [ 'type' => 'structure', 'members' => [ 'PrepareDuration' => [ 'shape' => 'Duration', ], 'PrepareStatus' => [ 'shape' => 'PhaseStatus', ], 'TotalDuration' => [ 'shape' => 'Duration', ], 'TransferDuration' => [ 'shape' => 'Duration', ], 'TransferStatus' => [ 'shape' => 'PhaseStatus', ], 'VerifyDuration' => [ 'shape' => 'Duration', ], 'VerifyStatus' => [ 'shape' => 'PhaseStatus', ], 'ErrorCode' => [ 'shape' => 'string', ], 'ErrorDetail' => [ 'shape' => 'string', ], ], ], 'TaskExecutionStatus' => [ 'type' => 'string', 'enum' => [ 'QUEUED', 'LAUNCHING', 'PREPARING', 'TRANSFERRING', 'VERIFYING', 'SUCCESS', 'ERROR', ], ], 'TaskList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskListEntry', ], ], 'TaskListEntry' => [ 'type' => 'structure', 'members' => [ 'TaskArn' => [ 'shape' => 'TaskArn', ], 'Status' => [ 'shape' => 'TaskStatus', ], 'Name' => [ 'shape' => 'TagValue', ], ], ], 'TaskQueueing' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'TaskSchedule' => [ 'type' => 'structure', 'required' => [ 'ScheduleExpression', ], 'members' => [ 'ScheduleExpression' => [ 'shape' => 'ScheduleExpressionCron', ], ], ], 'TaskStatus' => [ 'type' => 'string', 'enum' => [ 'AVAILABLE', 'CREATING', 'QUEUED', 'RUNNING', 'UNAVAILABLE', ], ], 'Time' => [ 'type' => 'timestamp', ], 'TransferMode' => [ 'type' => 'string', 'enum' => [ 'CHANGED', 'ALL', ], ], 'Uid' => [ 'type' => 'string', 'enum' => [ 'NONE', 'INT_VALUE', 'NAME', 'BOTH', ], ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'Keys', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'TaggableResourceArn', ], 'Keys' => [ 'shape' => 'TagKeyList', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateAgentRequest' => [ 'type' => 'structure', 'required' => [ 'AgentArn', ], 'members' => [ 'AgentArn' => [ 'shape' => 'AgentArn', ], 'Name' => [ 'shape' => 'TagValue', ], ], ], 'UpdateAgentResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateTaskRequest' => [ 'type' => 'structure', 'required' => [ 'TaskArn', ], 'members' => [ 'TaskArn' => [ 'shape' => 'TaskArn', ], 'Options' => [ 'shape' => 'Options', ], 'Excludes' => [ 'shape' => 'FilterList', ], 'Schedule' => [ 'shape' => 'TaskSchedule', ], 'Name' => [ 'shape' => 'TagValue', ], 'CloudWatchLogGroupArn' => [ 'shape' => 'LogGroupArn', ], ], ], 'UpdateTaskResponse' => [ 'type' => 'structure', 'members' => [], ], 'VerifyMode' => [ 'type' => 'string', 'enum' => [ 'POINT_IN_TIME_CONSISTENT', 'ONLY_FILES_TRANSFERRED', 'NONE', ], ], 'VpcEndpointId' => [ 'type' => 'string', 'pattern' => '^vpce-[0-9a-f]{17}$', ], 'long' => [ 'type' => 'long', ], 'string' => [ 'type' => 'string', ], ],];
