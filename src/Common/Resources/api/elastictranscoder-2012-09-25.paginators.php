<?php
return [
  'pagination' =>
  [
    'ListJobsByPipeline' =>
    [
      'input_token' => 'PageToken',
      'output_token' => 'NextPageToken',
      'result_key' => 'Jobs',
    ],
    'ListJobsByStatus' =>
    [
      'input_token' => 'PageToken',
      'output_token' => 'NextPageToken',
      'result_key' => 'Jobs',
    ],
    'ListPipelines' =>
    [
      'input_token' => 'PageToken',
      'output_token' => 'NextPageToken',
      'result_key' => 'Pipelines',
    ],
    'ListPresets' =>
    [
      'input_token' => 'PageToken',
      'output_token' => 'NextPageToken',
      'result_key' => 'Presets',
    ],
  ],
];