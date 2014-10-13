<?php
return [
  'metadata' =>
  [
    'apiVersion' => '2014-06-30',
    'endpointPrefix' => 'cognito-identity',
    'jsonVersion' => '1.1',
    'serviceFullName' => 'Amazon Cognito Identity',
    'signatureVersion' => 'v4',
    'targetPrefix' => 'AWSCognitoIdentityService',
    'protocol' => 'json',
  ],
  'operations' =>
  [
    'CreateIdentityPool' =>
    [
      'name' => 'CreateIdentityPool',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'CreateIdentityPoolInput',
      ],
      'output' =>
      [
        'shape' => 'IdentityPool',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InvalidParameterException',
          'error' =>
          [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'NotAuthorizedException',
          'error' =>
          [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'ResourceConflictException',
          'error' =>
          [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'TooManyRequestsException',
          'error' =>
          [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
        5 =>
        [
          'shape' => 'LimitExceededException',
          'error' =>
          [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteIdentityPool' =>
    [
      'name' => 'DeleteIdentityPool',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DeleteIdentityPoolInput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InvalidParameterException',
          'error' =>
          [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'NotAuthorizedException',
          'error' =>
          [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'TooManyRequestsException',
          'error' =>
          [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DescribeIdentityPool' =>
    [
      'name' => 'DescribeIdentityPool',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'DescribeIdentityPoolInput',
      ],
      'output' =>
      [
        'shape' => 'IdentityPool',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InvalidParameterException',
          'error' =>
          [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'NotAuthorizedException',
          'error' =>
          [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'TooManyRequestsException',
          'error' =>
          [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'GetId' =>
    [
      'name' => 'GetId',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'GetIdInput',
      ],
      'output' =>
      [
        'shape' => 'GetIdResponse',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InvalidParameterException',
          'error' =>
          [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'NotAuthorizedException',
          'error' =>
          [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'ResourceConflictException',
          'error' =>
          [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'TooManyRequestsException',
          'error' =>
          [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        5 =>
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
        6 =>
        [
          'shape' => 'LimitExceededException',
          'error' =>
          [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetOpenIdToken' =>
    [
      'name' => 'GetOpenIdToken',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'GetOpenIdTokenInput',
      ],
      'output' =>
      [
        'shape' => 'GetOpenIdTokenResponse',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InvalidParameterException',
          'error' =>
          [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'NotAuthorizedException',
          'error' =>
          [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'ResourceConflictException',
          'error' =>
          [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'TooManyRequestsException',
          'error' =>
          [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        5 =>
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'ListIdentities' =>
    [
      'name' => 'ListIdentities',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'ListIdentitiesInput',
      ],
      'output' =>
      [
        'shape' => 'ListIdentitiesResponse',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InvalidParameterException',
          'error' =>
          [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'NotAuthorizedException',
          'error' =>
          [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'TooManyRequestsException',
          'error' =>
          [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'ListIdentityPools' =>
    [
      'name' => 'ListIdentityPools',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'ListIdentityPoolsInput',
      ],
      'output' =>
      [
        'shape' => 'ListIdentityPoolsResponse',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InvalidParameterException',
          'error' =>
          [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'NotAuthorizedException',
          'error' =>
          [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'TooManyRequestsException',
          'error' =>
          [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'UnlinkIdentity' =>
    [
      'name' => 'UnlinkIdentity',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'UnlinkIdentityInput',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InvalidParameterException',
          'error' =>
          [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'NotAuthorizedException',
          'error' =>
          [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'ResourceConflictException',
          'error' =>
          [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'TooManyRequestsException',
          'error' =>
          [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        5 =>
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'UpdateIdentityPool' =>
    [
      'name' => 'UpdateIdentityPool',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' =>
      [
        'shape' => 'IdentityPool',
      ],
      'output' =>
      [
        'shape' => 'IdentityPool',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'InvalidParameterException',
          'error' =>
          [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        1 =>
        [
          'shape' => 'ResourceNotFoundException',
          'error' =>
          [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        2 =>
        [
          'shape' => 'NotAuthorizedException',
          'error' =>
          [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        3 =>
        [
          'shape' => 'ResourceConflictException',
          'error' =>
          [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        4 =>
        [
          'shape' => 'TooManyRequestsException',
          'error' =>
          [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        5 =>
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
  ],
  'shapes' =>
  [
    'AccountId' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 15,
      'pattern' => '\\d+',
    ],
    'CreateIdentityPoolInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'IdentityPoolName',
        1 => 'AllowUnauthenticatedIdentities',
      ],
      'members' =>
      [
        'IdentityPoolName' =>
        [
          'shape' => 'IdentityPoolName',
        ],
        'AllowUnauthenticatedIdentities' =>
        [
          'shape' => 'IdentityPoolUnauthenticated',
        ],
        'SupportedLoginProviders' =>
        [
          'shape' => 'IdentityProviders',
        ],
      ],
    ],
    'DeleteIdentityPoolInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'IdentityPoolId',
      ],
      'members' =>
      [
        'IdentityPoolId' =>
        [
          'shape' => 'IdentityPoolId',
        ],
      ],
    ],
    'DescribeIdentityPoolInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'IdentityPoolId',
      ],
      'members' =>
      [
        'IdentityPoolId' =>
        [
          'shape' => 'IdentityPoolId',
        ],
      ],
    ],
    'GetIdInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'AccountId',
        1 => 'IdentityPoolId',
      ],
      'members' =>
      [
        'AccountId' =>
        [
          'shape' => 'AccountId',
        ],
        'IdentityPoolId' =>
        [
          'shape' => 'IdentityPoolId',
        ],
        'Logins' =>
        [
          'shape' => 'LoginsMap',
        ],
      ],
    ],
    'GetIdResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'IdentityId' =>
        [
          'shape' => 'IdentityId',
        ],
      ],
    ],
    'GetOpenIdTokenInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'IdentityId',
      ],
      'members' =>
      [
        'IdentityId' =>
        [
          'shape' => 'IdentityId',
        ],
        'Logins' =>
        [
          'shape' => 'LoginsMap',
        ],
      ],
    ],
    'GetOpenIdTokenResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'IdentityId' =>
        [
          'shape' => 'IdentityId',
        ],
        'Token' =>
        [
          'shape' => 'OIDCToken',
        ],
      ],
    ],
    'IdentitiesList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'IdentityDescription',
      ],
    ],
    'IdentityDescription' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'IdentityId' =>
        [
          'shape' => 'IdentityId',
        ],
        'Logins' =>
        [
          'shape' => 'LoginsList',
        ],
      ],
    ],
    'IdentityId' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 50,
      'pattern' => '[\\w-]+:[0-9a-f-]+',
    ],
    'IdentityPool' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'IdentityPoolId',
        1 => 'IdentityPoolName',
        2 => 'AllowUnauthenticatedIdentities',
      ],
      'members' =>
      [
        'IdentityPoolId' =>
        [
          'shape' => 'IdentityPoolId',
        ],
        'IdentityPoolName' =>
        [
          'shape' => 'IdentityPoolName',
        ],
        'AllowUnauthenticatedIdentities' =>
        [
          'shape' => 'IdentityPoolUnauthenticated',
        ],
        'SupportedLoginProviders' =>
        [
          'shape' => 'IdentityProviders',
        ],
      ],
    ],
    'IdentityPoolId' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 50,
      'pattern' => '[\\w-]+:[0-9a-f-]+',
    ],
    'IdentityPoolName' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
      'pattern' => '[\\w ]+',
    ],
    'IdentityPoolShortDescription' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'IdentityPoolId' =>
        [
          'shape' => 'IdentityPoolId',
        ],
        'IdentityPoolName' =>
        [
          'shape' => 'IdentityPoolName',
        ],
      ],
    ],
    'IdentityPoolUnauthenticated' =>
    [
      'type' => 'boolean',
    ],
    'IdentityPoolsList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'IdentityPoolShortDescription',
      ],
    ],
    'IdentityProviderId' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
      'pattern' => '[\\w._-]+',
    ],
    'IdentityProviderName' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
      'pattern' => '[\\w._-]+',
    ],
    'IdentityProviderToken' =>
    [
      'type' => 'string',
      'min' => 1,
      'max' => 1024,
      'pattern' => '[\\S]+',
    ],
    'IdentityProviders' =>
    [
      'type' => 'map',
      'key' =>
      [
        'shape' => 'IdentityProviderName',
      ],
      'value' =>
      [
        'shape' => 'IdentityProviderId',
      ],
      'max' => 3,
    ],
    'InternalErrorException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'String',
        ],
      ],
      'exception' => true,
      'fault' => true,
    ],
    'InvalidParameterException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'String',
        ],
      ],
      'error' =>
      [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'LimitExceededException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'String',
        ],
      ],
      'error' =>
      [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'ListIdentitiesInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'IdentityPoolId',
        1 => 'MaxResults',
      ],
      'members' =>
      [
        'IdentityPoolId' =>
        [
          'shape' => 'IdentityPoolId',
        ],
        'MaxResults' =>
        [
          'shape' => 'QueryLimit',
        ],
        'NextToken' =>
        [
          'shape' => 'PaginationKey',
        ],
      ],
    ],
    'ListIdentitiesResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'IdentityPoolId' =>
        [
          'shape' => 'IdentityPoolId',
        ],
        'Identities' =>
        [
          'shape' => 'IdentitiesList',
        ],
        'NextToken' =>
        [
          'shape' => 'PaginationKey',
        ],
      ],
    ],
    'ListIdentityPoolsInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'MaxResults',
      ],
      'members' =>
      [
        'MaxResults' =>
        [
          'shape' => 'QueryLimit',
        ],
        'NextToken' =>
        [
          'shape' => 'PaginationKey',
        ],
      ],
    ],
    'ListIdentityPoolsResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'IdentityPools' =>
        [
          'shape' => 'IdentityPoolsList',
        ],
        'NextToken' =>
        [
          'shape' => 'PaginationKey',
        ],
      ],
    ],
    'LoginsList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'IdentityProviderName',
      ],
    ],
    'LoginsMap' =>
    [
      'type' => 'map',
      'key' =>
      [
        'shape' => 'IdentityProviderName',
      ],
      'value' =>
      [
        'shape' => 'IdentityProviderToken',
      ],
      'max' => 3,
    ],
    'NotAuthorizedException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'String',
        ],
      ],
      'error' =>
      [
        'httpStatusCode' => 403,
      ],
      'exception' => true,
    ],
    'OIDCToken' =>
    [
      'type' => 'string',
    ],
    'PaginationKey' =>
    [
      'type' => 'string',
      'min' => 1,
    ],
    'QueryLimit' =>
    [
      'type' => 'integer',
      'min' => 1,
      'max' => 60,
    ],
    'ResourceConflictException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'String',
        ],
      ],
      'error' =>
      [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'ResourceNotFoundException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'String',
        ],
      ],
      'error' =>
      [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'String' =>
    [
      'type' => 'string',
    ],
    'TooManyRequestsException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'String',
        ],
      ],
      'error' =>
      [
        'httpStatusCode' => 429,
      ],
      'exception' => true,
    ],
    'UnlinkIdentityInput' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'IdentityId',
        1 => 'Logins',
        2 => 'LoginsToRemove',
      ],
      'members' =>
      [
        'IdentityId' =>
        [
          'shape' => 'IdentityId',
        ],
        'Logins' =>
        [
          'shape' => 'LoginsMap',
        ],
        'LoginsToRemove' =>
        [
          'shape' => 'LoginsList',
        ],
      ],
    ],
  ],
];