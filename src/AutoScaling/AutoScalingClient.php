<?php
namespace Aws\AutoScaling;

use Aws\AwsClient;

/**
 * Auto Scaling client.
 *
 * @method \Aws\Result attachInstances(array $args = [])
 * @method \Aws\Result attachLoadBalancers(array $args = [])
 * @method \Aws\Result completeLifecycleAction(array $args = [])
 * @method \Aws\Result createAutoScalingGroup(array $args = [])
 * @method \Aws\Result createLaunchConfiguration(array $args = [])
 * @method \Aws\Result createOrUpdateTags(array $args = [])
 * @method \Aws\Result deleteAutoScalingGroup(array $args = [])
 * @method \Aws\Result deleteLaunchConfiguration(array $args = [])
 * @method \Aws\Result deleteLifecycleHook(array $args = [])
 * @method \Aws\Result deleteNotificationConfiguration(array $args = [])
 * @method \Aws\Result deletePolicy(array $args = [])
 * @method \Aws\Result deleteScheduledAction(array $args = [])
 * @method \Aws\Result deleteTags(array $args = [])
 * @method \Aws\Result describeAccountLimits(array $args = [])
 * @method \Aws\Result describeAdjustmentTypes(array $args = [])
 * @method \Aws\Result describeAutoScalingGroups(array $args = [])
 * @method \Aws\Result describeAutoScalingInstances(array $args = [])
 * @method \Aws\Result describeAutoScalingNotificationTypes(array $args = [])
 * @method \Aws\Result describeLaunchConfigurations(array $args = [])
 * @method \Aws\Result describeLifecycleHookTypes(array $args = [])
 * @method \Aws\Result describeLifecycleHooks(array $args = [])
 * @method \Aws\Result describeLoadBalancers(array $args = [])
 * @method \Aws\Result describeMetricCollectionTypes(array $args = [])
 * @method \Aws\Result describeNotificationConfigurations(array $args = [])
 * @method \Aws\Result describePolicies(array $args = [])
 * @method \Aws\Result describeScalingActivities(array $args = [])
 * @method \Aws\Result describeScalingProcessTypes(array $args = [])
 * @method \Aws\Result describeScheduledActions(array $args = [])
 * @method \Aws\Result describeTags(array $args = [])
 * @method \Aws\Result describeTerminationPolicyTypes(array $args = [])
 * @method \Aws\Result detachInstances(array $args = [])
 * @method \Aws\Result detachLoadBalancers(array $args = [])
 * @method \Aws\Result disableMetricsCollection(array $args = [])
 * @method \Aws\Result enableMetricsCollection(array $args = [])
 * @method \Aws\Result enterStandby(array $args = [])
 * @method \Aws\Result executePolicy(array $args = [])
 * @method \Aws\Result exitStandby(array $args = [])
 * @method \Aws\Result putLifecycleHook(array $args = [])
 * @method \Aws\Result putNotificationConfiguration(array $args = [])
 * @method \Aws\Result putScalingPolicy(array $args = [])
 * @method \Aws\Result putScheduledUpdateGroupAction(array $args = [])
 * @method \Aws\Result recordLifecycleActionHeartbeat(array $args = [])
 * @method \Aws\Result resumeProcesses(array $args = [])
 * @method \Aws\Result setDesiredCapacity(array $args = [])
 * @method \Aws\Result setInstanceHealth(array $args = [])
 * @method \Aws\Result suspendProcesses(array $args = [])
 * @method \Aws\Result terminateInstanceInAutoScalingGroup(array $args = [])
 * @method \Aws\Result updateAutoScalingGroup(array $args = [])
 */
class AutoScalingClient extends AwsClient {}
