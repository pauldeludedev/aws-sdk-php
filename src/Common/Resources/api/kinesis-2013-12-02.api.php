<?php return [
  'metadata' => [
    'apiVersion' => '2013-12-02',
    'endpointPrefix' => 'kinesis',
    'jsonVersion' => '1.1',
    'serviceAbbreviation' => 'Kinesis',
    'serviceFullName' => 'Amazon Kinesis',
    'signatureVersion' => 'v4',
    'targetPrefix' => 'Kinesis_20131202',
    'protocol' => 'json',
  ],
  'operations' => [
    'AddTagsToStream' => [
      'name' => 'AddTagsToStream',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'AddTagsToStreamInput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceInUseException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgumentException',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'exception' => true,
        ],
      ],
    ],
    'CreateStream' => [
      'name' => 'CreateStream',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateStreamInput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceInUseException',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgumentException',
          'exception' => true,
        ],
      ],
    ],
    'DeleteStream' => [
      'name' => 'DeleteStream',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteStreamInput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'exception' => true,
        ],
      ],
    ],
    'DescribeStream' => [
      'name' => 'DescribeStream',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeStreamInput',
      ],
      'output' => [
        'shape' => 'DescribeStreamOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'exception' => true,
        ],
      ],
    ],
    'GetRecords' => [
      'name' => 'GetRecords',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetRecordsInput',
      ],
      'output' => [
        'shape' => 'GetRecordsOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgumentException',
          'exception' => true,
        ],
        [
          'shape' => 'ProvisionedThroughputExceededException',
          'exception' => true,
        ],
        [
          'shape' => 'ExpiredIteratorException',
          'exception' => true,
        ],
      ],
    ],
    'GetShardIterator' => [
      'name' => 'GetShardIterator',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetShardIteratorInput',
      ],
      'output' => [
        'shape' => 'GetShardIteratorOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgumentException',
          'exception' => true,
        ],
        [
          'shape' => 'ProvisionedThroughputExceededException',
          'exception' => true,
        ],
      ],
    ],
    'ListStreams' => [
      'name' => 'ListStreams',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListStreamsInput',
      ],
      'output' => [
        'shape' => 'ListStreamsOutput',
      ],
      'errors' => [
        [
          'shape' => 'LimitExceededException',
          'exception' => true,
        ],
      ],
    ],
    'ListTagsForStream' => [
      'name' => 'ListTagsForStream',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListTagsForStreamInput',
      ],
      'output' => [
        'shape' => 'ListTagsForStreamOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgumentException',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'exception' => true,
        ],
      ],
    ],
    'MergeShards' => [
      'name' => 'MergeShards',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'MergeShardsInput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceInUseException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgumentException',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'exception' => true,
        ],
      ],
    ],
    'PutRecord' => [
      'name' => 'PutRecord',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'PutRecordInput',
      ],
      'output' => [
        'shape' => 'PutRecordOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgumentException',
          'exception' => true,
        ],
        [
          'shape' => 'ProvisionedThroughputExceededException',
          'exception' => true,
        ],
      ],
    ],
    'PutRecords' => [
      'name' => 'PutRecords',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'PutRecordsInput',
      ],
      'output' => [
        'shape' => 'PutRecordsOutput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgumentException',
          'exception' => true,
        ],
        [
          'shape' => 'ProvisionedThroughputExceededException',
          'exception' => true,
        ],
      ],
    ],
    'RemoveTagsFromStream' => [
      'name' => 'RemoveTagsFromStream',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'RemoveTagsFromStreamInput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceInUseException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgumentException',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'exception' => true,
        ],
      ],
    ],
    'SplitShard' => [
      'name' => 'SplitShard',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'SplitShardInput',
      ],
      'errors' => [
        [
          'shape' => 'ResourceNotFoundException',
          'exception' => true,
        ],
        [
          'shape' => 'ResourceInUseException',
          'exception' => true,
        ],
        [
          'shape' => 'InvalidArgumentException',
          'exception' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'AddTagsToStreamInput' => [
      'type' => 'structure',
      'required' => [
        'StreamName',
        'Tags',
      ],
      'members' => [
        'StreamName' => [
          'shape' => 'StreamName',
        ],
        'Tags' => [
          'shape' => 'TagMap',
        ],
      ],
    ],
    'BooleanObject' => [
      'type' => 'boolean',
    ],
    'CreateStreamInput' => [
      'type' => 'structure',
      'required' => [
        'StreamName',
        'ShardCount',
      ],
      'members' => [
        'StreamName' => [
          'shape' => 'StreamName',
        ],
        'ShardCount' => [
          'shape' => 'PositiveIntegerObject',
        ],
      ],
    ],
    'Data' => [
      'type' => 'blob',
      'min' => 0,
      'max' => 51200,
    ],
    'DeleteStreamInput' => [
      'type' => 'structure',
      'required' => [
        'StreamName',
      ],
      'members' => [
        'StreamName' => [
          'shape' => 'StreamName',
        ],
      ],
    ],
    'DescribeStreamInput' => [
      'type' => 'structure',
      'required' => [
        'StreamName',
      ],
      'members' => [
        'StreamName' => [
          'shape' => 'StreamName',
        ],
        'Limit' => [
          'shape' => 'DescribeStreamInputLimit',
        ],
        'ExclusiveStartShardId' => [
          'shape' => 'ShardId',
        ],
      ],
    ],
    'DescribeStreamInputLimit' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 10000,
    ],
    'DescribeStreamOutput' => [
      'type' => 'structure',
      'required' => [
        'StreamDescription',
      ],
      'members' => [
        'StreamDescription' => [
          'shape' => 'StreamDescription',
        ],
      ],
    ],
    'ErrorCode' => [
      'type' => 'string',
    ],
    'ErrorMessage' => [
      'type' => 'string',
    ],
    'ExpiredIteratorException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'GetRecordsInput' => [
      'type' => 'structure',
      'required' => [
        'ShardIterator',
      ],
      'members' => [
        'ShardIterator' => [
          'shape' => 'ShardIterator',
        ],
        'Limit' => [
          'shape' => 'GetRecordsInputLimit',
        ],
      ],
    ],
    'GetRecordsInputLimit' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 10000,
    ],
    'GetRecordsOutput' => [
      'type' => 'structure',
      'required' => [
        'Records',
      ],
      'members' => [
        'Records' => [
          'shape' => 'RecordList',
        ],
        'NextShardIterator' => [
          'shape' => 'ShardIterator',
        ],
      ],
    ],
    'GetShardIteratorInput' => [
      'type' => 'structure',
      'required' => [
        'StreamName',
        'ShardId',
        'ShardIteratorType',
      ],
      'members' => [
        'StreamName' => [
          'shape' => 'StreamName',
        ],
        'ShardId' => [
          'shape' => 'ShardId',
        ],
        'ShardIteratorType' => [
          'shape' => 'ShardIteratorType',
        ],
        'StartingSequenceNumber' => [
          'shape' => 'SequenceNumber',
        ],
      ],
    ],
    'GetShardIteratorOutput' => [
      'type' => 'structure',
      'members' => [
        'ShardIterator' => [
          'shape' => 'ShardIterator',
        ],
      ],
    ],
    'HashKey' => [
      'type' => 'string',
      'pattern' => '0|([1-9]\\d{0,38}]',
    ],
    'HashKeyRange' => [
      'type' => 'structure',
      'required' => [
        'StartingHashKey',
        'EndingHashKey',
      ],
      'members' => [
        'StartingHashKey' => [
          'shape' => 'HashKey',
        ],
        'EndingHashKey' => [
          'shape' => 'HashKey',
        ],
      ],
    ],
    'InvalidArgumentException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'LimitExceededException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'ListStreamsInput' => [
      'type' => 'structure',
      'members' => [
        'Limit' => [
          'shape' => 'ListStreamsInputLimit',
        ],
        'ExclusiveStartStreamName' => [
          'shape' => 'StreamName',
        ],
      ],
    ],
    'ListStreamsInputLimit' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 10000,
    ],
    'ListStreamsOutput' => [
      'type' => 'structure',
      'required' => [
        'StreamNames',
        'HasMoreStreams',
      ],
      'members' => [
        'StreamNames' => [
          'shape' => 'StreamNameList',
        ],
        'HasMoreStreams' => [
          'shape' => 'BooleanObject',
        ],
      ],
    ],
    'ListTagsForStreamInput' => [
      'type' => 'structure',
      'required' => [
        'StreamName',
      ],
      'members' => [
        'StreamName' => [
          'shape' => 'StreamName',
        ],
        'ExclusiveStartTagKey' => [
          'shape' => 'TagKey',
        ],
        'Limit' => [
          'shape' => 'ListTagsForStreamInputLimit',
        ],
      ],
    ],
    'ListTagsForStreamInputLimit' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 10,
    ],
    'ListTagsForStreamOutput' => [
      'type' => 'structure',
      'required' => [
        'Tags',
        'HasMoreTags',
      ],
      'members' => [
        'Tags' => [
          'shape' => 'TagList',
        ],
        'HasMoreTags' => [
          'shape' => 'BooleanObject',
        ],
      ],
    ],
    'MergeShardsInput' => [
      'type' => 'structure',
      'required' => [
        'StreamName',
        'ShardToMerge',
        'AdjacentShardToMerge',
      ],
      'members' => [
        'StreamName' => [
          'shape' => 'StreamName',
        ],
        'ShardToMerge' => [
          'shape' => 'ShardId',
        ],
        'AdjacentShardToMerge' => [
          'shape' => 'ShardId',
        ],
      ],
    ],
    'PartitionKey' => [
      'type' => 'string',
      'min' => 1,
      'max' => 256,
    ],
    'PositiveIntegerObject' => [
      'type' => 'integer',
      'min' => 1,
    ],
    'ProvisionedThroughputExceededException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'PutRecordInput' => [
      'type' => 'structure',
      'required' => [
        'StreamName',
        'Data',
        'PartitionKey',
      ],
      'members' => [
        'StreamName' => [
          'shape' => 'StreamName',
        ],
        'Data' => [
          'shape' => 'Data',
        ],
        'PartitionKey' => [
          'shape' => 'PartitionKey',
        ],
        'ExplicitHashKey' => [
          'shape' => 'HashKey',
        ],
        'SequenceNumberForOrdering' => [
          'shape' => 'SequenceNumber',
        ],
      ],
    ],
    'PutRecordOutput' => [
      'type' => 'structure',
      'required' => [
        'ShardId',
        'SequenceNumber',
      ],
      'members' => [
        'ShardId' => [
          'shape' => 'ShardId',
        ],
        'SequenceNumber' => [
          'shape' => 'SequenceNumber',
        ],
      ],
    ],
    'PutRecordsInput' => [
      'type' => 'structure',
      'required' => [
        'Records',
        'StreamName',
      ],
      'members' => [
        'Records' => [
          'shape' => 'PutRecordsRequestEntryList',
        ],
        'StreamName' => [
          'shape' => 'StreamName',
        ],
      ],
    ],
    'PutRecordsOutput' => [
      'type' => 'structure',
      'required' => [
        'Records',
      ],
      'members' => [
        'FailedRecordCount' => [
          'shape' => 'PositiveIntegerObject',
        ],
        'Records' => [
          'shape' => 'PutRecordsResultEntryList',
        ],
      ],
    ],
    'PutRecordsRequestEntry' => [
      'type' => 'structure',
      'required' => [
        'Data',
        'PartitionKey',
      ],
      'members' => [
        'Data' => [
          'shape' => 'Data',
        ],
        'ExplicitHashKey' => [
          'shape' => 'HashKey',
        ],
        'PartitionKey' => [
          'shape' => 'PartitionKey',
        ],
      ],
    ],
    'PutRecordsRequestEntryList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'PutRecordsRequestEntry',
      ],
      'min' => 1,
      'max' => 500,
    ],
    'PutRecordsResultEntry' => [
      'type' => 'structure',
      'members' => [
        'SequenceNumber' => [
          'shape' => 'SequenceNumber',
        ],
        'ShardId' => [
          'shape' => 'ShardId',
        ],
        'ErrorCode' => [
          'shape' => 'ErrorCode',
        ],
        'ErrorMessage' => [
          'shape' => 'ErrorMessage',
        ],
      ],
    ],
    'PutRecordsResultEntryList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'PutRecordsResultEntry',
      ],
      'min' => 1,
      'max' => 500,
    ],
    'Record' => [
      'type' => 'structure',
      'required' => [
        'SequenceNumber',
        'Data',
        'PartitionKey',
      ],
      'members' => [
        'SequenceNumber' => [
          'shape' => 'SequenceNumber',
        ],
        'Data' => [
          'shape' => 'Data',
        ],
        'PartitionKey' => [
          'shape' => 'PartitionKey',
        ],
      ],
    ],
    'RecordList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Record',
      ],
    ],
    'RemoveTagsFromStreamInput' => [
      'type' => 'structure',
      'required' => [
        'StreamName',
        'TagKeys',
      ],
      'members' => [
        'StreamName' => [
          'shape' => 'StreamName',
        ],
        'TagKeys' => [
          'shape' => 'TagKeyList',
        ],
      ],
    ],
    'ResourceInUseException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'ResourceNotFoundException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'ErrorMessage',
        ],
      ],
      'exception' => true,
    ],
    'SequenceNumber' => [
      'type' => 'string',
      'pattern' => '0|([1-9]\\d{0,128}]',
    ],
    'SequenceNumberRange' => [
      'type' => 'structure',
      'required' => [
        'StartingSequenceNumber',
      ],
      'members' => [
        'StartingSequenceNumber' => [
          'shape' => 'SequenceNumber',
        ],
        'EndingSequenceNumber' => [
          'shape' => 'SequenceNumber',
        ],
      ],
    ],
    'Shard' => [
      'type' => 'structure',
      'required' => [
        'ShardId',
        'HashKeyRange',
        'SequenceNumberRange',
      ],
      'members' => [
        'ShardId' => [
          'shape' => 'ShardId',
        ],
        'ParentShardId' => [
          'shape' => 'ShardId',
        ],
        'AdjacentParentShardId' => [
          'shape' => 'ShardId',
        ],
        'HashKeyRange' => [
          'shape' => 'HashKeyRange',
        ],
        'SequenceNumberRange' => [
          'shape' => 'SequenceNumberRange',
        ],
      ],
    ],
    'ShardId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
      'pattern' => '[a-zA-Z0-9_.-]+',
    ],
    'ShardIterator' => [
      'type' => 'string',
      'min' => 1,
      'max' => 512,
    ],
    'ShardIteratorType' => [
      'type' => 'string',
      'enum' => [
        'AT_SEQUENCE_NUMBER',
        'AFTER_SEQUENCE_NUMBER',
        'TRIM_HORIZON',
        'LATEST',
      ],
    ],
    'ShardList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Shard',
      ],
    ],
    'SplitShardInput' => [
      'type' => 'structure',
      'required' => [
        'StreamName',
        'ShardToSplit',
        'NewStartingHashKey',
      ],
      'members' => [
        'StreamName' => [
          'shape' => 'StreamName',
        ],
        'ShardToSplit' => [
          'shape' => 'ShardId',
        ],
        'NewStartingHashKey' => [
          'shape' => 'HashKey',
        ],
      ],
    ],
    'StreamARN' => [
      'type' => 'string',
    ],
    'StreamDescription' => [
      'type' => 'structure',
      'required' => [
        'StreamName',
        'StreamARN',
        'StreamStatus',
        'Shards',
        'HasMoreShards',
      ],
      'members' => [
        'StreamName' => [
          'shape' => 'StreamName',
        ],
        'StreamARN' => [
          'shape' => 'StreamARN',
        ],
        'StreamStatus' => [
          'shape' => 'StreamStatus',
        ],
        'Shards' => [
          'shape' => 'ShardList',
        ],
        'HasMoreShards' => [
          'shape' => 'BooleanObject',
        ],
      ],
    ],
    'StreamName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
      'pattern' => '[a-zA-Z0-9_.-]+',
    ],
    'StreamNameList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'StreamName',
      ],
    ],
    'StreamStatus' => [
      'type' => 'string',
      'enum' => [
        'CREATING',
        'DELETING',
        'ACTIVE',
        'UPDATING',
      ],
    ],
    'Tag' => [
      'type' => 'structure',
      'required' => [
        'Key',
      ],
      'members' => [
        'Key' => [
          'shape' => 'TagKey',
        ],
        'Value' => [
          'shape' => 'TagValue',
        ],
      ],
    ],
    'TagKey' => [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
    ],
    'TagKeyList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'TagKey',
      ],
      'min' => 1,
      'max' => 10,
    ],
    'TagList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'Tag',
      ],
      'min' => 0,
    ],
    'TagMap' => [
      'type' => 'map',
      'key' => [
        'shape' => 'TagKey',
      ],
      'value' => [
        'shape' => 'TagValue',
      ],
      'min' => 1,
      'max' => 10,
    ],
    'TagValue' => [
      'type' => 'string',
      'min' => 0,
      'max' => 256,
    ],
  ],
];
