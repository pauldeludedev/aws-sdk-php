<?php return [
  'operations' => [
    'CancelJob' => 'This operation cancels a specified job. Only the job owner can cancel it. The operation fails if the job has already started or is complete.',
    'CreateJob' => 'This operation initiates the process of scheduling an upload or download of your data. You include in the request a manifest that describes the data transfer specifics. The response to the request includes a job ID, which you can use in other operations, a signature that you use to identify your storage device, and the address where you should ship your storage device.',
    'GetShippingLabel' => 'This operation returns information about a job, including where the job is in the processing pipeline, the status of the results, and the signature value associated with the job. You can only return information about jobs you own.',
    'GetStatus' => 'This operation returns information about a job, including where the job is in the processing pipeline, the status of the results, and the signature value associated with the job. You can only return information about jobs you own.',
    'ListJobs' => 'This operation returns the jobs associated with the requester. AWS Import/Export lists the jobs in reverse chronological order based on the date of creation. For example if Job Test1 was created 2009Dec30 and Test2 was created 2010Feb05, the ListJobs operation would return Test2 followed by Test1.',
    'UpdateJob' => 'You use this operation to change the parameters specified in the original manifest file by supplying a new manifest file. The manifest file attached to this request replaces the original manifest file. You can only use the operation after a CreateJob request but before the data transfer starts and you can only use it on jobs you own.',
  ],
  'service' => '<fullname>AWS Import/Export Service</fullname> AWS Import/Export accelerates transferring large amounts of data between the AWS cloud and portable storage devices that you mail to us. AWS Import/Export transfers data directly onto and off of your storage devices using Amazon\'s high-speed internal network and bypassing the Internet. For large data sets, AWS Import/Export is often faster than Internet transfer and more cost effective than upgrading your connectivity.',
  'shapes' => [
    'APIVersion' => [
      'base' => 'Specifies the version of the client tool.',
      'refs' => [
        'CancelJobInput$APIVersion' => NULL,
        'CreateJobInput$APIVersion' => NULL,
        'GetStatusInput$APIVersion' => NULL,
        'ListJobsInput$APIVersion' => NULL,
        'UpdateJobInput$APIVersion' => NULL,
      ],
    ],
    'Artifact' => [
      'base' => 'A discrete item that contains the description and URL of an artifact (such as a PDF].',
      'refs' => [
        'ArtifactList$member' => NULL,
      ],
    ],
    'ArtifactList' => [
      'base' => 'A collection of artifacts.',
      'refs' => [
        'CreateJobOutput$ArtifactList' => NULL,
        'GetStatusOutput$ArtifactList' => NULL,
        'UpdateJobOutput$ArtifactList' => NULL,
      ],
    ],
    'BucketPermissionException' => [
      'base' => 'The account specified does not have the appropriate bucket permissions.',
      'refs' => [],
    ],
    'CancelJobInput' => [
      'base' => 'Input structure for the CancelJob operation.',
      'refs' => [],
    ],
    'CancelJobOutput' => [
      'base' => 'Output structure for the CancelJob operation.',
      'refs' => [],
    ],
    'CanceledJobIdException' => [
      'base' => 'The specified job ID has been canceled and is no longer valid.',
      'refs' => [],
    ],
    'Carrier' => [
      'base' => 'Name of the shipping company. This value is included when the LocationCode is "Returned".',
      'refs' => [
        'GetStatusOutput$Carrier' => NULL,
      ],
    ],
    'CreateJobInput' => [
      'base' => 'Input structure for the CreateJob operation.',
      'refs' => [],
    ],
    'CreateJobOutput' => [
      'base' => 'Output structure for the CreateJob operation.',
      'refs' => [],
    ],
    'CreateJobQuotaExceededException' => [
      'base' => 'Each account can create only a certain number of jobs per day. If you need to create more than this, please contact awsimportexport@amazon.com to explain your particular use case.',
      'refs' => [],
    ],
    'CreationDate' => [
      'base' => 'Timestamp of the CreateJob request in ISO8601 date format. For example "2010-03-28T20:27:35Z".',
      'refs' => [
        'GetStatusOutput$CreationDate' => NULL,
        'Job$CreationDate' => NULL,
      ],
    ],
    'CurrentManifest' => [
      'base' => 'The last manifest submitted, which will be used to process the job.',
      'refs' => [
        'GetStatusOutput$CurrentManifest' => NULL,
      ],
    ],
    'Description' => [
      'base' => 'The associated description for this object.',
      'refs' => [
        'Artifact$Description' => NULL,
      ],
    ],
    'ErrorCount' => [
      'base' => 'Number of errors. We return this value when the ProgressCode is Success or SuccessWithErrors.',
      'refs' => [
        'GetStatusOutput$ErrorCount' => NULL,
      ],
    ],
    'ErrorMessage' => [
      'base' => 'The human-readable description of a particular error.',
      'refs' => [
        'BucketPermissionException$message' => NULL,
        'CanceledJobIdException$message' => NULL,
        'CreateJobQuotaExceededException$message' => NULL,
        'ExpiredJobIdException$message' => NULL,
        'InvalidAccessKeyIdException$message' => NULL,
        'InvalidAddressException$message' => NULL,
        'InvalidCustomsException$message' => NULL,
        'InvalidFileSystemException$message' => NULL,
        'InvalidJobIdException$message' => NULL,
        'InvalidManifestFieldException$message' => NULL,
        'InvalidParameterException$message' => NULL,
        'InvalidVersionException$message' => NULL,
        'MalformedManifestException$message' => NULL,
        'MissingCustomsException$message' => NULL,
        'MissingManifestFieldException$message' => NULL,
        'MissingParameterException$message' => NULL,
        'MultipleRegionsException$message' => NULL,
        'NoSuchBucketException$message' => NULL,
        'UnableToCancelJobIdException$message' => NULL,
        'UnableToUpdateJobIdException$message' => NULL,
      ],
    ],
    'ExpiredJobIdException' => [
      'base' => 'Indicates that the specified job has expired out of the system.',
      'refs' => [],
    ],
    'GenericString' => [
      'base' => NULL,
      'refs' => [
        'GetShippingLabelInput$name' => NULL,
        'GetShippingLabelInput$company' => NULL,
        'GetShippingLabelInput$phoneNumber' => NULL,
        'GetShippingLabelInput$country' => NULL,
        'GetShippingLabelInput$stateOrProvince' => NULL,
        'GetShippingLabelInput$city' => NULL,
        'GetShippingLabelInput$postalCode' => NULL,
        'GetShippingLabelInput$street1' => NULL,
        'GetShippingLabelInput$street2' => NULL,
        'GetShippingLabelInput$street3' => NULL,
        'GetShippingLabelInput$APIVersion' => NULL,
        'GetShippingLabelOutput$ShippingLabelURL' => NULL,
        'GetShippingLabelOutput$Warning' => NULL,
        'JobIdList$member' => NULL,
      ],
    ],
    'GetShippingLabelInput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetShippingLabelOutput' => [
      'base' => NULL,
      'refs' => [],
    ],
    'GetStatusInput' => [
      'base' => 'Input structure for the GetStatus operation.',
      'refs' => [],
    ],
    'GetStatusOutput' => [
      'base' => 'Output structure for the GetStatus operation.',
      'refs' => [],
    ],
    'InvalidAccessKeyIdException' => [
      'base' => 'The AWS Access Key ID specified in the request did not match the manifest\'s accessKeyId value. The manifest and the request authentication must use the same AWS Access Key ID.',
      'refs' => [],
    ],
    'InvalidAddressException' => [
      'base' => 'The address specified in the manifest is invalid.',
      'refs' => [],
    ],
    'InvalidCustomsException' => [
      'base' => 'One or more customs parameters was invalid. Please correct and resubmit.',
      'refs' => [],
    ],
    'InvalidFileSystemException' => [
      'base' => 'File system specified in export manifest is invalid.',
      'refs' => [],
    ],
    'InvalidJobIdException' => [
      'base' => 'The JOBID was missing, not found, or not associated with the AWS account.',
      'refs' => [],
    ],
    'InvalidManifestFieldException' => [
      'base' => 'One or more manifest fields was invalid. Please correct and resubmit.',
      'refs' => [],
    ],
    'InvalidParameterException' => [
      'base' => 'One or more parameters had an invalid value.',
      'refs' => [],
    ],
    'InvalidVersionException' => [
      'base' => 'The client tool version is invalid.',
      'refs' => [],
    ],
    'IsCanceled' => [
      'base' => 'Indicates whether the job was canceled.',
      'refs' => [
        'Job$IsCanceled' => NULL,
      ],
    ],
    'IsTruncated' => [
      'base' => 'Indicates whether the list of jobs was truncated. If true, then call ListJobs again using the last JobId element as the marker.',
      'refs' => [
        'ListJobsOutput$IsTruncated' => NULL,
      ],
    ],
    'Job' => [
      'base' => 'Representation of a job returned by the ListJobs operation.',
      'refs' => [
        'JobsList$member' => NULL,
      ],
    ],
    'JobId' => [
      'base' => 'A unique identifier which refers to a particular job.',
      'refs' => [
        'CancelJobInput$JobId' => NULL,
        'CreateJobOutput$JobId' => NULL,
        'GetStatusInput$JobId' => NULL,
        'GetStatusOutput$JobId' => NULL,
        'Job$JobId' => NULL,
        'UpdateJobInput$JobId' => NULL,
      ],
    ],
    'JobIdList' => [
      'base' => NULL,
      'refs' => [
        'GetShippingLabelInput$jobIds' => NULL,
      ],
    ],
    'JobType' => [
      'base' => 'Specifies whether the job to initiate is an import or export job.',
      'refs' => [
        'CreateJobInput$JobType' => NULL,
        'CreateJobOutput$JobType' => NULL,
        'GetStatusOutput$JobType' => NULL,
        'Job$JobType' => NULL,
        'UpdateJobInput$JobType' => NULL,
      ],
    ],
    'JobsList' => [
      'base' => 'A list container for Jobs returned by the ListJobs operation.',
      'refs' => [
        'ListJobsOutput$Jobs' => NULL,
      ],
    ],
    'ListJobsInput' => [
      'base' => 'Input structure for the ListJobs operation.',
      'refs' => [],
    ],
    'ListJobsOutput' => [
      'base' => 'Output structure for the ListJobs operation.',
      'refs' => [],
    ],
    'LocationCode' => [
      'base' => 'A token representing the location of the storage device, such as "AtAWS".',
      'refs' => [
        'GetStatusOutput$LocationCode' => NULL,
      ],
    ],
    'LocationMessage' => [
      'base' => 'A more human readable form of the physical location of the storage device.',
      'refs' => [
        'GetStatusOutput$LocationMessage' => NULL,
      ],
    ],
    'LogBucket' => [
      'base' => 'Amazon S3 bucket for user logs.',
      'refs' => [
        'GetStatusOutput$LogBucket' => NULL,
      ],
    ],
    'LogKey' => [
      'base' => 'The key where the user logs were stored.',
      'refs' => [
        'GetStatusOutput$LogKey' => NULL,
      ],
    ],
    'MalformedManifestException' => [
      'base' => 'Your manifest is not well-formed.',
      'refs' => [],
    ],
    'Manifest' => [
      'base' => 'The UTF-8 encoded text of the manifest file.',
      'refs' => [
        'CreateJobInput$Manifest' => NULL,
        'UpdateJobInput$Manifest' => NULL,
      ],
    ],
    'ManifestAddendum' => [
      'base' => 'For internal use only.',
      'refs' => [
        'CreateJobInput$ManifestAddendum' => NULL,
      ],
    ],
    'Marker' => [
      'base' => 'Specifies the JOBID to start after when listing the jobs created with your account. AWS Import/Export lists your jobs in reverse chronological order. See MaxJobs.',
      'refs' => [
        'ListJobsInput$Marker' => NULL,
      ],
    ],
    'MaxJobs' => [
      'base' => 'Sets the maximum number of jobs returned in the response. If there are additional jobs that were not returned because MaxJobs was exceeded, the response contains &lt;IsTruncated&gt;true&lt;/IsTruncated&gt;. To return the additional jobs, see Marker.',
      'refs' => [
        'ListJobsInput$MaxJobs' => NULL,
      ],
    ],
    'MissingCustomsException' => [
      'base' => 'One or more required customs parameters was missing from the manifest.',
      'refs' => [],
    ],
    'MissingManifestFieldException' => [
      'base' => 'One or more required fields were missing from the manifest file. Please correct and resubmit.',
      'refs' => [],
    ],
    'MissingParameterException' => [
      'base' => 'One or more required parameters was missing from the request.',
      'refs' => [],
    ],
    'MultipleRegionsException' => [
      'base' => 'Your manifest file contained buckets from multiple regions. A job is restricted to buckets from one region. Please correct and resubmit.',
      'refs' => [],
    ],
    'NoSuchBucketException' => [
      'base' => 'The specified bucket does not exist. Create the specified bucket or change the manifest\'s bucket, exportBucket, or logBucket field to a bucket that the account, as specified by the manifest\'s Access Key ID, has write permissions to.',
      'refs' => [],
    ],
    'ProgressCode' => [
      'base' => 'A token representing the state of the job, such as "Started".',
      'refs' => [
        'GetStatusOutput$ProgressCode' => NULL,
      ],
    ],
    'ProgressMessage' => [
      'base' => 'A more human readable form of the job status.',
      'refs' => [
        'GetStatusOutput$ProgressMessage' => NULL,
      ],
    ],
    'Signature' => [
      'base' => 'An encrypted code used to authenticate the request and response, for example, "DV+TpDfx1/TdSE9ktyK9k/bDTVI=". Only use this value is you want to create the signature file yourself. Generally you should use the SignatureFileContents value.',
      'refs' => [
        'CreateJobOutput$Signature' => NULL,
        'GetStatusOutput$Signature' => NULL,
        'GetStatusOutput$SignatureFileContents' => NULL,
      ],
    ],
    'SignatureFileContents' => [
      'base' => 'The actual text of the SIGNATURE file to be written to disk.',
      'refs' => [
        'CreateJobOutput$SignatureFileContents' => NULL,
      ],
    ],
    'Success' => [
      'base' => 'Specifies whether (true] or not (false] AWS Import/Export updated your job.',
      'refs' => [
        'CancelJobOutput$Success' => NULL,
        'UpdateJobOutput$Success' => NULL,
      ],
    ],
    'TrackingNumber' => [
      'base' => 'The shipping tracking number assigned by AWS Import/Export to the storage device when it\'s returned to you. We return this value when the LocationCode is "Returned".',
      'refs' => [
        'GetStatusOutput$TrackingNumber' => NULL,
      ],
    ],
    'URL' => [
      'base' => 'The URL for a given Artifact.',
      'refs' => [
        'Artifact$URL' => NULL,
      ],
    ],
    'UnableToCancelJobIdException' => [
      'base' => 'AWS Import/Export cannot cancel the job',
      'refs' => [],
    ],
    'UnableToUpdateJobIdException' => [
      'base' => 'AWS Import/Export cannot update the job',
      'refs' => [],
    ],
    'UpdateJobInput' => [
      'base' => 'Input structure for the UpateJob operation.',
      'refs' => [],
    ],
    'UpdateJobOutput' => [
      'base' => 'Output structure for the UpateJob operation.',
      'refs' => [],
    ],
    'ValidateOnly' => [
      'base' => 'Validate the manifest and parameter values in the request but do not actually create a job.',
      'refs' => [
        'CreateJobInput$ValidateOnly' => NULL,
        'UpdateJobInput$ValidateOnly' => NULL,
      ],
    ],
    'WarningMessage' => [
      'base' => 'An optional message notifying you of non-fatal issues with the job, such as use of an incompatible Amazon S3 bucket name.',
      'refs' => [
        'CreateJobOutput$WarningMessage' => NULL,
        'UpdateJobOutput$WarningMessage' => NULL,
      ],
    ],
  ],
];
