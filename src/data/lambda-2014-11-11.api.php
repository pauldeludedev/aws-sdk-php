<?php return [
  'metadata' => [
    'apiVersion' => '2014-11-11',
    'endpointPrefix' => 'lambda',
    'serviceFullName' => 'AWS Lambda',
    'signatureVersion' => 'v4',
    'protocol' => 'rest-json',
  ],
  'operations' => [
    'AddEventSource' => [
      'name' => 'AddEventSource',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2014-11-13/event-source-mappings/',
      ],
      'input' => [
        'shape' => 'AddEventSourceRequest',
      ],
      'output' => [
        'shape' => 'EventSourceConfiguration',
      ],
      'errors' => [
        [
          'shape' => 'ServiceException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteFunction' => [
      'name' => 'DeleteFunction',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/2014-11-13/functions/{FunctionName}',
        'responseCode' => 204,
      ],
      'input' => [
        'shape' => 'DeleteFunctionRequest',
      ],
      'errors' => [
        [
          'shape' => 'ServiceException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetEventSource' => [
      'name' => 'GetEventSource',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-11-13/event-source-mappings/{UUID}',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'GetEventSourceRequest',
      ],
      'output' => [
        'shape' => 'EventSourceConfiguration',
      ],
      'errors' => [
        [
          'shape' => 'ServiceException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetFunction' => [
      'name' => 'GetFunction',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-11-13/functions/{FunctionName}',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'GetFunctionRequest',
      ],
      'output' => [
        'shape' => 'GetFunctionResponse',
      ],
      'errors' => [
        [
          'shape' => 'ServiceException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetFunctionConfiguration' => [
      'name' => 'GetFunctionConfiguration',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-11-13/functions/{FunctionName}/configuration',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'GetFunctionConfigurationRequest',
      ],
      'output' => [
        'shape' => 'FunctionConfiguration',
      ],
      'errors' => [
        [
          'shape' => 'ServiceException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
      ],
    ],
    'InvokeAsync' => [
      'name' => 'InvokeAsync',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/2014-11-13/functions/{FunctionName}/invoke-async/',
        'responseCode' => 202,
      ],
      'input' => [
        'shape' => 'InvokeAsyncRequest',
      ],
      'output' => [
        'shape' => 'InvokeAsyncResponse',
      ],
      'errors' => [
        [
          'shape' => 'ServiceException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidRequestContentException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListEventSources' => [
      'name' => 'ListEventSources',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-11-13/event-source-mappings/',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'ListEventSourcesRequest',
      ],
      'output' => [
        'shape' => 'ListEventSourcesResponse',
      ],
      'errors' => [
        [
          'shape' => 'ServiceException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListFunctions' => [
      'name' => 'ListFunctions',
      'http' => [
        'method' => 'GET',
        'requestUri' => '/2014-11-13/functions/',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'ListFunctionsRequest',
      ],
      'output' => [
        'shape' => 'ListFunctionsResponse',
      ],
      'errors' => [
        [
          'shape' => 'ServiceException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
      ],
    ],
    'RemoveEventSource' => [
      'name' => 'RemoveEventSource',
      'http' => [
        'method' => 'DELETE',
        'requestUri' => '/2014-11-13/event-source-mappings/{UUID}',
        'responseCode' => 204,
      ],
      'input' => [
        'shape' => 'RemoveEventSourceRequest',
      ],
      'errors' => [
        [
          'shape' => 'ServiceException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UpdateFunctionConfiguration' => [
      'name' => 'UpdateFunctionConfiguration',
      'http' => [
        'method' => 'PUT',
        'requestUri' => '/2014-11-13/functions/{FunctionName}/configuration',
        'responseCode' => 200,
      ],
      'input' => [
        'shape' => 'UpdateFunctionConfigurationRequest',
      ],
      'output' => [
        'shape' => 'FunctionConfiguration',
      ],
      'errors' => [
        [
          'shape' => 'ServiceException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'UploadFunction' => [
      'name' => 'UploadFunction',
      'http' => [
        'method' => 'PUT',
        'requestUri' => '/2014-11-13/functions/{FunctionName}',
        'responseCode' => 201,
      ],
      'input' => [
        'shape' => 'UploadFunctionRequest',
      ],
      'output' => [
        'shape' => 'FunctionConfiguration',
      ],
      'errors' => [
        [
          'shape' => 'ServiceException',
          'error' => [
            'httpStatusCode' => 500,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidParameterValueException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'AddEventSourceRequest' => [
      'type' => 'structure',
      'required' => [
        'EventSource',
        'FunctionName',
        'Role',
      ],
      'members' => [
        'EventSource' => [
          'shape' => 'String',
        ],
        'FunctionName' => [
          'shape' => 'FunctionName',
        ],
        'Role' => [
          'shape' => 'RoleArn',
        ],
        'BatchSize' => [
          'shape' => 'Integer',
        ],
        'Parameters' => [
          'shape' => 'Map',
        ],
      ],
    ],
    'Blob' => [
      'type' => 'blob',
      'streaming' => true,
    ],
    'DeleteFunctionRequest' => [
      'type' => 'structure',
      'required' => [
        'FunctionName',
      ],
      'members' => [
        'FunctionName' => [
          'shape' => 'FunctionName',
          'location' => 'uri',
          'locationName' => 'FunctionName',
        ],
      ],
    ],
    'Description' => [
      'type' => 'string',
      'min' => 0,
      'max' => 256,
    ],
    'EventSourceConfiguration' => [
      'type' => 'structure',
      'members' => [
        'UUID' => [
          'shape' => 'String',
        ],
        'BatchSize' => [
          'shape' => 'Integer',
        ],
        'EventSource' => [
          'shape' => 'String',
        ],
        'FunctionName' => [
          'shape' => 'FunctionName',
        ],
        'Parameters' => [
          'shape' => 'Map',
        ],
        'Role' => [
          'shape' => 'RoleArn',
        ],
        'LastModified' => [
          'shape' => 'Timestamp',
        ],
        'IsActive' => [
          'shape' => 'Boolean',
        ],
        'Status' => [
          'shape' => 'String',
        ],
      ],
    ],
    'EventSourceList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'EventSourceConfiguration',
      ],
    ],
    'FunctionArn' => [
      'type' => 'string',
      'pattern' => 'arn:aws:lambda:[a-z]{2}-[a-z]+-\\d{1}:\\d{12}:function:[a-zA-Z0-9-_]+(\\/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}]?',
    ],
    'FunctionCodeLocation' => [
      'type' => 'structure',
      'members' => [
        'RepositoryType' => [
          'shape' => 'String',
        ],
        'Location' => [
          'shape' => 'String',
        ],
      ],
    ],
    'FunctionConfiguration' => [
      'type' => 'structure',
      'members' => [
        'FunctionName' => [
          'shape' => 'FunctionName',
        ],
        'FunctionARN' => [
          'shape' => 'FunctionArn',
        ],
        'ConfigurationId' => [
          'shape' => 'String',
        ],
        'Runtime' => [
          'shape' => 'Runtime',
        ],
        'Role' => [
          'shape' => 'RoleArn',
        ],
        'Handler' => [
          'shape' => 'Handler',
        ],
        'Mode' => [
          'shape' => 'Mode',
        ],
        'CodeSize' => [
          'shape' => 'Long',
        ],
        'Description' => [
          'shape' => 'Description',
        ],
        'Timeout' => [
          'shape' => 'Timeout',
        ],
        'MemorySize' => [
          'shape' => 'MemorySize',
        ],
        'LastModified' => [
          'shape' => 'Timestamp',
        ],
      ],
    ],
    'FunctionList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'FunctionConfiguration',
      ],
    ],
    'FunctionName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 64,
      'pattern' => '[a-zA-Z0-9-_]+',
    ],
    'GetEventSourceRequest' => [
      'type' => 'structure',
      'required' => [
        'UUID',
      ],
      'members' => [
        'UUID' => [
          'shape' => 'String',
          'location' => 'uri',
          'locationName' => 'UUID',
        ],
      ],
    ],
    'GetFunctionConfigurationRequest' => [
      'type' => 'structure',
      'required' => [
        'FunctionName',
      ],
      'members' => [
        'FunctionName' => [
          'shape' => 'FunctionName',
          'location' => 'uri',
          'locationName' => 'FunctionName',
        ],
      ],
    ],
    'GetFunctionRequest' => [
      'type' => 'structure',
      'required' => [
        'FunctionName',
      ],
      'members' => [
        'FunctionName' => [
          'shape' => 'FunctionName',
          'location' => 'uri',
          'locationName' => 'FunctionName',
        ],
      ],
    ],
    'GetFunctionResponse' => [
      'type' => 'structure',
      'members' => [
        'Configuration' => [
          'shape' => 'FunctionConfiguration',
        ],
        'Code' => [
          'shape' => 'FunctionCodeLocation',
        ],
      ],
    ],
    'Handler' => [
      'type' => 'string',
      'pattern' => '[a-zA-Z0-9./\\-_]+',
    ],
    'HttpStatus' => [
      'type' => 'integer',
    ],
    'Integer' => [
      'type' => 'integer',
    ],
    'InvalidParameterValueException' => [
      'type' => 'structure',
      'members' => [
        'Type' => [
          'shape' => 'String',
        ],
        'message' => [
          'shape' => 'String',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidRequestContentException' => [
      'type' => 'structure',
      'members' => [
        'Type' => [
          'shape' => 'String',
        ],
        'message' => [
          'shape' => 'String',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvokeAsyncRequest' => [
      'type' => 'structure',
      'required' => [
        'FunctionName',
        'InvokeArgs',
      ],
      'members' => [
        'FunctionName' => [
          'shape' => 'FunctionName',
          'location' => 'uri',
          'locationName' => 'FunctionName',
        ],
        'InvokeArgs' => [
          'shape' => 'Blob',
        ],
      ],
      'payload' => 'InvokeArgs',
    ],
    'InvokeAsyncResponse' => [
      'type' => 'structure',
      'members' => [
        'Status' => [
          'shape' => 'HttpStatus',
          'location' => 'statusCode',
        ],
      ],
    ],
    'ListEventSourcesRequest' => [
      'type' => 'structure',
      'members' => [
        'EventSourceArn' => [
          'shape' => 'String',
          'location' => 'querystring',
          'locationName' => 'EventSource',
        ],
        'FunctionName' => [
          'shape' => 'FunctionName',
          'location' => 'querystring',
          'locationName' => 'FunctionName',
        ],
        'Marker' => [
          'shape' => 'String',
          'location' => 'querystring',
          'locationName' => 'Marker',
        ],
        'MaxItems' => [
          'shape' => 'MaxListItems',
          'location' => 'querystring',
          'locationName' => 'MaxItems',
        ],
      ],
    ],
    'ListEventSourcesResponse' => [
      'type' => 'structure',
      'members' => [
        'NextMarker' => [
          'shape' => 'String',
        ],
        'EventSources' => [
          'shape' => 'EventSourceList',
        ],
      ],
    ],
    'ListFunctionsRequest' => [
      'type' => 'structure',
      'members' => [
        'Marker' => [
          'shape' => 'String',
          'location' => 'querystring',
          'locationName' => 'Marker',
        ],
        'MaxItems' => [
          'shape' => 'MaxListItems',
          'location' => 'querystring',
          'locationName' => 'MaxItems',
        ],
      ],
    ],
    'ListFunctionsResponse' => [
      'type' => 'structure',
      'members' => [
        'NextMarker' => [
          'shape' => 'String',
        ],
        'Functions' => [
          'shape' => 'FunctionList',
        ],
      ],
    ],
    'Long' => [
      'type' => 'long',
    ],
    'Map' => [
      'type' => 'map',
      'key' => [
        'shape' => 'String',
      ],
      'value' => [
        'shape' => 'String',
      ],
    ],
    'MaxListItems' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 10000,
    ],
    'MemorySize' => [
      'type' => 'integer',
      'min' => 128,
      'max' => 1024,
    ],
    'Mode' => [
      'type' => 'string',
      'enum' => [
        'event',
      ],
    ],
    'RemoveEventSourceRequest' => [
      'type' => 'structure',
      'required' => [
        'UUID',
      ],
      'members' => [
        'UUID' => [
          'shape' => 'String',
          'location' => 'uri',
          'locationName' => 'UUID',
        ],
      ],
    ],
    'ResourceNotFoundException' => [
      'type' => 'structure',
      'members' => [
        'Type' => [
          'shape' => 'String',
        ],
        'Message' => [
          'shape' => 'String',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'RoleArn' => [
      'type' => 'string',
      'pattern' => 'arn:aws:iam::\\d{12}:role/?[a-zA-Z_0-9+=,.@\\-_/]+',
    ],
    'Runtime' => [
      'type' => 'string',
      'enum' => [
        'nodejs',
      ],
    ],
    'ServiceException' => [
      'type' => 'structure',
      'members' => [
        'Type' => [
          'shape' => 'String',
        ],
        'Message' => [
          'shape' => 'String',
        ],
      ],
      'error' => [
        'httpStatusCode' => 500,
      ],
      'exception' => true,
    ],
    'String' => [
      'type' => 'string',
    ],
    'Timeout' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 60,
    ],
    'Timestamp' => [
      'type' => 'string',
    ],
    'UpdateFunctionConfigurationRequest' => [
      'type' => 'structure',
      'required' => [
        'FunctionName',
      ],
      'members' => [
        'FunctionName' => [
          'shape' => 'FunctionName',
          'location' => 'uri',
          'locationName' => 'FunctionName',
        ],
        'Role' => [
          'shape' => 'RoleArn',
          'location' => 'querystring',
          'locationName' => 'Role',
        ],
        'Handler' => [
          'shape' => 'Handler',
          'location' => 'querystring',
          'locationName' => 'Handler',
        ],
        'Description' => [
          'shape' => 'Description',
          'location' => 'querystring',
          'locationName' => 'Description',
        ],
        'Timeout' => [
          'shape' => 'Timeout',
          'location' => 'querystring',
          'locationName' => 'Timeout',
        ],
        'MemorySize' => [
          'shape' => 'MemorySize',
          'location' => 'querystring',
          'locationName' => 'MemorySize',
        ],
      ],
    ],
    'UploadFunctionRequest' => [
      'type' => 'structure',
      'required' => [
        'FunctionName',
        'FunctionZip',
        'Runtime',
        'Role',
        'Handler',
        'Mode',
      ],
      'members' => [
        'FunctionName' => [
          'shape' => 'FunctionName',
          'location' => 'uri',
          'locationName' => 'FunctionName',
        ],
        'FunctionZip' => [
          'shape' => 'Blob',
        ],
        'Runtime' => [
          'shape' => 'Runtime',
          'location' => 'querystring',
          'locationName' => 'Runtime',
        ],
        'Role' => [
          'shape' => 'RoleArn',
          'location' => 'querystring',
          'locationName' => 'Role',
        ],
        'Handler' => [
          'shape' => 'Handler',
          'location' => 'querystring',
          'locationName' => 'Handler',
        ],
        'Mode' => [
          'shape' => 'Mode',
          'location' => 'querystring',
          'locationName' => 'Mode',
        ],
        'Description' => [
          'shape' => 'Description',
          'location' => 'querystring',
          'locationName' => 'Description',
        ],
        'Timeout' => [
          'shape' => 'Timeout',
          'location' => 'querystring',
          'locationName' => 'Timeout',
        ],
        'MemorySize' => [
          'shape' => 'MemorySize',
          'location' => 'querystring',
          'locationName' => 'MemorySize',
        ],
      ],
      'payload' => 'FunctionZip',
    ],
    'Boolean' => [
      'type' => 'boolean',
    ],
  ],
];
