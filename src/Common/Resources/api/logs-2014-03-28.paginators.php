<?php
return [
  'pagination' =>
  [
    'DescribeLogGroups' =>
    [
      'input_token' => 'nextToken',
      'output_token' => 'nextToken',
      'limit_key' => 'limit',
      'result_key' => 'logGroups',
    ],
    'DescribeLogStreams' =>
    [
      'input_token' => 'nextToken',
      'output_token' => 'nextToken',
      'limit_key' => 'limit',
      'result_key' => 'logStreams',
    ],
    'DescribeMetricFilters' =>
    [
      'input_token' => 'nextToken',
      'output_token' => 'nextToken',
      'limit_key' => 'limit',
      'result_key' => 'metricFilters',
    ],
    'GetLogEvents' =>
    [
      'input_token' => 'nextToken',
      'output_token' => 'nextForwardToken',
      'limit_key' => 'limit',
      'result_key' => 'events',
    ],
  ],
];