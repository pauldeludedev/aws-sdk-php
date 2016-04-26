<?php
// This file was auto-generated from sdk-root/src/data/ecr/2015-09-21/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Amazon EC2 Container Registry (Amazon ECR) is a managed AWS Docker registry service. Customers can use the familiar Docker CLI to push, pull, and manage images. Amazon ECR provides a secure, scalable, and reliable registry. Amazon ECR supports private Docker repositories with resource-based permissions using AWS IAM so that specific users or Amazon EC2 instances can access repositories and images. Developers can use the Docker CLI to author and manage images.</p>', 'operations' => [ 'BatchCheckLayerAvailability' => '<p>Check the availability of multiple image layers in a specified registry and repository.</p> <note> <p>This operation is used by the Amazon ECR proxy, and it is not intended for general use by customers. Use the <code>docker</code> CLI to pull, tag, and push images.</p> </note>', 'BatchDeleteImage' => '<p>Deletes a list of specified images within a specified repository. Images are specified with either <code>imageTag</code> or <code>imageDigest</code>.</p>', 'BatchGetImage' => '<p>Gets detailed information for specified images within a specified repository. Images are specified with either <code>imageTag</code> or <code>imageDigest</code>.</p>', 'CompleteLayerUpload' => '<p>Inform Amazon ECR that the image layer upload for a specified registry, repository name, and upload ID, has completed. You can optionally provide a <code>sha256</code> digest of the image layer for data validation purposes.</p> <note> <p>This operation is used by the Amazon ECR proxy, and it is not intended for general use by customers. Use the <code>docker</code> CLI to pull, tag, and push images.</p> </note>', 'CreateRepository' => '<p>Creates an image repository.</p>', 'DeleteRepository' => '<p>Deletes an existing image repository. If a repository contains images, you must use the <code>force</code> option to delete it.</p>', 'DeleteRepositoryPolicy' => '<p>Deletes the repository policy from a specified repository.</p>', 'DescribeRepositories' => '<p>Describes image repositories in a registry.</p>', 'GetAuthorizationToken' => '<p>Retrieves a token that is valid for a specified registry for 12 hours. This command allows you to use the <code>docker</code> CLI to push and pull images with Amazon ECR. If you do not specify a registry, the default registry is assumed.</p> <p>The <code>authorizationToken</code> returned for each registry specified is a base64 encoded string that can be decoded and used in a <code>docker login</code> command to authenticate to a registry. The AWS CLI offers an <code>aws ecr get-login</code> command that simplifies the login process.</p>', 'GetDownloadUrlForLayer' => '<p>Retrieves the pre-signed Amazon S3 download URL corresponding to an image layer. You can only get URLs for image layers that are referenced in an image.</p> <note> <p>This operation is used by the Amazon ECR proxy, and it is not intended for general use by customers. Use the <code>docker</code> CLI to pull, tag, and push images.</p> </note>', 'GetRepositoryPolicy' => '<p>Retrieves the repository policy for a specified repository.</p>', 'InitiateLayerUpload' => '<p>Notify Amazon ECR that you intend to upload an image layer.</p> <note> <p>This operation is used by the Amazon ECR proxy, and it is not intended for general use by customers. Use the <code>docker</code> CLI to pull, tag, and push images.</p> </note>', 'ListImages' => '<p>Lists all the image IDs for a given repository.</p>', 'PutImage' => '<p>Creates or updates the image manifest associated with an image.</p> <note> <p>This operation is used by the Amazon ECR proxy, and it is not intended for general use by customers. Use the <code>docker</code> CLI to pull, tag, and push images.</p> </note>', 'SetRepositoryPolicy' => '<p>Applies a repository policy on a specified repository to control access permissions.</p>', 'UploadLayerPart' => '<p>Uploads an image layer part to Amazon ECR.</p> <note> <p>This operation is used by the Amazon ECR proxy, and it is not intended for general use by customers. Use the <code>docker</code> CLI to pull, tag, and push images.</p> </note>', ], 'shapes' => [ 'Arn' => [ 'base' => NULL, 'refs' => [ 'Repository$repositoryArn' => '<p>The Amazon Resource Name (ARN) that identifies the repository. The ARN contains the <code>arn:aws:ecr</code> namespace, followed by the region of the repository, the AWS account ID of the repository owner, the repository namespace, and then the repository name. For example, <code>arn:aws:ecr:region:012345678910:repository/test</code>.</p>', ], ], 'AuthorizationData' => [ 'base' => '<p>An object representing authorization data for an Amazon ECR registry.</p>', 'refs' => [ 'AuthorizationDataList$member' => NULL, ], ], 'AuthorizationDataList' => [ 'base' => NULL, 'refs' => [ 'GetAuthorizationTokenResponse$authorizationData' => '<p>A list of authorization token data objects that correspond to the <code>registryIds</code> values in the request.</p>', ], ], 'Base64' => [ 'base' => NULL, 'refs' => [ 'AuthorizationData$authorizationToken' => '<p>A base64-encoded string that contains authorization data for the specified Amazon ECR registry. When the string is decoded, it is presented in the format <code>user:password</code> for private registry authentication using <code>docker login</code>.</p>', ], ], 'BatchCheckLayerAvailabilityRequest' => [ 'base' => NULL, 'refs' => [], ], 'BatchCheckLayerAvailabilityResponse' => [ 'base' => NULL, 'refs' => [], ], 'BatchDeleteImageRequest' => [ 'base' => '<p>Deletes specified images within a specified repository. Images are specified with either the <code>imageTag</code> or <code>imageDigest</code>.</p>', 'refs' => [], ], 'BatchDeleteImageResponse' => [ 'base' => NULL, 'refs' => [], ], 'BatchGetImageRequest' => [ 'base' => NULL, 'refs' => [], ], 'BatchGetImageResponse' => [ 'base' => NULL, 'refs' => [], ], 'BatchedOperationLayerDigest' => [ 'base' => NULL, 'refs' => [ 'BatchedOperationLayerDigestList$member' => NULL, 'LayerFailure$layerDigest' => '<p>The layer digest associated with the failure.</p>', ], ], 'BatchedOperationLayerDigestList' => [ 'base' => NULL, 'refs' => [ 'BatchCheckLayerAvailabilityRequest$layerDigests' => '<p>The digests of the image layers to check.</p>', ], ], 'CompleteLayerUploadRequest' => [ 'base' => NULL, 'refs' => [], ], 'CompleteLayerUploadResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateRepositoryRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateRepositoryResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteRepositoryPolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteRepositoryPolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteRepositoryRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteRepositoryResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeRepositoriesRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeRepositoriesResponse' => [ 'base' => NULL, 'refs' => [], ], 'EmptyUploadException' => [ 'base' => '<p>The specified layer upload does not contain any layer parts.</p>', 'refs' => [], ], 'ExceptionMessage' => [ 'base' => NULL, 'refs' => [ 'EmptyUploadException$message' => '<p>The error message associated with the exception.</p>', 'ImageAlreadyExistsException$message' => '<p>The error message associated with the exception.</p>', 'InvalidLayerException$message' => '<p>The error message associated with the exception.</p>', 'InvalidLayerPartException$message' => '<p>The error message associated with the exception.</p>', 'InvalidParameterException$message' => '<p>The error message associated with the exception.</p>', 'LayerAlreadyExistsException$message' => '<p>The error message associated with the exception.</p>', 'LayerInaccessibleException$message' => '<p>The error message associated with the exception.</p>', 'LayerPartTooSmallException$message' => '<p>The error message associated with the exception.</p>', 'LayersNotFoundException$message' => '<p>The error message associated with the exception.</p>', 'LimitExceededException$message' => '<p>The error message associated with the exception.</p>', 'RepositoryAlreadyExistsException$message' => '<p>The error message associated with the exception.</p>', 'RepositoryNotEmptyException$message' => '<p>The error message associated with the exception.</p>', 'RepositoryNotFoundException$message' => '<p>The error message associated with the exception.</p>', 'RepositoryPolicyNotFoundException$message' => '<p>The error message associated with the exception.</p>', 'ServerException$message' => '<p>The error message associated with the exception.</p>', 'UploadNotFoundException$message' => '<p>The error message associated with the exception.</p>', ], ], 'ExpirationTimestamp' => [ 'base' => NULL, 'refs' => [ 'AuthorizationData$expiresAt' => '<p>The Unix time in seconds and milliseconds when the authorization token expires. Authorization tokens are valid for 12 hours.</p>', ], ], 'ForceFlag' => [ 'base' => NULL, 'refs' => [ 'DeleteRepositoryRequest$force' => '<p>Force the deletion of the repository if it contains images.</p>', 'SetRepositoryPolicyRequest$force' => '<p>If the policy you are attempting to set on a repository policy would prevent you from setting another policy in the future, you must force the <a>SetRepositoryPolicy</a> operation. This is intended to prevent accidental repository lock outs.</p>', ], ], 'GetAuthorizationTokenRegistryIdList' => [ 'base' => NULL, 'refs' => [ 'GetAuthorizationTokenRequest$registryIds' => '<p>A list of AWS account IDs that are associated with the registries for which to get authorization tokens. If you do not specify a registry, the default registry is assumed.</p>', ], ], 'GetAuthorizationTokenRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetAuthorizationTokenResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetDownloadUrlForLayerRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDownloadUrlForLayerResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetRepositoryPolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetRepositoryPolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'Image' => [ 'base' => '<p>Object representing an image.</p>', 'refs' => [ 'ImageList$member' => NULL, 'PutImageResponse$image' => '<p>Details of the image uploaded.</p>', ], ], 'ImageAlreadyExistsException' => [ 'base' => '<p>The specified image has already been pushed, and there are no changes to the manifest or image tag since the last push.</p>', 'refs' => [], ], 'ImageDigest' => [ 'base' => NULL, 'refs' => [ 'ImageIdentifier$imageDigest' => '<p>The <code>sha256</code> digest of the image manifest.</p>', ], ], 'ImageFailure' => [ 'base' => NULL, 'refs' => [ 'ImageFailureList$member' => NULL, ], ], 'ImageFailureCode' => [ 'base' => NULL, 'refs' => [ 'ImageFailure$failureCode' => '<p>The code associated with the failure.</p>', ], ], 'ImageFailureList' => [ 'base' => NULL, 'refs' => [ 'BatchDeleteImageResponse$failures' => '<p>Any failures associated with the call.</p>', 'BatchGetImageResponse$failures' => '<p>Any failures associated with the call.</p>', ], ], 'ImageFailureReason' => [ 'base' => NULL, 'refs' => [ 'ImageFailure$failureReason' => '<p>The reason for the failure.</p>', ], ], 'ImageIdentifier' => [ 'base' => NULL, 'refs' => [ 'Image$imageId' => '<p>An object containing the image tag and image digest associated with an image.</p>', 'ImageFailure$imageId' => '<p>The image ID associated with the failure.</p>', 'ImageIdentifierList$member' => NULL, ], ], 'ImageIdentifierList' => [ 'base' => NULL, 'refs' => [ 'BatchDeleteImageRequest$imageIds' => '<p>A list of image ID references that correspond to images to delete. The format of the <code>imageIds</code> reference is <code>imageTag=tag</code> or <code>imageDigest=digest</code>.</p>', 'BatchDeleteImageResponse$imageIds' => '<p>The image IDs of the deleted images.</p>', 'BatchGetImageRequest$imageIds' => '<p>A list of image ID references that correspond to images to describe. The format of the <code>imageIds</code> reference is <code>imageTag=tag</code> or <code>imageDigest=digest</code>.</p>', 'ListImagesResponse$imageIds' => '<p>The list of image IDs for the requested repository.</p>', ], ], 'ImageList' => [ 'base' => NULL, 'refs' => [ 'BatchGetImageResponse$images' => '<p>A list of image objects corresponding to the image references in the request.</p>', ], ], 'ImageManifest' => [ 'base' => NULL, 'refs' => [ 'Image$imageManifest' => '<p>The image manifest associated with the image.</p>', 'PutImageRequest$imageManifest' => '<p>The image manifest corresponding to the image to be uploaded.</p>', ], ], 'ImageTag' => [ 'base' => NULL, 'refs' => [ 'ImageIdentifier$imageTag' => '<p>The tag used for the image.</p>', ], ], 'InitiateLayerUploadRequest' => [ 'base' => NULL, 'refs' => [], ], 'InitiateLayerUploadResponse' => [ 'base' => NULL, 'refs' => [], ], 'InvalidLayerException' => [ 'base' => '<p>The layer digest calculation performed by Amazon ECR upon receipt of the image layer does not match the digest specified.</p>', 'refs' => [], ], 'InvalidLayerPartException' => [ 'base' => '<p>The layer part size is not valid, or the first byte specified is not consecutive to the last byte of a previous layer part upload.</p>', 'refs' => [], ], 'InvalidParameterException' => [ 'base' => '<p>The specified parameter is invalid. Review the available parameters for the API request.</p>', 'refs' => [], ], 'Layer' => [ 'base' => NULL, 'refs' => [ 'LayerList$member' => NULL, ], ], 'LayerAlreadyExistsException' => [ 'base' => '<p>The image layer already exists in the associated repository.</p>', 'refs' => [], ], 'LayerAvailability' => [ 'base' => NULL, 'refs' => [ 'Layer$layerAvailability' => '<p>The availability status of the image layer. Valid values are <code>AVAILABLE</code> and <code>UNAVAILABLE</code>.</p>', ], ], 'LayerDigest' => [ 'base' => NULL, 'refs' => [ 'CompleteLayerUploadResponse$layerDigest' => '<p>The <code>sha256</code> digest of the image layer.</p>', 'GetDownloadUrlForLayerRequest$layerDigest' => '<p>The digest of the image layer to download.</p>', 'GetDownloadUrlForLayerResponse$layerDigest' => '<p>The digest of the image layer to download.</p>', 'Layer$layerDigest' => '<p>The <code>sha256</code> digest of the image layer.</p>', 'LayerDigestList$member' => NULL, ], ], 'LayerDigestList' => [ 'base' => NULL, 'refs' => [ 'CompleteLayerUploadRequest$layerDigests' => '<p>The <code>sha256</code> digest of the image layer.</p>', ], ], 'LayerFailure' => [ 'base' => NULL, 'refs' => [ 'LayerFailureList$member' => NULL, ], ], 'LayerFailureCode' => [ 'base' => NULL, 'refs' => [ 'LayerFailure$failureCode' => '<p>The failure code associated with the failure.</p>', ], ], 'LayerFailureList' => [ 'base' => NULL, 'refs' => [ 'BatchCheckLayerAvailabilityResponse$failures' => '<p>Any failures associated with the call.</p>', ], ], 'LayerFailureReason' => [ 'base' => NULL, 'refs' => [ 'LayerFailure$failureReason' => '<p>The reason for the failure.</p>', ], ], 'LayerInaccessibleException' => [ 'base' => '<p>The specified layer is not available because it is not associated with an image. Unassociated image layers may be cleaned up at any time.</p>', 'refs' => [], ], 'LayerList' => [ 'base' => NULL, 'refs' => [ 'BatchCheckLayerAvailabilityResponse$layers' => '<p>A list of image layer objects corresponding to the image layer references in the request.</p>', ], ], 'LayerPartBlob' => [ 'base' => NULL, 'refs' => [ 'UploadLayerPartRequest$layerPartBlob' => '<p>The base64-encoded layer part payload.</p>', ], ], 'LayerPartTooSmallException' => [ 'base' => '<p>Layer parts must be at least 5 MiB in size.</p>', 'refs' => [], ], 'LayerSizeInBytes' => [ 'base' => NULL, 'refs' => [ 'Layer$layerSize' => '<p>The size, in bytes, of the image layer.</p>', ], ], 'LayersNotFoundException' => [ 'base' => '<p>The specified layers could not be found, or the specified layer is not valid for this repository.</p>', 'refs' => [], ], 'LimitExceededException' => [ 'base' => '<p>The operation did not succeed because it would have exceeded a service limit for your account. For more information, see <a href="http://docs.aws.amazon.com/AmazonECR/latest/userguide/service_limits.html">Amazon ECR Default Service Limits</a> in the Amazon EC2 Container Registry User Guide.</p>', 'refs' => [], ], 'ListImagesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListImagesResponse' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'DescribeRepositoriesRequest$maxResults' => '<p>The maximum number of repository results returned by <code>DescribeRepositories</code> in paginated output. When this parameter is used, <code>DescribeRepositories</code> only returns <code>maxResults</code> results in a single page along with a <code>nextToken</code> response element. The remaining results of the initial request can be seen by sending another <code>DescribeRepositories</code> request with the returned <code>nextToken</code> value. This value can be between 1 and 100. If this parameter is not used, then <code>DescribeRepositories</code> returns up to 100 results and a <code>nextToken</code> value, if applicable.</p>', 'ListImagesRequest$maxResults' => '<p>The maximum number of image results returned by <code>ListImages</code> in paginated output. When this parameter is used, <code>ListImages</code> only returns <code>maxResults</code> results in a single page along with a <code>nextToken</code> response element. The remaining results of the initial request can be seen by sending another <code>ListImages</code> request with the returned <code>nextToken</code> value. This value can be between 1 and 100. If this parameter is not used, then <code>ListImages</code> returns up to 100 results and a <code>nextToken</code> value, if applicable.</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'DescribeRepositoriesRequest$nextToken' => '<p>The <code>nextToken</code> value returned from a previous paginated <code>DescribeRepositories</code> request where <code>maxResults</code> was used and the results exceeded the value of that parameter. Pagination continues from the end of the previous results that returned the <code>nextToken</code> value. This value is <code>null</code> when there are no more results to return.</p>', 'DescribeRepositoriesResponse$nextToken' => '<p>The <code>nextToken</code> value to include in a future <code>DescribeRepositories</code> request. When the results of a <code>DescribeRepositories</code> request exceed <code>maxResults</code>, this value can be used to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'ListImagesRequest$nextToken' => '<p>The <code>nextToken</code> value returned from a previous paginated <code>ListImages</code> request where <code>maxResults</code> was used and the results exceeded the value of that parameter. Pagination continues from the end of the previous results that returned the <code>nextToken</code> value. This value is <code>null</code> when there are no more results to return.</p>', 'ListImagesResponse$nextToken' => '<p>The <code>nextToken</code> value to include in a future <code>ListImages</code> request. When the results of a <code>ListImages</code> request exceed <code>maxResults</code>, this value can be used to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', ], ], 'PartSize' => [ 'base' => NULL, 'refs' => [ 'InitiateLayerUploadResponse$partSize' => '<p>The size, in bytes, that Amazon ECR expects future layer part uploads to be.</p>', 'InvalidLayerPartException$lastValidByteReceived' => '<p>The last valid byte received from the layer part upload that is associated with the exception.</p>', 'UploadLayerPartRequest$partFirstByte' => '<p>The integer value of the first byte of the layer part.</p>', 'UploadLayerPartRequest$partLastByte' => '<p>The integer value of the last byte of the layer part.</p>', 'UploadLayerPartResponse$lastByteReceived' => '<p>The integer value of the last byte received in the request.</p>', ], ], 'ProxyEndpoint' => [ 'base' => NULL, 'refs' => [ 'AuthorizationData$proxyEndpoint' => '<p>The registry URL to use for this authorization token in a <code>docker login</code> command. The Amazon ECR registry URL format is <code>https://aws_account_id.dkr.ecr.region.amazonaws.com</code>. For example, <code>https://012345678910.dkr.ecr.us-east-1.amazonaws.com</code>.. </p>', ], ], 'PutImageRequest' => [ 'base' => NULL, 'refs' => [], ], 'PutImageResponse' => [ 'base' => NULL, 'refs' => [], ], 'RegistryId' => [ 'base' => NULL, 'refs' => [ 'BatchCheckLayerAvailabilityRequest$registryId' => '<p>The AWS account ID associated with the registry that contains the image layers to check. If you do not specify a registry, the default registry is assumed.</p>', 'BatchDeleteImageRequest$registryId' => '<p>The AWS account ID associated with the registry that contains the image to delete. If you do not specify a registry, the default registry is assumed.</p>', 'BatchGetImageRequest$registryId' => '<p>The AWS account ID associated with the registry that contains the images to describe. If you do not specify a registry, the default registry is assumed.</p>', 'CompleteLayerUploadRequest$registryId' => '<p>The AWS account ID associated with the registry to which to upload layers. If you do not specify a registry, the default registry is assumed.</p>', 'CompleteLayerUploadResponse$registryId' => '<p>The registry ID associated with the request.</p>', 'DeleteRepositoryPolicyRequest$registryId' => '<p>The AWS account ID associated with the registry that contains the repository policy to delete. If you do not specify a registry, the default registry is assumed.</p>', 'DeleteRepositoryPolicyResponse$registryId' => '<p>The registry ID associated with the request.</p>', 'DeleteRepositoryRequest$registryId' => '<p>The AWS account ID associated with the registry that contains the repository to delete. If you do not specify a registry, the default registry is assumed.</p>', 'DescribeRepositoriesRequest$registryId' => '<p>The AWS account ID associated with the registry that contains the repositories to be described. If you do not specify a registry, the default registry is assumed.</p>', 'GetAuthorizationTokenRegistryIdList$member' => NULL, 'GetDownloadUrlForLayerRequest$registryId' => '<p>The AWS account ID associated with the registry that contains the image layer to download. If you do not specify a registry, the default registry is assumed.</p>', 'GetRepositoryPolicyRequest$registryId' => '<p>The AWS account ID associated with the registry that contains the repository. If you do not specify a registry, the default registry is assumed.</p>', 'GetRepositoryPolicyResponse$registryId' => '<p>The registry ID associated with the request.</p>', 'Image$registryId' => '<p>The AWS account ID associated with the registry containing the image.</p>', 'InitiateLayerUploadRequest$registryId' => '<p>The AWS account ID associated with the registry that you intend to upload layers to. If you do not specify a registry, the default registry is assumed.</p>', 'InvalidLayerPartException$registryId' => '<p>The registry ID associated with the exception.</p>', 'ListImagesRequest$registryId' => '<p>The AWS account ID associated with the registry that contains the repository to list images in. If you do not specify a registry, the default registry is assumed.</p>', 'PutImageRequest$registryId' => '<p>The AWS account ID associated with the registry that contains the repository in which to put the image. If you do not specify a registry, the default registry is assumed.</p>', 'Repository$registryId' => '<p>The AWS account ID associated with the registry that contains the repository.</p>', 'SetRepositoryPolicyRequest$registryId' => '<p>The AWS account ID associated with the registry that contains the repository. If you do not specify a registry, the default registry is assumed.</p>', 'SetRepositoryPolicyResponse$registryId' => '<p>The registry ID associated with the request.</p>', 'UploadLayerPartRequest$registryId' => '<p>The AWS account ID associated with the registry that you are uploading layer parts to. If you do not specify a registry, the default registry is assumed.</p>', 'UploadLayerPartResponse$registryId' => '<p>The registry ID associated with the request.</p>', ], ], 'Repository' => [ 'base' => '<p>Object representing a repository.</p>', 'refs' => [ 'CreateRepositoryResponse$repository' => NULL, 'DeleteRepositoryResponse$repository' => NULL, 'RepositoryList$member' => NULL, ], ], 'RepositoryAlreadyExistsException' => [ 'base' => '<p>The specified repository already exists in the specified registry.</p>', 'refs' => [], ], 'RepositoryList' => [ 'base' => NULL, 'refs' => [ 'DescribeRepositoriesResponse$repositories' => '<p>A list of repository objects corresponding to valid repositories.</p>', ], ], 'RepositoryName' => [ 'base' => NULL, 'refs' => [ 'BatchCheckLayerAvailabilityRequest$repositoryName' => '<p>The name of the repository that is associated with the image layers to check.</p>', 'BatchDeleteImageRequest$repositoryName' => '<p>The repository that contains the image to delete.</p>', 'BatchGetImageRequest$repositoryName' => '<p>The repository that contains the images to describe.</p>', 'CompleteLayerUploadRequest$repositoryName' => '<p>The name of the repository to associate with the image layer.</p>', 'CompleteLayerUploadResponse$repositoryName' => '<p>The repository name associated with the request.</p>', 'CreateRepositoryRequest$repositoryName' => '<p>The name to use for the repository. The repository name may be specified on its own (such as <code>nginx-web-app</code>) or it can be prepended with a namespace to group the repository into a category (such as <code>project-a/nginx-web-app</code>).</p>', 'DeleteRepositoryPolicyRequest$repositoryName' => '<p>The name of the repository that is associated with the repository policy to delete.</p>', 'DeleteRepositoryPolicyResponse$repositoryName' => '<p>The repository name associated with the request.</p>', 'DeleteRepositoryRequest$repositoryName' => '<p>The name of the repository to delete.</p>', 'GetDownloadUrlForLayerRequest$repositoryName' => '<p>The name of the repository that is associated with the image layer to download.</p>', 'GetRepositoryPolicyRequest$repositoryName' => '<p>The name of the repository whose policy you want to retrieve.</p>', 'GetRepositoryPolicyResponse$repositoryName' => '<p>The repository name associated with the request.</p>', 'Image$repositoryName' => '<p>The name of the repository associated with the image.</p>', 'InitiateLayerUploadRequest$repositoryName' => '<p>The name of the repository that you intend to upload layers to.</p>', 'InvalidLayerPartException$repositoryName' => '<p>The repository name associated with the exception.</p>', 'ListImagesRequest$repositoryName' => '<p>The repository whose image IDs are to be listed.</p>', 'PutImageRequest$repositoryName' => '<p>The name of the repository in which to put the image.</p>', 'Repository$repositoryName' => '<p>The name of the repository.</p>', 'RepositoryNameList$member' => NULL, 'SetRepositoryPolicyRequest$repositoryName' => '<p>The name of the repository to receive the policy.</p>', 'SetRepositoryPolicyResponse$repositoryName' => '<p>The repository name associated with the request.</p>', 'UploadLayerPartRequest$repositoryName' => '<p>The name of the repository that you are uploading layer parts to.</p>', 'UploadLayerPartResponse$repositoryName' => '<p>The repository name associated with the request.</p>', ], ], 'RepositoryNameList' => [ 'base' => NULL, 'refs' => [ 'DescribeRepositoriesRequest$repositoryNames' => '<p>A list of repositories to describe. If this parameter is omitted, then all repositories in a registry are described.</p>', ], ], 'RepositoryNotEmptyException' => [ 'base' => '<p>The specified repository contains images. To delete a repository that contains images, you must force the deletion with the <code>force</code> parameter.</p>', 'refs' => [], ], 'RepositoryNotFoundException' => [ 'base' => '<p>The specified repository could not be found. Check the spelling of the specified repository and ensure that you are performing operations on the correct registry.</p>', 'refs' => [], ], 'RepositoryPolicyNotFoundException' => [ 'base' => '<p>The specified repository and registry combination does not have an associated repository policy.</p>', 'refs' => [], ], 'RepositoryPolicyText' => [ 'base' => NULL, 'refs' => [ 'DeleteRepositoryPolicyResponse$policyText' => '<p>The JSON repository policy that was deleted from the repository.</p>', 'GetRepositoryPolicyResponse$policyText' => '<p>The JSON repository policy text associated with the repository.</p>', 'SetRepositoryPolicyRequest$policyText' => '<p>The JSON repository policy text to apply to the repository.</p>', 'SetRepositoryPolicyResponse$policyText' => '<p>The JSON repository policy text applied to the repository.</p>', ], ], 'ServerException' => [ 'base' => '<p>These errors are usually caused by a server-side issue.</p>', 'refs' => [], ], 'SetRepositoryPolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'SetRepositoryPolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'UploadId' => [ 'base' => NULL, 'refs' => [ 'CompleteLayerUploadRequest$uploadId' => '<p>The upload ID from a previous <a>InitiateLayerUpload</a> operation to associate with the image layer.</p>', 'CompleteLayerUploadResponse$uploadId' => '<p>The upload ID associated with the layer.</p>', 'InitiateLayerUploadResponse$uploadId' => '<p>The upload ID for the layer upload. This parameter is passed to further <a>UploadLayerPart</a> and <a>CompleteLayerUpload</a> operations.</p>', 'InvalidLayerPartException$uploadId' => '<p>The upload ID associated with the exception.</p>', 'UploadLayerPartRequest$uploadId' => '<p>The upload ID from a previous <a>InitiateLayerUpload</a> operation to associate with the layer part upload.</p>', 'UploadLayerPartResponse$uploadId' => '<p>The upload ID associated with the request.</p>', ], ], 'UploadLayerPartRequest' => [ 'base' => NULL, 'refs' => [], ], 'UploadLayerPartResponse' => [ 'base' => NULL, 'refs' => [], ], 'UploadNotFoundException' => [ 'base' => '<p>The upload could not be found, or the specified upload id is not valid for this repository.</p>', 'refs' => [], ], 'Url' => [ 'base' => NULL, 'refs' => [ 'GetDownloadUrlForLayerResponse$downloadUrl' => '<p>The pre-signed Amazon S3 download URL for the requested layer.</p>', 'Repository$repositoryUri' => '<p>The URI for the repository. You can use this URI for Docker <code>push</code> and <code>pull</code> operations.</p>', ], ], ],];
