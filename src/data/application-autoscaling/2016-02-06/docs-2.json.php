<?php
// This file was auto-generated from sdk-root/src/data/application-autoscaling/2016-02-06/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Application Auto Scaling is a general purpose Auto Scaling service for supported elastic AWS resources. With Application Auto Scaling, you can automatically scale your AWS resources, with an experience similar to that of Auto Scaling.</p> <note> <p>At this time, Application Auto Scaling only supports scaling Amazon ECS services.</p> </note> <p>For example, you can use Application Auto Scaling to accomplish the following tasks:</p> <ul> <li> <p>Define scaling policies for automatically adjusting your application’s resources</p> </li> <li> <p>Scale your resources in response to CloudWatch alarms</p> </li> <li> <p>View history of your scaling events </p> </li> </ul> <p>Application Auto Scaling is available in the following regions:</p> <ul> <li> <p> <code>us-east-1</code> </p> </li> <li> <p> <code>us-west-1</code> </p> </li> <li> <p> <code>us-west-2</code> </p> </li> <li> <p> <code>ap-southeast-1</code> </p> </li> <li> <p> <code>ap-southeast-2</code> </p> </li> <li> <p> <code>ap-northeast-1</code> </p> </li> <li> <p> <code>eu-central-1</code> </p> </li> <li> <p> <code>eu-west-1</code> </p> </li> </ul>', 'operations' => [ 'DeleteScalingPolicy' => '<p>Deletes an Application Auto Scaling scaling policy that was previously created. If you are no longer using a scaling policy, you can delete it with this operation.</p> <p>Deleting a policy deletes the underlying alarm action, but does not delete the CloudWatch alarm, even if it no longer has an associated action.</p> <p>To create a new scaling policy or update an existing one, see <a>PutScalingPolicy</a>.</p>', 'DeregisterScalableTarget' => '<p>Deregisters a scalable target that was previously registered. If you are no longer using a scalable target, you can delete it with this operation. When you deregister a scalable target, all of the scaling policies that are associated with that scalable target are deleted.</p> <p>To create a new scalable target or update an existing one, see <a>RegisterScalableTarget</a>.</p>', 'DescribeScalableTargets' => '<p>Provides descriptive information for scalable targets with a specified service namespace.</p> <p>You can filter the results in a service namespace with the <code>ResourceIds</code> and <code>ScalableDimension</code> parameters.</p> <p>To create a new scalable target or update an existing one, see <a>RegisterScalableTarget</a>. If you are no longer using a scalable target, you can deregister it with <a>DeregisterScalableTarget</a>.</p>', 'DescribeScalingActivities' => '<p>Provides descriptive information for scaling activities with a specified service namespace for the previous six weeks.</p> <p>You can filter the results in a service namespace with the <code>ResourceId</code> and <code>ScalableDimension</code> parameters.</p> <p>Scaling activities are triggered by CloudWatch alarms that are associated with scaling policies. To view the existing scaling policies for a service namespace, see <a>DescribeScalingPolicies</a>. To create a new scaling policy or update an existing one, see <a>PutScalingPolicy</a>.</p>', 'DescribeScalingPolicies' => '<p>Provides descriptive information for scaling policies with a specified service namespace.</p> <p>You can filter the results in a service namespace with the <code>ResourceId</code>, <code>ScalableDimension</code>, and <code>PolicyNames</code> parameters.</p> <p>To create a new scaling policy or update an existing one, see <a>PutScalingPolicy</a>. If you are no longer using a scaling policy, you can delete it with <a>DeleteScalingPolicy</a>.</p>', 'PutScalingPolicy' => '<p>Creates or updates a policy for an existing Application Auto Scaling scalable target. Each scalable target is identified by service namespace, a resource ID, and a scalable dimension, and a scaling policy applies to a scalable target that is identified by those three attributes. You cannot create a scaling policy without first registering a scalable target with <a>RegisterScalableTarget</a>.</p> <p>To update an existing policy, use the existing policy name and set the parameters you want to change. Any existing parameter not changed in an update to an existing policy is not changed in this update request.</p> <p>You can view the existing scaling policies for a service namespace with <a>DescribeScalingPolicies</a>. If you are no longer using a scaling policy, you can delete it with <a>DeleteScalingPolicy</a>.</p>', 'RegisterScalableTarget' => '<p>Registers or updates a scalable target. A scalable target is a resource that can be scaled up or down with Application Auto Scaling. After you have registered a scalable target, you can use this command to update the minimum and maximum values for your scalable dimension.</p> <note> <p>At this time, Application Auto Scaling only supports scaling Amazon ECS services.</p> </note> <p>After you register a scalable target with Application Auto Scaling, you can create and apply scaling policies to it with <a>PutScalingPolicy</a>. You can view the existing scaling policies for a service namespace with <a>DescribeScalableTargets</a>. If you are no longer using a scalable target, you can deregister it with <a>DeregisterScalableTarget</a>.</p>', ], 'shapes' => [ 'AdjustmentType' => [ 'base' => NULL, 'refs' => [ 'StepScalingPolicyConfiguration$AdjustmentType' => '<p>The adjustment type, which specifies how the <code>ScalingAdjustment</code> parameter in a <a>StepAdjustment</a> is interpreted.</p>', ], ], 'Alarm' => [ 'base' => '<p>An object representing a CloudWatch alarm associated with a scaling policy.</p>', 'refs' => [ 'Alarms$member' => NULL, ], ], 'Alarms' => [ 'base' => NULL, 'refs' => [ 'ScalingPolicy$Alarms' => '<p>The CloudWatch alarms that are associated with the scaling policy.</p>', ], ], 'ConcurrentUpdateException' => [ 'base' => '<p>Concurrent updates caused an exception, for example, if you request an update to an Application Auto Scaling resource that already has a pending update.</p>', 'refs' => [], ], 'Cooldown' => [ 'base' => NULL, 'refs' => [ 'StepScalingPolicyConfiguration$Cooldown' => '<p>The amount of time, in seconds, after a scaling activity completes where previous trigger-related scaling activities can influence future scaling events.</p> <p>For scale out policies, while <code>Cooldown</code> is in effect, the capacity that has been added by the previous scale out event that initiated the <code>Cooldown</code> is calculated as part of the desired capacity for the next scale out. The intention is to continuously (but not excessively) scale out. For example, an alarm triggers a step scaling policy to scale out an Amazon ECS service by 2 tasks, the scaling activity completes successfully, and a <code>Cooldown</code> period of 5 minutes starts. During the <code>Cooldown</code> period, if the alarm triggers the same policy again but at a more aggressive step adjustment to scale out the service by 3 tasks, the 2 tasks that were added in the previous scale out event are considered part of that capacity and only 1 additional task is added to the desired count.</p> <p>For scale in policies, the <code>Cooldown</code> period is used to block subsequent scale in requests until it has expired. The intention is to scale in conservatively to protect your application\'s availability. However, if another alarm triggers a scale out policy during the <code>Cooldown</code> period after a scale-in, Application Auto Scaling scales out your scalable target immediately.</p>', ], ], 'DeleteScalingPolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteScalingPolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeregisterScalableTargetRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeregisterScalableTargetResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeScalableTargetsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeScalableTargetsResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeScalingActivitiesRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeScalingActivitiesResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeScalingPoliciesRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeScalingPoliciesResponse' => [ 'base' => NULL, 'refs' => [], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'ConcurrentUpdateException$Message' => NULL, 'FailedResourceAccessException$Message' => NULL, 'InternalServiceException$Message' => NULL, 'InvalidNextTokenException$Message' => NULL, 'LimitExceededException$Message' => NULL, 'ObjectNotFoundException$Message' => NULL, 'ValidationException$Message' => NULL, ], ], 'FailedResourceAccessException' => [ 'base' => '<p>Failed access to resources caused an exception. This exception currently only applies to <a>DescribeScalingPolicies</a>. It is thrown when Application Auto Scaling is unable to retrieve the alarms associated with a scaling policy due to a client error, for example, if the role ARN specified for a scalable target does not have the proper permissions to call the CloudWatch <a href="http://docs.aws.amazon.com/AmazonCloudWatch/latest/APIReference/API_DescribeAlarms.html">DescribeAlarms</a> API operation on behalf of your account.</p>', 'refs' => [], ], 'InternalServiceException' => [ 'base' => '<p>The service encountered an internal error.</p>', 'refs' => [], ], 'InvalidNextTokenException' => [ 'base' => '<p>The next token supplied was invalid.</p>', 'refs' => [], ], 'LimitExceededException' => [ 'base' => '<p>Your account exceeded a limit. This exception is thrown when a per-account resource limit is exceeded. Application Auto Scaling has a limit of 40 scalable targets per account for Amazon ECS services, 50 scaling policies per scalable target, and 20 step adjustments per step scaling policy.</p>', 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'DescribeScalableTargetsRequest$MaxResults' => '<p>The maximum number of scalable target results returned by <code>DescribeScalableTargets</code> in paginated output. When this parameter is used, <code>DescribeScalableTargets</code> returns up to <code>MaxResults</code> results in a single page along with a <code>NextToken</code> response element. The remaining results of the initial request can be seen by sending another <code>DescribeScalableTargets</code> request with the returned <code>NextToken</code> value. This value can be between 1 and 50. If this parameter is not used, then <code>DescribeScalableTargets</code> returns up to 50 results and a <code>NextToken</code> value, if applicable.</p>', 'DescribeScalingActivitiesRequest$MaxResults' => '<p>The maximum number of scaling activity results returned by <code>DescribeScalingActivities</code> in paginated output. When this parameter is used, <code>DescribeScalingActivities</code> returns up to <code>MaxResults</code> results in a single page along with a <code>NextToken</code> response element. The remaining results of the initial request can be seen by sending another <code>DescribeScalingActivities</code> request with the returned <code>NextToken</code> value. This value can be between 1 and 50. If this parameter is not used, then <code>DescribeScalingActivities</code> returns up to 50 results and a <code>NextToken</code> value, if applicable.</p>', 'DescribeScalingPoliciesRequest$MaxResults' => '<p>The maximum number of scaling policy results returned by <code>DescribeScalingPolicies</code> in paginated output. When this parameter is used, <code>DescribeScalingPolicies</code> returns up to <code>MaxResults</code> results in a single page along with a <code>NextToken</code> response element. The remaining results of the initial request can be seen by sending another <code>DescribeScalingPolicies</code> request with the returned <code>NextToken</code> value. This value can be between 1 and 50. If this parameter is not used, then <code>DescribeScalingPolicies</code> returns up to 50 results and a <code>NextToken</code> value, if applicable.</p>', ], ], 'MetricAggregationType' => [ 'base' => NULL, 'refs' => [ 'StepScalingPolicyConfiguration$MetricAggregationType' => '<p>The aggregation type for the CloudWatch metrics. Valid values are <code>Minimum</code>, <code>Maximum</code>, and <code>Average</code>.</p>', ], ], 'MetricScale' => [ 'base' => NULL, 'refs' => [ 'StepAdjustment$MetricIntervalLowerBound' => '<p>The lower bound for the difference between the alarm threshold and the CloudWatch metric. If the metric value is above the breach threshold, the lower bound is inclusive (the metric must be greater than or equal to the threshold plus the lower bound). Otherwise, it is exclusive (the metric must be greater than the threshold plus the lower bound). A null value indicates negative infinity.</p>', 'StepAdjustment$MetricIntervalUpperBound' => '<p>The upper bound for the difference between the alarm threshold and the CloudWatch metric. If the metric value is above the breach threshold, the upper bound is exclusive (the metric must be less than the threshold plus the upper bound). Otherwise, it is inclusive (the metric must be less than or equal to the threshold plus the upper bound). A null value indicates positive infinity.</p> <p>The upper bound must be greater than the lower bound.</p>', ], ], 'MinAdjustmentMagnitude' => [ 'base' => NULL, 'refs' => [ 'StepScalingPolicyConfiguration$MinAdjustmentMagnitude' => '<p>The minimum number to adjust your scalable dimension as a result of a scaling activity. If the adjustment type is <code>PercentChangeInCapacity</code>, the scaling policy changes the scalable dimension of the scalable target by this amount.</p>', ], ], 'ObjectNotFoundException' => [ 'base' => '<p>The specified object could not be found. For any <code>Put</code> or <code>Register</code> API operation, which depends on the existence of a scalable target, this exception is thrown if the scalable target with the specified service namespace, resource ID, and scalable dimension does not exist. For any <code>Delete</code> or <code>Deregister</code> API operation, this exception is thrown if the resource that is to be deleted or deregistered cannot be found.</p>', 'refs' => [], ], 'PolicyName' => [ 'base' => NULL, 'refs' => [ 'PutScalingPolicyRequest$PolicyName' => '<p>The name of the scaling policy.</p>', 'ScalingPolicy$PolicyName' => '<p>The name of the scaling policy.</p>', ], ], 'PolicyType' => [ 'base' => NULL, 'refs' => [ 'PutScalingPolicyRequest$PolicyType' => '<p>The policy type. If you are creating a new policy, this parameter is required. If you are updating an existing policy, this parameter is not required.</p>', 'ScalingPolicy$PolicyType' => '<p>The scaling policy type.</p>', ], ], 'PutScalingPolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'PutScalingPolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'RegisterScalableTargetRequest' => [ 'base' => NULL, 'refs' => [], ], 'RegisterScalableTargetResponse' => [ 'base' => NULL, 'refs' => [], ], 'ResourceCapacity' => [ 'base' => NULL, 'refs' => [ 'RegisterScalableTargetRequest$MinCapacity' => '<p>The minimum value for this scalable target to scale in to in response to scaling activities. This parameter is required if you are registering a new scalable target, and it is optional if you are updating an existing one.</p>', 'RegisterScalableTargetRequest$MaxCapacity' => '<p>The maximum value for this scalable target to scale out to in response to scaling activities. This parameter is required if you are registering a new scalable target, and it is optional if you are updating an existing one.</p>', 'ScalableTarget$MinCapacity' => '<p>The minimum value for this scalable target to scale in to in response to scaling activities.</p>', 'ScalableTarget$MaxCapacity' => '<p>The maximum value for this scalable target to scale out to in response to scaling activities.</p>', ], ], 'ResourceId' => [ 'base' => NULL, 'refs' => [ 'Alarm$AlarmName' => '<p>The name of the alarm.</p>', 'Alarm$AlarmARN' => '<p>The Amazon Resource Name (ARN) of the alarm.</p>', 'ScalingActivity$ActivityId' => '<p>The unique identifier string for the scaling activity.</p>', ], ], 'ResourceIdMaxLen1600' => [ 'base' => NULL, 'refs' => [ 'DeleteScalingPolicyRequest$PolicyName' => '<p>The name of the scaling policy to delete.</p>', 'DeleteScalingPolicyRequest$ResourceId' => '<p>The unique identifier string for the resource associated with the scaling policy. For Amazon ECS services, this value is the resource type, followed by the cluster name and service name, such as <code>service/default/sample-webapp</code>.</p>', 'DeregisterScalableTargetRequest$ResourceId' => '<p>The unique identifier string for the resource associated with the scalable target. For Amazon ECS services, this value is the resource type, followed by the cluster name and service name, such as <code>service/default/sample-webapp</code>.</p>', 'DescribeScalingActivitiesRequest$ResourceId' => '<p>The unique identifier string for the resource associated with the scaling activity. For Amazon ECS services, this value is the resource type, followed by the cluster name and service name, such as <code>service/default/sample-webapp</code>. If you specify a scalable dimension, you must also specify a resource ID.</p>', 'DescribeScalingPoliciesRequest$ResourceId' => '<p>The unique resource identifier string of the scalable target that the scaling policy is associated with. For Amazon ECS services, this value is the resource type, followed by the cluster name and service name, such as <code>service/default/sample-webapp</code>. If you specify a scalable dimension, you must also specify a resource ID.</p>', 'PutScalingPolicyRequest$ResourceId' => '<p>The unique resource identifier string for the scalable target that this scaling policy applies to. For Amazon ECS services, this value is the resource type, followed by the cluster name and service name, such as <code>service/default/sample-webapp</code>.</p>', 'PutScalingPolicyResponse$PolicyARN' => '<p>The Amazon Resource Name (ARN) of the resulting scaling policy.</p>', 'RegisterScalableTargetRequest$ResourceId' => '<p>The unique identifier string for the resource to associate with the scalable target. For Amazon ECS services, this value is the resource type, followed by the cluster name and service name, such as <code>service/default/sample-webapp</code>.</p>', 'RegisterScalableTargetRequest$RoleARN' => '<p>The ARN of the IAM role that allows Application Auto Scaling to modify your scalable target on your behalf. This parameter is required if you are registering a new scalable target, and it is optional if you are updating an existing one.</p>', 'ResourceIdsMaxLen1600$member' => NULL, 'ScalableTarget$ResourceId' => '<p>The unique identifier string for the resource associated with the scalable target. For Amazon ECS services, this value is the resource type, followed by the cluster name and service name, such as <code>service/default/sample-webapp</code>.</p>', 'ScalableTarget$RoleARN' => '<p>The ARN of the IAM role that allows Application Auto Scaling to modify your scalable target on your behalf.</p>', 'ScalingActivity$ResourceId' => '<p>The unique identifier string for the resource associated with the scaling activity. For Amazon ECS services, this value is the resource type, followed by the cluster name and service name, such as <code>service/default/sample-webapp</code>.</p>', 'ScalingPolicy$PolicyARN' => '<p>The Amazon Resource Name (ARN) of the scaling policy.</p>', 'ScalingPolicy$ResourceId' => '<p>The unique identifier string for the resource associated with the scaling policy. For Amazon ECS services, this value is the resource type, followed by the cluster name and service name, such as <code>service/default/sample-webapp</code>.</p>', ], ], 'ResourceIdsMaxLen1600' => [ 'base' => NULL, 'refs' => [ 'DescribeScalableTargetsRequest$ResourceIds' => '<p>The unique identifier string for the resource associated with the scalable target. For Amazon ECS services, this value is the resource type, followed by the cluster name and service name, such as <code>service/default/sample-webapp</code>. If you specify a scalable dimension, you must also specify a resource ID.</p>', 'DescribeScalingPoliciesRequest$PolicyNames' => '<p>The names of the scaling policies to describe.</p>', ], ], 'ScalableDimension' => [ 'base' => NULL, 'refs' => [ 'DeleteScalingPolicyRequest$ScalableDimension' => '<p>The scalable dimension associated with the scaling policy. The scalable dimension contains the service namespace, resource type, and scaling property, such as <code>ecs:service:DesiredCount</code> for the desired task count of an Amazon ECS service.</p>', 'DeregisterScalableTargetRequest$ScalableDimension' => '<p>The scalable dimension associated with the scalable target. The scalable dimension contains the service namespace, resource type, and scaling property, such as <code>ecs:service:DesiredCount</code> for the desired task count of an Amazon ECS service.</p>', 'DescribeScalableTargetsRequest$ScalableDimension' => '<p>The scalable dimension associated with the scalable target. The scalable dimension contains the service namespace, resource type, and scaling property, such as <code>ecs:service:DesiredCount</code> for the desired task count of an Amazon ECS service. If you specify a scalable dimension, you must also specify a resource ID.</p>', 'DescribeScalingActivitiesRequest$ScalableDimension' => '<p>The scalable dimension associated with the scaling activity. The scalable dimension contains the service namespace, resource type, and scaling property, such as <code>ecs:service:DesiredCount</code> for the desired task count of an Amazon ECS service. If you specify a scalable dimension, you must also specify a resource ID.</p>', 'DescribeScalingPoliciesRequest$ScalableDimension' => '<p>The scalable dimension of the scalable target that the scaling policy is associated with. The scalable dimension contains the service namespace, resource type, and scaling property, such as <code>ecs:service:DesiredCount</code> for the desired task count of an Amazon ECS service. If you specify a scalable dimension, you must also specify a resource ID.</p>', 'PutScalingPolicyRequest$ScalableDimension' => '<p>The scalable dimension of the scalable target that this scaling policy applies to. The scalable dimension contains the service namespace, resource type, and scaling property, such as <code>ecs:service:DesiredCount</code> for the desired task count of an Amazon ECS service.</p>', 'RegisterScalableTargetRequest$ScalableDimension' => '<p>The scalable dimension associated with the scalable target. The scalable dimension contains the service namespace, resource type, and scaling property, such as <code>ecs:service:DesiredCount</code> for the desired task count of an Amazon ECS service.</p>', 'ScalableTarget$ScalableDimension' => '<p>The scalable dimension associated with the scalable target. The scalable dimension contains the service namespace, resource type, and scaling property, such as <code>ecs:service:DesiredCount</code> for the desired task count of an Amazon ECS service.</p>', 'ScalingActivity$ScalableDimension' => '<p>The scalable dimension associated with the scaling activity. The scalable dimension contains the service namespace, resource type, and scaling property, such as <code>ecs:service:DesiredCount</code> for the desired task count of an Amazon ECS service.</p>', 'ScalingPolicy$ScalableDimension' => '<p>The scalable dimension associated with the scaling policy. The scalable dimension contains the service namespace, resource type, and scaling property, such as <code>ecs:service:DesiredCount</code> for the desired task count of an Amazon ECS service.</p>', ], ], 'ScalableTarget' => [ 'base' => '<p>An object representing a scalable target.</p>', 'refs' => [ 'ScalableTargets$member' => NULL, ], ], 'ScalableTargets' => [ 'base' => NULL, 'refs' => [ 'DescribeScalableTargetsResponse$ScalableTargets' => '<p>The list of scalable targets that matches the request parameters.</p>', ], ], 'ScalingActivities' => [ 'base' => NULL, 'refs' => [ 'DescribeScalingActivitiesResponse$ScalingActivities' => '<p>A list of scaling activity objects.</p>', ], ], 'ScalingActivity' => [ 'base' => '<p>An object representing a scaling activity.</p>', 'refs' => [ 'ScalingActivities$member' => NULL, ], ], 'ScalingActivityStatusCode' => [ 'base' => NULL, 'refs' => [ 'ScalingActivity$StatusCode' => '<p>Indicates the status of the scaling activity.</p>', ], ], 'ScalingAdjustment' => [ 'base' => NULL, 'refs' => [ 'StepAdjustment$ScalingAdjustment' => '<p>The amount by which to scale, based on the specified adjustment type. A positive value adds to the current scalable dimension while a negative number removes from the current scalable dimension.</p>', ], ], 'ScalingPolicies' => [ 'base' => NULL, 'refs' => [ 'DescribeScalingPoliciesResponse$ScalingPolicies' => '<p>A list of scaling policy objects.</p>', ], ], 'ScalingPolicy' => [ 'base' => '<p>An object representing a scaling policy.</p>', 'refs' => [ 'ScalingPolicies$member' => NULL, ], ], 'ServiceNamespace' => [ 'base' => NULL, 'refs' => [ 'DeleteScalingPolicyRequest$ServiceNamespace' => '<p>The namespace for the AWS service that the scaling policy is associated with. For more information, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#genref-aws-service-namespaces">AWS Service Namespaces</a> in the Amazon Web Services General Reference.</p>', 'DeregisterScalableTargetRequest$ServiceNamespace' => '<p>The namespace for the AWS service that the scalable target is associated with. For more information, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#genref-aws-service-namespaces">AWS Service Namespaces</a> in the Amazon Web Services General Reference.</p>', 'DescribeScalableTargetsRequest$ServiceNamespace' => '<p>The namespace for the AWS service that the scalable target is associated with. For more information, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#genref-aws-service-namespaces">AWS Service Namespaces</a> in the Amazon Web Services General Reference.</p>', 'DescribeScalingActivitiesRequest$ServiceNamespace' => '<p>The namespace for the AWS service that the scaling activity is associated with. For more information, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#genref-aws-service-namespaces">AWS Service Namespaces</a> in the Amazon Web Services General Reference.</p>', 'DescribeScalingPoliciesRequest$ServiceNamespace' => '<p>The AWS service namespace of the scalable target that the scaling policy is associated with. For more information, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#genref-aws-service-namespaces">AWS Service Namespaces</a> in the Amazon Web Services General Reference.</p>', 'PutScalingPolicyRequest$ServiceNamespace' => '<p>The AWS service namespace of the scalable target that this scaling policy applies to. For more information, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#genref-aws-service-namespaces">AWS Service Namespaces</a> in the Amazon Web Services General Reference.</p>', 'RegisterScalableTargetRequest$ServiceNamespace' => '<p>The namespace for the AWS service that the scalable target is associated with. For Amazon ECS services, the namespace value is <code>ecs</code>. For more information, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#genref-aws-service-namespaces">AWS Service Namespaces</a> in the Amazon Web Services General Reference.</p>', 'ScalableTarget$ServiceNamespace' => '<p>The namespace for the AWS service that the scalable target is associated with. For more information, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#genref-aws-service-namespaces">AWS Service Namespaces</a> in the Amazon Web Services General Reference.</p>', 'ScalingActivity$ServiceNamespace' => '<p>The namespace for the AWS service that the scaling activity is associated with. For more information, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#genref-aws-service-namespaces">AWS Service Namespaces</a> in the Amazon Web Services General Reference.</p>', 'ScalingPolicy$ServiceNamespace' => '<p>The namespace for the AWS service that the scaling policy is associated with. For more information, see <a href="http://docs.aws.amazon.com/general/latest/gr/aws-arns-and-namespaces.html#genref-aws-service-namespaces">AWS Service Namespaces</a> in the Amazon Web Services General Reference.</p>', ], ], 'StepAdjustment' => [ 'base' => '<p>An object representing a step adjustment for a <a>StepScalingPolicyConfiguration</a>. Describes an adjustment based on the difference between the value of the aggregated CloudWatch metric and the breach threshold that you\'ve defined for the alarm. </p> <p>For the following examples, suppose that you have an alarm with a breach threshold of 50:</p> <ul> <li> <p>If you want the adjustment to be triggered when the metric is greater than or equal to 50 and less than 60, specify a lower bound of 0 and an upper bound of 10.</p> </li> <li> <p>If you want the adjustment to be triggered when the metric is greater than 40 and less than or equal to 50, specify a lower bound of -10 and an upper bound of 0.</p> </li> </ul> <p>There are a few rules for the step adjustments for your step policy:</p> <ul> <li> <p>The ranges of your step adjustments can\'t overlap or have a gap.</p> </li> <li> <p>At most one step adjustment can have a null lower bound. If one step adjustment has a negative lower bound, then there must be a step adjustment with a null lower bound.</p> </li> <li> <p>At most one step adjustment can have a null upper bound. If one step adjustment has a positive upper bound, then there must be a step adjustment with a null upper bound.</p> </li> <li> <p>The upper and lower bound can\'t be null in the same step adjustment.</p> </li> </ul>', 'refs' => [ 'StepAdjustments$member' => NULL, ], ], 'StepAdjustments' => [ 'base' => NULL, 'refs' => [ 'StepScalingPolicyConfiguration$StepAdjustments' => '<p>A set of adjustments that enable you to scale based on the size of the alarm breach.</p>', ], ], 'StepScalingPolicyConfiguration' => [ 'base' => '<p>An object representing a step scaling policy configuration.</p>', 'refs' => [ 'PutScalingPolicyRequest$StepScalingPolicyConfiguration' => '<p>The configuration for the step scaling policy. If you are creating a new policy, this parameter is required. If you are updating an existing policy, this parameter is not required. For more information, see <a>StepScalingPolicyConfiguration</a> and <a>StepAdjustment</a>.</p>', 'ScalingPolicy$StepScalingPolicyConfiguration' => '<p>The configuration for the step scaling policy.</p>', ], ], 'TimestampType' => [ 'base' => NULL, 'refs' => [ 'ScalableTarget$CreationTime' => '<p>The Unix timestamp for when the scalable target was created.</p>', 'ScalingActivity$StartTime' => '<p>The Unix timestamp for when the scaling activity began.</p>', 'ScalingActivity$EndTime' => '<p>The Unix timestamp for when the scaling activity ended.</p>', 'ScalingPolicy$CreationTime' => '<p>The Unix timestamp for when the scaling policy was created.</p>', ], ], 'ValidationException' => [ 'base' => '<p>An exception was thrown for a validation issue. Review the available parameters for the API request.</p>', 'refs' => [], ], 'XmlString' => [ 'base' => NULL, 'refs' => [ 'DescribeScalableTargetsRequest$NextToken' => '<p>The <code>NextToken</code> value returned from a previous paginated <code>DescribeScalableTargets</code> request. Pagination continues from the end of the previous results that returned the <code>NextToken</code> value. This value is <code>null</code> when there are no more results to return.</p>', 'DescribeScalableTargetsResponse$NextToken' => '<p>The <code>NextToken</code> value to include in a future <code>DescribeScalableTargets</code> request. When the results of a <code>DescribeScalableTargets</code> request exceed <code>MaxResults</code>, this value can be used to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'DescribeScalingActivitiesRequest$NextToken' => '<p>The <code>NextToken</code> value returned from a previous paginated <code>DescribeScalingActivities</code> request. Pagination continues from the end of the previous results that returned the <code>NextToken</code> value. This value is <code>null</code> when there are no more results to return.</p>', 'DescribeScalingActivitiesResponse$NextToken' => '<p>The <code>NextToken</code> value to include in a future <code>DescribeScalingActivities</code> request. When the results of a <code>DescribeScalingActivities</code> request exceed <code>MaxResults</code>, this value can be used to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'DescribeScalingPoliciesRequest$NextToken' => '<p>The <code>NextToken</code> value returned from a previous paginated <code>DescribeScalingPolicies</code> request. Pagination continues from the end of the previous results that returned the <code>NextToken</code> value. This value is <code>null</code> when there are no more results to return.</p>', 'DescribeScalingPoliciesResponse$NextToken' => '<p>The <code>NextToken</code> value to include in a future <code>DescribeScalingPolicies</code> request. When the results of a <code>DescribeScalingPolicies</code> request exceed <code>MaxResults</code>, this value can be used to retrieve the next page of results. This value is <code>null</code> when there are no more results to return.</p>', 'ScalingActivity$Description' => '<p>A simple description of what action the scaling activity intends to accomplish.</p>', 'ScalingActivity$Cause' => '<p>A simple description of what caused the scaling activity to happen.</p>', 'ScalingActivity$StatusMessage' => '<p>A simple message about the current status of the scaling activity.</p>', 'ScalingActivity$Details' => '<p>The details about the scaling activity.</p>', ], ], ],];
