<?php
return [
  'pagination' =>
  [
    'DescribeAlarmHistory' =>
    [
      'input_token' => 'NextToken',
      'output_token' => 'NextToken',
      'limit_key' => 'MaxRecords',
      'result_key' => 'AlarmHistoryItems',
    ],
    'DescribeAlarms' =>
    [
      'input_token' => 'NextToken',
      'output_token' => 'NextToken',
      'limit_key' => 'MaxRecords',
      'result_key' => 'MetricAlarms',
    ],
    'DescribeAlarmsForMetric' =>
    [
      'result_key' => 'MetricAlarms',
    ],
    'ListMetrics' =>
    [
      'input_token' => 'NextToken',
      'output_token' => 'NextToken',
      'result_key' => 'Metrics',
    ],
  ],
];