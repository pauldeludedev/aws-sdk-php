<?php return [
  'pagination' => [
    'DescribeStream' => [
      'input_token' => 'ExclusiveStartShardId',
      'limit_key' => 'Limit',
      'more_results' => 'StreamDescription.HasMoreShards',
      'output_token' => 'StreamDescription.Shards[-1].ShardId',
      'result_key' => 'StreamDescription.Shards',
    ],
    'ListStreams' => [
      'input_token' => 'ExclusiveStartStreamName',
      'limit_key' => 'Limit',
      'more_results' => 'HasMoreStreams',
      'output_token' => 'StreamNames[-1]',
      'result_key' => 'StreamNames',
    ],
  ],
];
