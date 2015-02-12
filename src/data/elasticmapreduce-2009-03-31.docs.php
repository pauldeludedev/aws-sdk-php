<?php return [
  'operations' => [
    'AddInstanceGroups' => '<p>AddInstanceGroups adds an instance group to a running cluster.</p>',
    'AddJobFlowSteps' => '<p> AddJobFlowSteps adds new steps to a running job flow. A maximum of 256 steps are allowed in each job flow. </p> <p>If your job flow is long-running (such as a Hive data warehouse] or complex, you may require more than 256 steps to process your data. You can bypass the 256-step limitation in various ways, including using the SSH shell to connect to the master node and submitting queries directly to the software running on the master node, such as Hive and Hadoop. For more information on how to do this, go to <a href="http://docs.aws.amazon.com/ElasticMapReduce/latest/DeveloperGuide/AddMoreThan256Steps.html">Add More than 256 Steps to a Job Flow</a> in the <i>Amazon Elastic MapReduce Developer\'s Guide</i>.</p> <p> A step specifies the location of a JAR file stored either on the master node of the job flow or in Amazon S3. Each step is performed by the main function of the main class of the JAR file. The main class can be specified either in the manifest of the JAR or by using the MainFunction parameter of the step. </p> <p> Elastic MapReduce executes each step in the order listed. For a step to be considered complete, the main function must exit with a zero exit code and all Hadoop jobs started while the step was running must have completed and run successfully. </p> <p> You can only add steps to a job flow that is in one of the following states: STARTING, BOOTSTRAPPING, RUNNING, or WAITING.</p>',
    'AddTags' => '<p>Adds tags to an Amazon EMR resource. Tags make it easier to associate clusters in various ways, such as grouping clusters to track your Amazon EMR resource allocation costs. For more information, see <a href="http://docs.aws.amazon.com/ElasticMapReduce/latest/DeveloperGuide/emr-plan-tags.html">Tagging Amazon EMR Resources</a>. </p>',
    'DescribeCluster' => '<p>Provides cluster-level details including status, hardware and software configuration, VPC settings, and so on. For information about the cluster steps, see <a>ListSteps</a>.</p>',
    'DescribeJobFlows' => '<p> This API is deprecated and will eventually be removed. We recommend you use <a>ListClusters</a>, <a>DescribeCluster</a>, <a>ListSteps</a>, <a>ListInstanceGroups</a> and <a>ListBootstrapActions</a> instead.</p> <p> DescribeJobFlows returns a list of job flows that match all of the supplied parameters. The parameters can include a list of job flow IDs, job flow states, and restrictions on job flow creation date and time.</p> <p> Regardless of supplied parameters, only job flows created within the last two months are returned.</p> <p> If no parameters are supplied, then job flows matching either of the following criteria are returned:</p> <ul> <li>Job flows created and completed in the last two weeks</li> <li> Job flows created within the last two months that are in one of the following states: <code>RUNNING</code>, <code>WAITING</code>, <code>SHUTTING_DOWN</code>, <code>STARTING</code> </li> </ul> <p> Amazon Elastic MapReduce can return a maximum of 512 job flow descriptions. </p>',
    'DescribeStep' => '<p>Provides more detail about the cluster step.</p>',
    'ListBootstrapActions' => '<p>Provides information about the bootstrap actions associated with a cluster.</p>',
    'ListClusters' => '<p>Provides the status of all clusters visible to this AWS account. Allows you to filter the list of clusters based on certain criteria; for example, filtering by cluster creation date and time or by status. This call returns a maximum of 50 clusters per call, but returns a marker to track the paging of the cluster list across multiple ListClusters calls. </p>',
    'ListInstanceGroups' => '<p>Provides all available details about the instance groups in a cluster.</p>',
    'ListInstances' => '<p>Provides information about the cluster instances that Amazon EMR provisions on behalf of a user when it creates the cluster. For example, this operation indicates when the EC2 instances reach the Ready state, when instances become available to Amazon EMR to use for jobs, and the IP addresses for cluster instances, etc. </p>',
    'ListSteps' => '<p>Provides a list of steps for the cluster. </p>',
    'ModifyInstanceGroups' => '<p>ModifyInstanceGroups modifies the number of nodes and configuration settings of an instance group. The input parameters include the new target instance count for the group and the instance group ID. The call will either succeed or fail atomically.</p>',
    'RemoveTags' => '<p>Removes tags from an Amazon EMR resource. Tags make it easier to associate clusters in various ways, such as grouping clusters to track your Amazon EMR resource allocation costs. For more information, see <a href="http://docs.aws.amazon.com/ElasticMapReduce/latest/DeveloperGuide/emr-plan-tags.html">Tagging Amazon EMR Resources</a>. </p> <p>The following example removes the stack tag with value Prod from a cluster:</p>',
    'RunJobFlow' => '<p> RunJobFlow creates and starts running a new job flow. The job flow will run the steps specified. Once the job flow completes, the cluster is stopped and the HDFS partition is lost. To prevent loss of data, configure the last step of the job flow to store results in Amazon S3. If the <a>JobFlowInstancesConfig</a> <code>KeepJobFlowAliveWhenNoSteps</code> parameter is set to <code>TRUE</code>, the job flow will transition to the WAITING state rather than shutting down once the steps have completed. </p> <p>For additional protection, you can set the <a>JobFlowInstancesConfig</a> <code>TerminationProtected</code> parameter to <code>TRUE</code> to lock the job flow and prevent it from being terminated by API call, user intervention, or in the event of a job flow error.</p> <p>A maximum of 256 steps are allowed in each job flow.</p> <p>If your job flow is long-running (such as a Hive data warehouse] or complex, you may require more than 256 steps to process your data. You can bypass the 256-step limitation in various ways, including using the SSH shell to connect to the master node and submitting queries directly to the software running on the master node, such as Hive and Hadoop. For more information on how to do this, go to <a href="http://docs.aws.amazon.com/ElasticMapReduce/latest/DeveloperGuide/AddMoreThan256Steps.html">Add More than 256 Steps to a Job Flow</a> in the <i>Amazon Elastic MapReduce Developer\'s Guide</i>.</p> <p>For long running job flows, we recommend that you periodically store your results.</p>',
    'SetTerminationProtection' => '<p> SetTerminationProtection locks a job flow so the Amazon EC2 instances in the cluster cannot be terminated by user intervention, an API call, or in the event of a job-flow error. The cluster still terminates upon successful completion of the job flow. Calling SetTerminationProtection on a job flow is analogous to calling the Amazon EC2 DisableAPITermination API on all of the EC2 instances in a cluster.</p> <p> SetTerminationProtection is used to prevent accidental termination of a job flow and to ensure that in the event of an error, the instances will persist so you can recover any data stored in their ephemeral instance storage.</p> <p> To terminate a job flow that has been locked by setting SetTerminationProtection to <code>true</code>, you must first unlock the job flow by a subsequent call to SetTerminationProtection in which you set the value to <code>false</code>. </p> <p> For more information, go to <a href="http://docs.aws.amazon.com/ElasticMapReduce/latest/DeveloperGuide/UsingEMR_TerminationProtection.html">Protecting a Job Flow from Termination</a> in the <i>Amazon Elastic MapReduce Developer\'s Guide.</i></p>',
    'SetVisibleToAllUsers' => '<p>Sets whether all AWS Identity and Access Management (IAM] users under your account can access the specified job flows. This action works on running job flows. You can also set the visibility of a job flow when you launch it using the <code>VisibleToAllUsers</code> parameter of <a>RunJobFlow</a>. The SetVisibleToAllUsers action can be called only by an IAM user who created the job flow or the AWS account that owns the job flow.</p>',
    'TerminateJobFlows' => '<p> TerminateJobFlows shuts a list of job flows down. When a job flow is shut down, any step not yet completed is canceled and the EC2 instances on which the job flow is running are stopped. Any log files not already saved are uploaded to Amazon S3 if a LogUri was specified when the job flow was created. </p> <p> The maximum number of JobFlows allowed is 10. The call to TerminateJobFlows is asynchronous. Depending on the configuration of the job flow, it may take up to 5-20 minutes for the job flow to completely terminate and release allocated resources, such as Amazon EC2 instances. </p>',
  ],
  'service' => '<p>Amazon Elastic MapReduce (Amazon EMR] is a web service that makes it easy to process large amounts of data efficiently. Amazon EMR uses Hadoop processing combined with several AWS products to do tasks such as web indexing, data mining, log file analysis, machine learning, scientific simulation, and data warehousing.</p>',
  'shapes' => [
    'ActionOnFailure' => [
      'base' => NULL,
      'refs' => [
        'Step$ActionOnFailure' => '<p>This specifies what action to take when the cluster step fails. Possible values are TERMINATE_CLUSTER, CANCEL_AND_WAIT, and CONTINUE. </p>',
        'StepConfig$ActionOnFailure' => '<p>The action to take if the job flow step fails.</p>',
        'StepSummary$ActionOnFailure' => '<p>This specifies what action to take when the cluster step fails. Possible values are TERMINATE_CLUSTER, CANCEL_AND_WAIT, and CONTINUE. </p>',
      ],
    ],
    'AddInstanceGroupsInput' => [
      'base' => '<p>Input to an AddInstanceGroups call.</p>',
      'refs' => [],
    ],
    'AddInstanceGroupsOutput' => [
      'base' => '<p>Output from an AddInstanceGroups call.</p>',
      'refs' => [],
    ],
    'AddJobFlowStepsInput' => [
      'base' => '<p> The input argument to the <a>AddJobFlowSteps</a> operation. </p>',
      'refs' => [],
    ],
    'AddJobFlowStepsOutput' => [
      'base' => '<p> The output for the <a>AddJobFlowSteps</a> operation. </p>',
      'refs' => [],
    ],
    'AddTagsInput' => [
      'base' => '<p>This input identifies a cluster and a list of tags to attach. </p>',
      'refs' => [],
    ],
    'AddTagsOutput' => [
      'base' => '<p>This output indicates the result of adding tags to a resource. </p>',
      'refs' => [],
    ],
    'Application' => [
      'base' => '<p>An application is any Amazon or third-party software that you can add to the cluster. This structure contains a list of strings that indicates the software to use with the cluster and accepts a user argument list. Amazon EMR accepts and forwards the argument list to the corresponding installation script as bootstrap action argument. For more information, see <a href="http://docs.aws.amazon.com/ElasticMapReduce/latest/DeveloperGuide/emr-mapr.html">Launch a Job Flow on the MapR Distribution for Hadoop</a>. Currently supported values are:</p> <ul> <li>"mapr-m3" - launch the job flow using MapR M3 Edition.</li> <li>"mapr-m5" - launch the job flow using MapR M5 Edition.</li> <li>"mapr" with the user arguments specifying "--edition,m3" or "--edition,m5" - launch the job flow using MapR M3 or M5 Edition, respectively.</li> </ul>',
      'refs' => [
        'ApplicationList$member' => NULL,
      ],
    ],
    'ApplicationList' => [
      'base' => NULL,
      'refs' => [
        'Cluster$Applications' => '<p>The applications installed on this cluster.</p>',
      ],
    ],
    'Boolean' => [
      'base' => NULL,
      'refs' => [
        'Cluster$AutoTerminate' => '<p>Specifies whether the cluster should terminate after completing all steps.</p>',
        'Cluster$TerminationProtected' => '<p>Indicates whether Amazon EMR will lock the cluster to prevent the EC2 instances from being terminated by an API call or user intervention, or in the event of a cluster error.</p>',
        'Cluster$VisibleToAllUsers' => '<p>Indicates whether the job flow is visible to all IAM users of the AWS account associated with the job flow. If this value is set to <code>true</code>, all IAM users of that AWS account can view and manage the job flow if they have the proper policy permissions set. If this value is <code>false</code>, only the IAM user that created the cluster can view and manage it. This value can be changed using the <a>SetVisibleToAllUsers</a> action.</p>',
        'JobFlowDetail$VisibleToAllUsers' => '<p>Specifies whether the job flow is visible to all IAM users of the AWS account associated with the job flow. If this value is set to <code>true</code>, all IAM users of that AWS account can view and (if they have the proper policy permissions set] manage the job flow. If it is set to <code>false</code>, only the IAM user that created the job flow can view and manage it. This value can be changed using the <a>SetVisibleToAllUsers</a> action.</p>',
        'JobFlowInstancesConfig$KeepJobFlowAliveWhenNoSteps' => '<p>Specifies whether the job flow should terminate after completing all steps.</p>',
        'JobFlowInstancesConfig$TerminationProtected' => '<p>Specifies whether to lock the job flow to prevent the Amazon EC2 instances from being terminated by API call, user intervention, or in the event of a job flow error.</p>',
        'JobFlowInstancesDetail$KeepJobFlowAliveWhenNoSteps' => '<p>Specifies whether the job flow should terminate after completing all steps.</p>',
        'JobFlowInstancesDetail$TerminationProtected' => '<p>Specifies whether the Amazon EC2 instances in the cluster are protected from termination by API calls, user intervention, or in the event of a job flow error. </p>',
        'RunJobFlowInput$VisibleToAllUsers' => '<p>Whether the job flow is visible to all IAM users of the AWS account associated with the job flow. If this value is set to <code>true</code>, all IAM users of that AWS account can view and (if they have the proper policy permissions set] manage the job flow. If it is set to <code>false</code>, only the IAM user that created the job flow can view and manage it.</p>',
        'SetTerminationProtectionInput$TerminationProtected' => '<p> A Boolean that indicates whether to protect the job flow and prevent the Amazon EC2 instances in the cluster from shutting down due to API calls, user intervention, or job-flow error. </p>',
        'SetVisibleToAllUsersInput$VisibleToAllUsers' => '<p>Whether the specified job flows are visible to all IAM users of the AWS account associated with the job flow. If this value is set to True, all IAM users of that AWS account can view and, if they have the proper IAM policy permissions set, manage the job flows. If it is set to False, only the IAM user that created a job flow can view and manage it.</p>',
      ],
    ],
    'BootstrapActionConfig' => [
      'base' => '<p>Configuration of a bootstrap action.</p>',
      'refs' => [
        'BootstrapActionConfigList$member' => NULL,
        'BootstrapActionDetail$BootstrapActionConfig' => '<p>A description of the bootstrap action.</p>',
      ],
    ],
    'BootstrapActionConfigList' => [
      'base' => NULL,
      'refs' => [
        'RunJobFlowInput$BootstrapActions' => '<p> A list of bootstrap actions that will be run before Hadoop is started on the cluster nodes. </p>',
      ],
    ],
    'BootstrapActionDetail' => [
      'base' => '<p>Reports the configuration of a bootstrap action in a job flow.</p>',
      'refs' => [
        'BootstrapActionDetailList$member' => NULL,
      ],
    ],
    'BootstrapActionDetailList' => [
      'base' => NULL,
      'refs' => [
        'JobFlowDetail$BootstrapActions' => '<p>A list of the bootstrap actions run by the job flow.</p>',
      ],
    ],
    'Cluster' => [
      'base' => '<p>The detailed description of the cluster.</p>',
      'refs' => [
        'DescribeClusterOutput$Cluster' => '<p>This output contains the details for the requested cluster.</p>',
      ],
    ],
    'ClusterId' => [
      'base' => NULL,
      'refs' => [
        'Cluster$Id' => '<p>The unique identifier for the cluster.</p>',
        'ClusterSummary$Id' => '<p>The unique identifier for the cluster.</p>',
        'DescribeClusterInput$ClusterId' => '<p>The identifier of the cluster to describe.</p>',
        'DescribeStepInput$ClusterId' => '<p>The identifier of the cluster with steps to describe.</p>',
        'ListBootstrapActionsInput$ClusterId' => '<p>The cluster identifier for the bootstrap actions to list .</p>',
        'ListInstanceGroupsInput$ClusterId' => '<p>The identifier of the cluster for which to list the instance groups.</p>',
        'ListInstancesInput$ClusterId' => '<p>The identifier of the cluster for which to list the instances.</p>',
        'ListStepsInput$ClusterId' => '<p>The identifier of the cluster for which to list the steps.</p>',
      ],
    ],
    'ClusterState' => [
      'base' => NULL,
      'refs' => [
        'ClusterStateList$member' => NULL,
        'ClusterStatus$State' => '<p>The current state of the cluster.</p>',
      ],
    ],
    'ClusterStateChangeReason' => [
      'base' => '<p>The reason that the cluster changed to its current state.</p>',
      'refs' => [
        'ClusterStatus$StateChangeReason' => '<p>The reason for the cluster status change.</p>',
      ],
    ],
    'ClusterStateChangeReasonCode' => [
      'base' => NULL,
      'refs' => [
        'ClusterStateChangeReason$Code' => '<p>The programmatic code for the state change reason.</p>',
      ],
    ],
    'ClusterStateList' => [
      'base' => NULL,
      'refs' => [
        'ListClustersInput$ClusterStates' => '<p>The cluster state filters to apply when listing clusters. </p>',
      ],
    ],
    'ClusterStatus' => [
      'base' => '<p>The detailed status of the cluster.</p>',
      'refs' => [
        'Cluster$Status' => '<p>The current status details about the cluster.</p>',
        'ClusterSummary$Status' => '<p>The details about the current status of the cluster.</p>',
      ],
    ],
    'ClusterSummary' => [
      'base' => '<p>The summary description of the cluster.</p>',
      'refs' => [
        'ClusterSummaryList$member' => NULL,
      ],
    ],
    'ClusterSummaryList' => [
      'base' => NULL,
      'refs' => [
        'ListClustersOutput$Clusters' => '<p>The list of clusters for the account based on the given filters. </p>',
      ],
    ],
    'ClusterTimeline' => [
      'base' => '<p>Represents the timeline of the cluster\'s lifecycle.</p>',
      'refs' => [
        'ClusterStatus$Timeline' => '<p>A timeline that represents the status of a cluster over the lifetime of the cluster.</p>',
      ],
    ],
    'Command' => [
      'base' => '<p>An entity describing an executable that runs on a cluster.</p>',
      'refs' => [
        'CommandList$member' => NULL,
      ],
    ],
    'CommandList' => [
      'base' => NULL,
      'refs' => [
        'ListBootstrapActionsOutput$BootstrapActions' => '<p>The bootstrap actions associated with the cluster .</p>',
      ],
    ],
    'Date' => [
      'base' => NULL,
      'refs' => [
        'ClusterTimeline$CreationDateTime' => '<p>The creation date and time of the cluster.</p>',
        'ClusterTimeline$ReadyDateTime' => '<p>The date and time when the cluster was ready to execute steps.</p>',
        'ClusterTimeline$EndDateTime' => '<p>The date and time when the cluster was terminated.</p>',
        'DescribeJobFlowsInput$CreatedAfter' => '<p>Return only job flows created after this date and time.</p>',
        'DescribeJobFlowsInput$CreatedBefore' => '<p>Return only job flows created before this date and time.</p>',
        'InstanceGroupDetail$CreationDateTime' => '<p>The date/time the instance group was created. </p>',
        'InstanceGroupDetail$StartDateTime' => '<p>The date/time the instance group was started.</p>',
        'InstanceGroupDetail$ReadyDateTime' => '<p>The date/time the instance group was available to the cluster. </p>',
        'InstanceGroupDetail$EndDateTime' => '<p>The date/time the instance group was terminated.</p>',
        'InstanceGroupTimeline$CreationDateTime' => '<p>The creation date and time of the instance group.</p>',
        'InstanceGroupTimeline$ReadyDateTime' => '<p>The date and time when the instance group became ready to perform tasks.</p>',
        'InstanceGroupTimeline$EndDateTime' => '<p>The date and time when the instance group terminated.</p>',
        'InstanceTimeline$CreationDateTime' => '<p>The creation date and time of the instance.</p>',
        'InstanceTimeline$ReadyDateTime' => '<p>The date and time when the instance was ready to perform tasks.</p>',
        'InstanceTimeline$EndDateTime' => '<p>The date and time when the instance was terminated.</p>',
        'JobFlowExecutionStatusDetail$CreationDateTime' => '<p>The creation date and time of the job flow.</p>',
        'JobFlowExecutionStatusDetail$StartDateTime' => '<p>The start date and time of the job flow.</p>',
        'JobFlowExecutionStatusDetail$ReadyDateTime' => '<p>The date and time when the job flow was ready to start running bootstrap actions.</p>',
        'JobFlowExecutionStatusDetail$EndDateTime' => '<p>The completion date and time of the job flow.</p>',
        'ListClustersInput$CreatedAfter' => '<p>The creation date and time beginning value filter for listing clusters .</p>',
        'ListClustersInput$CreatedBefore' => '<p>The creation date and time end value filter for listing clusters .</p>',
        'StepExecutionStatusDetail$CreationDateTime' => '<p>The creation date and time of the step.</p>',
        'StepExecutionStatusDetail$StartDateTime' => '<p>The start date and time of the step.</p>',
        'StepExecutionStatusDetail$EndDateTime' => '<p>The completion date and time of the step.</p>',
        'StepTimeline$CreationDateTime' => '<p>The date and time when the cluster step was created. </p>',
        'StepTimeline$StartDateTime' => '<p>The date and time when the cluster step execution started. </p>',
        'StepTimeline$EndDateTime' => '<p>The date and time when the cluster step execution completed or failed. </p>',
      ],
    ],
    'DescribeClusterInput' => [
      'base' => '<p>This input determines which cluster to describe.</p>',
      'refs' => [],
    ],
    'DescribeClusterOutput' => [
      'base' => '<p>This output contains the description of the cluster.</p>',
      'refs' => [],
    ],
    'DescribeJobFlowsInput' => [
      'base' => '<p> The input for the <a>DescribeJobFlows</a> operation. </p>',
      'refs' => [],
    ],
    'DescribeJobFlowsOutput' => [
      'base' => '<p> The output for the <a>DescribeJobFlows</a> operation. </p>',
      'refs' => [],
    ],
    'DescribeStepInput' => [
      'base' => '<p>This input determines which step to describe.</p>',
      'refs' => [],
    ],
    'DescribeStepOutput' => [
      'base' => '<p>This output contains the description of the cluster step.</p>',
      'refs' => [],
    ],
    'EC2InstanceIdsToTerminateList' => [
      'base' => NULL,
      'refs' => [
        'InstanceGroupModifyConfig$EC2InstanceIdsToTerminate' => '<p>The EC2 InstanceIds to terminate. For advanced users only. Once you terminate the instances, the instance group will not return to its original requested size.</p>',
      ],
    ],
    'Ec2InstanceAttributes' => [
      'base' => '<p>Provides information about the EC2 instances in a cluster grouped by category. For example, key name, subnet ID, IAM instance profile, and so on.</p>',
      'refs' => [
        'Cluster$Ec2InstanceAttributes' => NULL,
      ],
    ],
    'ErrorCode' => [
      'base' => NULL,
      'refs' => [
        'InvalidRequestException$ErrorCode' => '<p>The error code associated with the exception.</p>',
      ],
    ],
    'ErrorMessage' => [
      'base' => NULL,
      'refs' => [
        'InternalServerException$Message' => '<p>The message associated with the exception.</p>',
        'InvalidRequestException$Message' => '<p>The message associated with the exception.</p>',
      ],
    ],
    'HadoopJarStepConfig' => [
      'base' => '<p>A job flow step consisting of a JAR file whose main function will be executed. The main function submits a job for Hadoop to execute and waits for the job to finish or fail. </p>',
      'refs' => [
        'StepConfig$HadoopJarStep' => '<p>The JAR file used for the job flow step.</p>',
      ],
    ],
    'HadoopStepConfig' => [
      'base' => '<p>A cluster step consisting of a JAR file whose main function will be executed. The main function submits a job for Hadoop to execute and waits for the job to finish or fail. </p>',
      'refs' => [
        'Step$Config' => '<p>The Hadoop job configuration of the cluster step. </p>',
        'StepSummary$Config' => '<p>The Hadoop job configuration of the cluster step. </p>',
      ],
    ],
    'Instance' => [
      'base' => '<p>Represents an EC2 instance provisioned as part of cluster.</p>',
      'refs' => [
        'InstanceList$member' => NULL,
      ],
    ],
    'InstanceGroup' => [
      'base' => '<p>This entity represents an instance group, which is a group of instances that have common purpose. For example, CORE instance group is used for HDFS.</p>',
      'refs' => [
        'InstanceGroupList$member' => NULL,
      ],
    ],
    'InstanceGroupConfig' => [
      'base' => '<p>Configuration defining a new instance group.</p>',
      'refs' => [
        'InstanceGroupConfigList$member' => NULL,
      ],
    ],
    'InstanceGroupConfigList' => [
      'base' => NULL,
      'refs' => [
        'AddInstanceGroupsInput$InstanceGroups' => '<p>Instance Groups to add.</p>',
        'JobFlowInstancesConfig$InstanceGroups' => '<p>Configuration for the job flow\'s instance groups.</p>',
      ],
    ],
    'InstanceGroupDetail' => [
      'base' => '<p>Detailed information about an instance group. </p>',
      'refs' => [
        'InstanceGroupDetailList$member' => NULL,
      ],
    ],
    'InstanceGroupDetailList' => [
      'base' => NULL,
      'refs' => [
        'JobFlowInstancesDetail$InstanceGroups' => '<p>Details about the job flow\'s instance groups. </p>',
      ],
    ],
    'InstanceGroupId' => [
      'base' => NULL,
      'refs' => [
        'InstanceGroup$Id' => '<p>The identifier of the instance group.</p>',
        'ListInstancesInput$InstanceGroupId' => '<p>The identifier of the instance group for which to list the instances.</p>',
      ],
    ],
    'InstanceGroupIdsList' => [
      'base' => NULL,
      'refs' => [
        'AddInstanceGroupsOutput$InstanceGroupIds' => '<p>Instance group IDs of the newly created instance groups.</p>',
      ],
    ],
    'InstanceGroupList' => [
      'base' => NULL,
      'refs' => [
        'ListInstanceGroupsOutput$InstanceGroups' => '<p>The list of instance groups for the cluster and given filters.</p>',
      ],
    ],
    'InstanceGroupModifyConfig' => [
      'base' => '<p>Modify an instance group size.</p>',
      'refs' => [
        'InstanceGroupModifyConfigList$member' => NULL,
      ],
    ],
    'InstanceGroupModifyConfigList' => [
      'base' => NULL,
      'refs' => [
        'ModifyInstanceGroupsInput$InstanceGroups' => '<p>Instance groups to change.</p>',
      ],
    ],
    'InstanceGroupState' => [
      'base' => NULL,
      'refs' => [
        'InstanceGroupDetail$State' => '<p>State of instance group. The following values are deprecated: STARTING, TERMINATED, and FAILED.</p>',
        'InstanceGroupStatus$State' => '<p>The current state of the instance group.</p>',
      ],
    ],
    'InstanceGroupStateChangeReason' => [
      'base' => '<p>The status change reason details for the instance group.</p>',
      'refs' => [
        'InstanceGroupStatus$StateChangeReason' => '<p>The status change reason details for the instance group.</p>',
      ],
    ],
    'InstanceGroupStateChangeReasonCode' => [
      'base' => NULL,
      'refs' => [
        'InstanceGroupStateChangeReason$Code' => '<p>The programmable code for the state change reason.</p>',
      ],
    ],
    'InstanceGroupStatus' => [
      'base' => '<p>The details of the instance group status.</p>',
      'refs' => [
        'InstanceGroup$Status' => '<p>The current status of the instance group.</p>',
      ],
    ],
    'InstanceGroupTimeline' => [
      'base' => '<p>The timeline of the instance group lifecycle.</p>',
      'refs' => [
        'InstanceGroupStatus$Timeline' => '<p>The timeline of the instance group status over time.</p>',
      ],
    ],
    'InstanceGroupType' => [
      'base' => NULL,
      'refs' => [
        'InstanceGroup$InstanceGroupType' => '<p>The type of the instance group. Valid values are MASTER, CORE or TASK.</p>',
        'InstanceGroupTypeList$member' => NULL,
      ],
    ],
    'InstanceGroupTypeList' => [
      'base' => NULL,
      'refs' => [
        'ListInstancesInput$InstanceGroupTypes' => '<p>The type of instance group for which to list the instances.</p>',
      ],
    ],
    'InstanceId' => [
      'base' => NULL,
      'refs' => [
        'EC2InstanceIdsToTerminateList$member' => NULL,
        'Instance$Id' => '<p>The unique identifier for the instance in Amazon EMR.</p>',
        'Instance$Ec2InstanceId' => '<p>The unique identifier of the instance in Amazon EC2.</p>',
      ],
    ],
    'InstanceList' => [
      'base' => NULL,
      'refs' => [
        'ListInstancesOutput$Instances' => '<p>The list of instances for the cluster and given filters.</p>',
      ],
    ],
    'InstanceRoleType' => [
      'base' => NULL,
      'refs' => [
        'InstanceGroupConfig$InstanceRole' => '<p>The role of the instance group in the cluster.</p>',
        'InstanceGroupDetail$InstanceRole' => '<p>Instance group role in the cluster </p>',
      ],
    ],
    'InstanceState' => [
      'base' => NULL,
      'refs' => [
        'InstanceStatus$State' => '<p>The current state of the instance.</p>',
      ],
    ],
    'InstanceStateChangeReason' => [
      'base' => '<p>The details of the status change reason for the instance.</p>',
      'refs' => [
        'InstanceStatus$StateChangeReason' => '<p>The details of the status change reason for the instance.</p>',
      ],
    ],
    'InstanceStateChangeReasonCode' => [
      'base' => NULL,
      'refs' => [
        'InstanceStateChangeReason$Code' => '<p>The programmable code for the state change reason.</p>',
      ],
    ],
    'InstanceStatus' => [
      'base' => '<p>The instance status details.</p>',
      'refs' => [
        'Instance$Status' => '<p>The current status of the instance.</p>',
      ],
    ],
    'InstanceTimeline' => [
      'base' => '<p>The timeline of the instance lifecycle.</p>',
      'refs' => [
        'InstanceStatus$Timeline' => '<p>The timeline of the instance status over time.</p>',
      ],
    ],
    'InstanceType' => [
      'base' => NULL,
      'refs' => [
        'InstanceGroup$InstanceType' => '<p>The EC2 instance type for all instances in the instance group. </p>',
        'InstanceGroupConfig$InstanceType' => '<p>The Amazon EC2 instance type for all instances in the instance group. </p>',
        'InstanceGroupDetail$InstanceType' => '<p>Amazon EC2 Instance type.</p>',
        'JobFlowInstancesConfig$MasterInstanceType' => '<p>The EC2 instance type of the master node.</p>',
        'JobFlowInstancesConfig$SlaveInstanceType' => '<p>The EC2 instance type of the slave nodes.</p>',
        'JobFlowInstancesDetail$MasterInstanceType' => '<p>The Amazon EC2 master node instance type.</p>',
        'JobFlowInstancesDetail$SlaveInstanceType' => '<p>The Amazon EC2 slave node instance type.</p>',
      ],
    ],
    'Integer' => [
      'base' => NULL,
      'refs' => [
        'Cluster$NormalizedInstanceHours' => '<p>An approximation of the cost of the job flow, represented in m1.small/hours. This value is incremented one time for every hour an m1.small instance runs. Larger instances are weighted more, so an EC2 instance that is roughly four times more expensive would result in the normalized instance hours being incremented by four. This result is only an approximation and does not reflect the actual billing rate.</p>',
        'ClusterSummary$NormalizedInstanceHours' => '<p>An approximation of the cost of the job flow, represented in m1.small/hours. This value is incremented one time for every hour an m1.small instance runs. Larger instances are weighted more, so an EC2 instance that is roughly four times more expensive would result in the normalized instance hours being incremented by four. This result is only an approximation and does not reflect the actual billing rate.</p>',
        'InstanceGroup$RequestedInstanceCount' => '<p>The target number of instances for the instance group. </p>',
        'InstanceGroup$RunningInstanceCount' => '<p>The number of instances currently running in this instance group.</p>',
        'InstanceGroupConfig$InstanceCount' => '<p>Target number of instances for the instance group. </p>',
        'InstanceGroupDetail$InstanceRequestCount' => '<p>Target number of instances to run in the instance group. </p>',
        'InstanceGroupDetail$InstanceRunningCount' => '<p>Actual count of running instances. </p>',
        'InstanceGroupModifyConfig$InstanceCount' => '<p>Target size for the instance group.</p>',
        'JobFlowInstancesConfig$InstanceCount' => '<p>The number of Amazon EC2 instances used to execute the job flow.</p>',
        'JobFlowInstancesDetail$InstanceCount' => '<p>The number of Amazon EC2 instances in the cluster. If the value is 1, the same instance serves as both the master and slave node. If the value is greater than 1, one instance is the master node and all others are slave nodes.</p>',
        'JobFlowInstancesDetail$NormalizedInstanceHours' => '<p>An approximation of the cost of the job flow, represented in m1.small/hours. This value is incremented once for every hour an m1.small runs. Larger instances are weighted more, so an Amazon EC2 instance that is roughly four times more expensive would result in the normalized instance hours being incremented by four. This result is only an approximation and does not reflect the actual billing rate.</p>',
      ],
    ],
    'InternalServerError' => [
      'base' => '<p>Indicates that an error occurred while processing the request and that the request was not completed.</p>',
      'refs' => [],
    ],
    'InternalServerException' => [
      'base' => '<p>This exception occurs when there is an internal failure in the EMR service.</p>',
      'refs' => [],
    ],
    'InvalidRequestException' => [
      'base' => '<p>This exception occurs when there is something wrong with user input.</p>',
      'refs' => [],
    ],
    'JobFlowDetail' => [
      'base' => '<p> A description of a job flow.</p>',
      'refs' => [
        'JobFlowDetailList$member' => NULL,
      ],
    ],
    'JobFlowDetailList' => [
      'base' => NULL,
      'refs' => [
        'DescribeJobFlowsOutput$JobFlows' => '<p>A list of job flows matching the parameters supplied.</p>',
      ],
    ],
    'JobFlowExecutionState' => [
      'base' => '<p> The type of instance. </p> <enumValues> <value name="JobFlowExecutionState$COMPLETED"> <p>A small instance</p> </value> <value name="JobFlowExecutionState$FAILED"> <p>A large instance</p> </value> </enumValues>',
      'refs' => [
        'JobFlowExecutionStateList$member' => NULL,
        'JobFlowExecutionStatusDetail$State' => '<p>The state of the job flow.</p>',
      ],
    ],
    'JobFlowExecutionStateList' => [
      'base' => NULL,
      'refs' => [
        'DescribeJobFlowsInput$JobFlowStates' => '<p>Return only job flows whose state is contained in this list.</p>',
      ],
    ],
    'JobFlowExecutionStatusDetail' => [
      'base' => '<p>Describes the status of the job flow.</p>',
      'refs' => [
        'JobFlowDetail$ExecutionStatusDetail' => '<p>Describes the execution status of the job flow.</p>',
      ],
    ],
    'JobFlowInstancesConfig' => [
      'base' => '<p>A description of the Amazon EC2 instance running the job flow. A valid JobFlowInstancesConfig must contain at least InstanceGroups, which is the recommended configuration. However, a valid alternative is to have MasterInstanceType, SlaveInstanceType, and InstanceCount (all three must be present].</p>',
      'refs' => [
        'RunJobFlowInput$Instances' => '<p> A specification of the number and type of Amazon EC2 instances on which to run the job flow. </p>',
      ],
    ],
    'JobFlowInstancesDetail' => [
      'base' => '<p>Specify the type of Amazon EC2 instances to run the job flow on.</p>',
      'refs' => [
        'JobFlowDetail$Instances' => '<p>Describes the Amazon EC2 instances of the job flow.</p>',
      ],
    ],
    'KeyValue' => [
      'base' => '<p>A key value pair.</p>',
      'refs' => [
        'KeyValueList$member' => NULL,
      ],
    ],
    'KeyValueList' => [
      'base' => NULL,
      'refs' => [
        'HadoopJarStepConfig$Properties' => '<p>A list of Java properties that are set when the step runs. You can use these properties to pass key value pairs to your main function.</p>',
      ],
    ],
    'ListBootstrapActionsInput' => [
      'base' => '<p>This input determines which bootstrap actions to retrieve.</p>',
      'refs' => [],
    ],
    'ListBootstrapActionsOutput' => [
      'base' => '<p>This output contains the boostrap actions detail .</p>',
      'refs' => [],
    ],
    'ListClustersInput' => [
      'base' => '<p>This input determines how the ListClusters action filters the list of clusters that it returns.</p>',
      'refs' => [],
    ],
    'ListClustersOutput' => [
      'base' => '<p>This contains a ClusterSummaryList with the cluster details; for example, the cluster IDs, names, and status.</p>',
      'refs' => [],
    ],
    'ListInstanceGroupsInput' => [
      'base' => '<p>This input determines which instance groups to retrieve.</p>',
      'refs' => [],
    ],
    'ListInstanceGroupsOutput' => [
      'base' => '<p>This input determines which instance groups to retrieve.</p>',
      'refs' => [],
    ],
    'ListInstancesInput' => [
      'base' => '<p>This input determines which instances to list.</p>',
      'refs' => [],
    ],
    'ListInstancesOutput' => [
      'base' => '<p>This output contains the list of instances.</p>',
      'refs' => [],
    ],
    'ListStepsInput' => [
      'base' => '<p>This input determines which steps to list.</p>',
      'refs' => [],
    ],
    'ListStepsOutput' => [
      'base' => '<p>This output contains the list of steps.</p>',
      'refs' => [],
    ],
    'Marker' => [
      'base' => NULL,
      'refs' => [
        'ListBootstrapActionsInput$Marker' => '<p>The pagination token that indicates the next set of results to retrieve .</p>',
        'ListBootstrapActionsOutput$Marker' => '<p>The pagination token that indicates the next set of results to retrieve .</p>',
        'ListClustersInput$Marker' => '<p>The pagination token that indicates the next set of results to retrieve. </p>',
        'ListClustersOutput$Marker' => '<p>The pagination token that indicates the next set of results to retrieve. </p>',
        'ListInstanceGroupsInput$Marker' => '<p>The pagination token that indicates the next set of results to retrieve.</p>',
        'ListInstanceGroupsOutput$Marker' => '<p>The pagination token that indicates the next set of results to retrieve.</p>',
        'ListInstancesInput$Marker' => '<p>The pagination token that indicates the next set of results to retrieve.</p>',
        'ListInstancesOutput$Marker' => '<p>The pagination token that indicates the next set of results to retrieve.</p>',
        'ListStepsInput$Marker' => '<p>The pagination token that indicates the next set of results to retrieve.</p>',
        'ListStepsOutput$Marker' => '<p>The pagination token that indicates the next set of results to retrieve.</p>',
      ],
    ],
    'MarketType' => [
      'base' => NULL,
      'refs' => [
        'InstanceGroup$Market' => '<p>The marketplace to provision instances for this group. Valid values are ON_DEMAND or SPOT.</p>',
        'InstanceGroupConfig$Market' => '<p>Market type of the Amazon EC2 instances used to create a cluster node. </p>',
        'InstanceGroupDetail$Market' => '<p>Market type of the Amazon EC2 instances used to create a cluster node. </p>',
      ],
    ],
    'ModifyInstanceGroupsInput' => [
      'base' => '<p>Change the size of some instance groups.</p>',
      'refs' => [],
    ],
    'NewSupportedProductsList' => [
      'base' => NULL,
      'refs' => [
        'RunJobFlowInput$NewSupportedProducts' => '<p>A list of strings that indicates third-party software to use with the job flow that accepts a user argument list. EMR accepts and forwards the argument list to the corresponding installation script as bootstrap action arguments. For more information, see <a href="http://docs.aws.amazon.com/ElasticMapReduce/latest/DeveloperGuide/emr-mapr.html">Launch a Job Flow on the MapR Distribution for Hadoop</a>. Currently supported values are:</p> <ul> <li>"mapr-m3" - launch the job flow using MapR M3 Edition.</li> <li>"mapr-m5" - launch the job flow using MapR M5 Edition.</li> <li>"mapr" with the user arguments specifying "--edition,m3" or "--edition,m5" - launch the job flow using MapR M3 or M5 Edition respectively.</li> </ul>',
      ],
    ],
    'PlacementType' => [
      'base' => '<p>The Amazon EC2 location for the job flow.</p>',
      'refs' => [
        'JobFlowInstancesConfig$Placement' => '<p>The Availability Zone the job flow will run in.</p>',
        'JobFlowInstancesDetail$Placement' => '<p>The Amazon EC2 Availability Zone for the job flow.</p>',
      ],
    ],
    'RemoveTagsInput' => [
      'base' => '<p>This input identifies a cluster and a list of tags to remove. </p>',
      'refs' => [],
    ],
    'RemoveTagsOutput' => [
      'base' => '<p>This output indicates the result of removing tags from a resource. </p>',
      'refs' => [],
    ],
    'ResourceId' => [
      'base' => NULL,
      'refs' => [
        'AddTagsInput$ResourceId' => '<p>The Amazon EMR resource identifier to which tags will be added. This value must be a cluster identifier.</p>',
        'RemoveTagsInput$ResourceId' => '<p>The Amazon EMR resource identifier from which tags will be removed. This value must be a cluster identifier.</p>',
      ],
    ],
    'RunJobFlowInput' => [
      'base' => '<p> Input to the <a>RunJobFlow</a> operation. </p>',
      'refs' => [],
    ],
    'RunJobFlowOutput' => [
      'base' => '<p> The result of the <a>RunJobFlow</a> operation. </p>',
      'refs' => [],
    ],
    'ScriptBootstrapActionConfig' => [
      'base' => '<p>Configuration of the script to run during a bootstrap action.</p>',
      'refs' => [
        'BootstrapActionConfig$ScriptBootstrapAction' => '<p>The script run by the bootstrap action.</p>',
      ],
    ],
    'SecurityGroupsList' => [
      'base' => NULL,
      'refs' => [
        'JobFlowInstancesConfig$AdditionalMasterSecurityGroups' => '<p>A list of additional Amazon EC2 security group IDs for the master node.</p>',
        'JobFlowInstancesConfig$AdditionalSlaveSecurityGroups' => '<p>A list of additional Amazon EC2 security group IDs for the slave nodes.</p>',
      ],
    ],
    'SetTerminationProtectionInput' => [
      'base' => '<p> The input argument to the <a>TerminationProtection</a> operation. </p>',
      'refs' => [],
    ],
    'SetVisibleToAllUsersInput' => [
      'base' => '<p>The input to the SetVisibleToAllUsers action.</p>',
      'refs' => [],
    ],
    'Step' => [
      'base' => '<p>This represents a step in a cluster.</p>',
      'refs' => [
        'DescribeStepOutput$Step' => '<p>The step details for the requested step identifier.</p>',
      ],
    ],
    'StepConfig' => [
      'base' => '<p>Specification of a job flow step.</p>',
      'refs' => [
        'StepConfigList$member' => NULL,
        'StepDetail$StepConfig' => '<p>The step configuration.</p>',
      ],
    ],
    'StepConfigList' => [
      'base' => NULL,
      'refs' => [
        'AddJobFlowStepsInput$Steps' => '<p> A list of <a>StepConfig</a> to be executed by the job flow. </p>',
        'RunJobFlowInput$Steps' => '<p>A list of steps to be executed by the job flow.</p>',
      ],
    ],
    'StepDetail' => [
      'base' => '<p>Combines the execution state and configuration of a step.</p>',
      'refs' => [
        'StepDetailList$member' => NULL,
      ],
    ],
    'StepDetailList' => [
      'base' => NULL,
      'refs' => [
        'JobFlowDetail$Steps' => '<p>A list of steps run by the job flow.</p>',
      ],
    ],
    'StepExecutionState' => [
      'base' => NULL,
      'refs' => [
        'StepExecutionStatusDetail$State' => '<p>The state of the job flow step.</p>',
      ],
    ],
    'StepExecutionStatusDetail' => [
      'base' => '<p>The execution state of a step.</p>',
      'refs' => [
        'StepDetail$ExecutionStatusDetail' => '<p>The description of the step status.</p>',
      ],
    ],
    'StepId' => [
      'base' => NULL,
      'refs' => [
        'DescribeStepInput$StepId' => '<p>The identifier of the step to describe.</p>',
        'Step$Id' => '<p>The identifier of the cluster step.</p>',
        'StepSummary$Id' => '<p>The identifier of the cluster step. </p>',
      ],
    ],
    'StepIdsList' => [
      'base' => NULL,
      'refs' => [
        'AddJobFlowStepsOutput$StepIds' => '<p>The identifiers of the list of steps added to the job flow.</p>',
      ],
    ],
    'StepState' => [
      'base' => NULL,
      'refs' => [
        'StepStateList$member' => NULL,
        'StepStatus$State' => '<p>The execution state of the cluster step. </p>',
      ],
    ],
    'StepStateChangeReason' => [
      'base' => '<p>The details of the step state change reason. </p>',
      'refs' => [
        'StepStatus$StateChangeReason' => '<p>The reason for the step execution status change. </p>',
      ],
    ],
    'StepStateChangeReasonCode' => [
      'base' => NULL,
      'refs' => [
        'StepStateChangeReason$Code' => '<p>The programmable code for the state change reason. </p>',
      ],
    ],
    'StepStateList' => [
      'base' => NULL,
      'refs' => [
        'ListStepsInput$StepStates' => '<p>The filter to limit the step list based on certain states.</p>',
      ],
    ],
    'StepStatus' => [
      'base' => '<p>The execution status details of the cluster step. </p>',
      'refs' => [
        'Step$Status' => '<p>The current execution status details of the cluster step. </p>',
        'StepSummary$Status' => '<p>The current execution status details of the cluster step. </p>',
      ],
    ],
    'StepSummary' => [
      'base' => '<p>The summary of the cluster step.</p>',
      'refs' => [
        'StepSummaryList$member' => NULL,
      ],
    ],
    'StepSummaryList' => [
      'base' => NULL,
      'refs' => [
        'ListStepsOutput$Steps' => '<p>The filtered list of steps for the cluster.</p>',
      ],
    ],
    'StepTimeline' => [
      'base' => '<p>The timeline of the cluster step lifecycle. </p>',
      'refs' => [
        'StepStatus$Timeline' => '<p>The timeline of the cluster step status over time. </p>',
      ],
    ],
    'String' => [
      'base' => NULL,
      'refs' => [
        'Application$Name' => '<p>The name of the application.</p>',
        'Application$Version' => '<p>The version of the application.</p>',
        'Cluster$Name' => '<p>The name of the cluster.</p>',
        'Cluster$LogUri' => '<p>The path to the Amazon S3 location where logs for this cluster are stored.</p>',
        'Cluster$RequestedAmiVersion' => '<p>The AMI version requested for this cluster.</p>',
        'Cluster$RunningAmiVersion' => '<p>The AMI version running on this cluster. This differs from the requested version only if the requested version is a meta version, such as "latest". </p>',
        'Cluster$ServiceRole' => '<p>The IAM role that will be assumed by the Amazon EMR service to access AWS resources on your behalf.</p>',
        'Cluster$MasterPublicDnsName' => '<p>The public DNS name of the master Ec2 instance.</p>',
        'ClusterStateChangeReason$Message' => '<p>The descriptive message for the state change reason.</p>',
        'ClusterSummary$Name' => '<p>The name of the cluster.</p>',
        'Command$Name' => '<p>The name of the command.</p>',
        'Command$ScriptPath' => '<p>The Amazon S3 location of the command script.</p>',
        'Ec2InstanceAttributes$Ec2KeyName' => '<p>The name of the Amazon EC2 key pair to use when connecting with SSH into the master node as a user named "hadoop".</p>',
        'Ec2InstanceAttributes$Ec2SubnetId' => '<p> To launch the job flow in Amazon VPC, set this parameter to the identifier of the Amazon VPC subnet where you want the job flow to launch. If you do not specify this value, the job flow is launched in the normal AWS cloud, outside of a VPC. </p> <p> Amazon VPC currently does not support cluster compute quadruple extra large (cc1.4xlarge] instances. Thus, you cannot specify the cc1.4xlarge instance type for nodes of a job flow launched in a VPC. </p>',
        'Ec2InstanceAttributes$Ec2AvailabilityZone' => '<p>The Availability Zone in which the cluster will run.</p>',
        'Ec2InstanceAttributes$IamInstanceProfile' => '<p>The IAM role that was specified when the job flow was launched. The EC2 instances of the job flow assume this role.</p>',
        'Ec2InstanceAttributes$EmrManagedMasterSecurityGroup' => '<p>The identifier of the Amazon EC2 security group (managed by Amazon Elastic MapReduce] for the master node.</p>',
        'Ec2InstanceAttributes$EmrManagedSlaveSecurityGroup' => '<p>The identifier of the Amazon EC2 security group (managed by Amazon Elastic MapReduce] for the slave nodes.</p>',
        'HadoopStepConfig$Jar' => '<p>The path to the JAR file that runs during the step.</p>',
        'HadoopStepConfig$MainClass' => '<p>The name of the main class in the specified Java file. If not specified, the JAR file should specify a main class in its manifest file.</p>',
        'Instance$PublicDnsName' => '<p>The public DNS name of the instance.</p>',
        'Instance$PublicIpAddress' => '<p>The public IP address of the instance.</p>',
        'Instance$PrivateDnsName' => '<p>The private DNS name of the instance.</p>',
        'Instance$PrivateIpAddress' => '<p>The private IP address of the instance.</p>',
        'InstanceGroup$Name' => '<p>The name of the instance group.</p>',
        'InstanceGroup$BidPrice' => '<p>The bid price for each EC2 instance in the instance group when launching nodes as Spot Instances, expressed in USD.</p>',
        'InstanceGroupStateChangeReason$Message' => '<p>The status change reason description.</p>',
        'InstanceStateChangeReason$Message' => '<p>The status change reason description.</p>',
        'Step$Name' => '<p>The name of the cluster step.</p>',
        'StepStateChangeReason$Message' => '<p>The descriptive message for the state change reason. </p>',
        'StepSummary$Name' => '<p>The name of the cluster step. </p>',
        'StringList$member' => NULL,
        'StringMap$key' => NULL,
        'StringMap$value' => NULL,
        'Tag$Key' => '<p>A user-defined key, which is the minimum required information for a valid tag. For more information, see <a href="http://docs.aws.amazon.com/ElasticMapReduce/latest/DeveloperGuide/emr-plan-tags.html">Tagging Amazon EMR Resources</a>. </p>',
        'Tag$Value' => '<p>A user-defined value, which is optional in a tag. For more information, see <a href="http://docs.aws.amazon.com/ElasticMapReduce/latest/DeveloperGuide/emr-plan-tags.html">Tagging Amazon EMR Resources</a>. </p>',
      ],
    ],
    'StringList' => [
      'base' => NULL,
      'refs' => [
        'Application$Args' => '<p>Arguments for Amazon EMR to pass to the application.</p>',
        'Command$Args' => '<p>Arguments for Amazon EMR to pass to the command for execution.</p>',
        'Ec2InstanceAttributes$AdditionalMasterSecurityGroups' => '<p>A list of additional Amazon EC2 security group IDs for the master node.</p>',
        'Ec2InstanceAttributes$AdditionalSlaveSecurityGroups' => '<p>A list of additional Amazon EC2 security group IDs for the slave nodes.</p>',
        'HadoopStepConfig$Args' => '<p>The list of command line arguments to pass to the JAR file\'s main function for execution.</p>',
        'RemoveTagsInput$TagKeys' => '<p>A list of tag keys to remove from a resource.</p>',
      ],
    ],
    'StringMap' => [
      'base' => NULL,
      'refs' => [
        'Application$AdditionalInfo' => '<p>This option is for advanced users only. This is meta information about third-party applications that third-party vendors use for testing purposes.</p>',
        'HadoopStepConfig$Properties' => '<p>The list of Java properties that are set when the step runs. You can use these properties to pass key value pairs to your main function.</p>',
      ],
    ],
    'SupportedProductConfig' => [
      'base' => '<p>The list of supported product configurations which allow user-supplied arguments. EMR accepts these arguments and forwards them to the corresponding installation script as bootstrap action arguments. </p>',
      'refs' => [
        'NewSupportedProductsList$member' => NULL,
      ],
    ],
    'SupportedProductsList' => [
      'base' => NULL,
      'refs' => [
        'JobFlowDetail$SupportedProducts' => '<p>A list of strings set by third party software when the job flow is launched. If you are not using third party software to manage the job flow this value is empty.</p>',
        'RunJobFlowInput$SupportedProducts' => '<p>A list of strings that indicates third-party software to use with the job flow. For more information, go to <a href="http://docs.aws.amazon.com/ElasticMapReduce/latest/DeveloperGuide/emr-supported-products.html">Use Third Party Applications with Amazon EMR</a>. Currently supported values are:</p> <ul> <li>"mapr-m3" - launch the job flow using MapR M3 Edition.</li> <li>"mapr-m5" - launch the job flow using MapR M5 Edition.</li> </ul>',
      ],
    ],
    'Tag' => [
      'base' => '<p>A key/value pair containing user-defined metadata that you can associate with an Amazon EMR resource. Tags make it easier to associate clusters in various ways, such as grouping clu\\ sters to track your Amazon EMR resource allocation costs. For more information, see <a href="http://docs.aws.amazon.com/ElasticMapReduce/latest/DeveloperGuide/emr-plan-tags.html">Tagging Amazon EMR Resources</a>. </p>',
      'refs' => [
        'TagList$member' => NULL,
      ],
    ],
    'TagList' => [
      'base' => NULL,
      'refs' => [
        'AddTagsInput$Tags' => '<p>A list of tags to associate with a cluster and propagate to Amazon EC2 instances. Tags are user-defined key/value pairs that consist of a required key string with a maximum of 128 characters, and an optional value string with a maximum of 256 characters.</p>',
        'Cluster$Tags' => '<p>A list of tags associated with a cluster.</p>',
        'RunJobFlowInput$Tags' => '<p>A list of tags to associate with a cluster and propagate to Amazon EC2 instances.</p>',
      ],
    ],
    'TerminateJobFlowsInput' => [
      'base' => '<p> Input to the <a>TerminateJobFlows</a> operation. </p>',
      'refs' => [],
    ],
    'XmlString' => [
      'base' => NULL,
      'refs' => [
        'HadoopJarStepConfig$Jar' => '<p>A path to a JAR file run during the step.</p>',
        'HadoopJarStepConfig$MainClass' => '<p>The name of the main class in the specified Java file. If not specified, the JAR file should specify a Main-Class in its manifest file.</p>',
        'InstanceGroupDetail$LastStateChangeReason' => '<p>Details regarding the state of the instance group. </p>',
        'JobFlowDetail$LogUri' => '<p>The location in Amazon S3 where log files for the job are stored. </p>',
        'JobFlowDetail$JobFlowRole' => '<p>The IAM role that was specified when the job flow was launched. The EC2 instances of the job flow assume this role.</p>',
        'JobFlowDetail$ServiceRole' => '<p>The IAM role that will be assumed by the Amazon EMR service to access AWS resources on your behalf.</p>',
        'JobFlowExecutionStatusDetail$LastStateChangeReason' => '<p>Description of the job flow last changed state.</p>',
        'JobFlowInstancesDetail$MasterPublicDnsName' => '<p>The DNS name of the master node.</p>',
        'JobFlowInstancesDetail$MasterInstanceId' => '<p>The Amazon EC2 instance identifier of the master node.</p>',
        'KeyValue$Key' => '<p>The unique identifier of a key value pair.</p>',
        'KeyValue$Value' => '<p>The value part of the identified key.</p>',
        'PlacementType$AvailabilityZone' => '<p>The Amazon EC2 Availability Zone for the job flow.</p>',
        'RunJobFlowInput$LogUri' => '<p>The location in Amazon S3 to write the log files of the job flow. If a value is not provided, logs are not created.</p>',
        'RunJobFlowInput$AdditionalInfo' => '<p>A JSON string for selecting additional features.</p>',
        'RunJobFlowInput$JobFlowRole' => '<p>An IAM role for the job flow. The EC2 instances of the job flow assume this role. The default role is <code>EMRJobflowDefault</code>. In order to use the default role, you must have already created it using the CLI.</p>',
        'RunJobFlowInput$ServiceRole' => '<p>The IAM role that will be assumed by the Amazon EMR service to access AWS resources on your behalf.</p>',
        'ScriptBootstrapActionConfig$Path' => '<p>Location of the script to run during a bootstrap action. Can be either a location in Amazon S3 or on a local file system.</p>',
        'StepExecutionStatusDetail$LastStateChangeReason' => '<p>A description of the step\'s current state.</p>',
        'XmlStringList$member' => NULL,
      ],
    ],
    'XmlStringList' => [
      'base' => NULL,
      'refs' => [
        'DescribeJobFlowsInput$JobFlowIds' => '<p>Return only job flows whose job flow ID is contained in this list. </p>',
        'HadoopJarStepConfig$Args' => '<p>A list of command line arguments passed to the JAR file\'s main function when executed.</p>',
        'ListStepsInput$StepIds' => '<p>The filter to limit the step list based on the identifier of the steps.</p>',
        'ScriptBootstrapActionConfig$Args' => '<p>A list of command line arguments to pass to the bootstrap action script.</p>',
        'SetTerminationProtectionInput$JobFlowIds' => '<p> A list of strings that uniquely identify the job flows to protect. This identifier is returned by <a>RunJobFlow</a> and can also be obtained from <a>DescribeJobFlows</a> . </p>',
        'SetVisibleToAllUsersInput$JobFlowIds' => '<p>Identifiers of the job flows to receive the new visibility setting.</p>',
        'SupportedProductConfig$Args' => '<p>The list of user-supplied arguments.</p>',
        'TerminateJobFlowsInput$JobFlowIds' => '<p>A list of job flows to be shutdown.</p>',
      ],
    ],
    'XmlStringMaxLen256' => [
      'base' => NULL,
      'refs' => [
        'AddInstanceGroupsInput$JobFlowId' => '<p>Job flow in which to add the instance groups.</p>',
        'AddInstanceGroupsOutput$JobFlowId' => '<p>The job flow ID in which the instance groups are added.</p>',
        'AddJobFlowStepsInput$JobFlowId' => '<p>A string that uniquely identifies the job flow. This identifier is returned by <a>RunJobFlow</a> and can also be obtained from <a>ListClusters</a>. </p>',
        'BootstrapActionConfig$Name' => '<p>The name of the bootstrap action.</p>',
        'InstanceGroupConfig$Name' => '<p>Friendly name given to the instance group.</p>',
        'InstanceGroupConfig$BidPrice' => '<p>Bid price for each Amazon EC2 instance in the instance group when launching nodes as Spot Instances, expressed in USD.</p>',
        'InstanceGroupDetail$InstanceGroupId' => '<p>Unique identifier for the instance group. </p>',
        'InstanceGroupDetail$Name' => '<p>Friendly name for the instance group. </p>',
        'InstanceGroupDetail$BidPrice' => '<p>Bid price for EC2 Instances when launching nodes as Spot Instances, expressed in USD.</p>',
        'InstanceGroupIdsList$member' => NULL,
        'InstanceGroupModifyConfig$InstanceGroupId' => '<p>Unique ID of the instance group to expand or shrink.</p>',
        'JobFlowDetail$JobFlowId' => '<p>The job flow identifier.</p>',
        'JobFlowDetail$Name' => '<p>The name of the job flow.</p>',
        'JobFlowDetail$AmiVersion' => '<p>The version of the AMI used to initialize Amazon EC2 instances in the job flow. For a list of AMI versions currently supported by Amazon ElasticMapReduce, go to <a href="http://docs.aws.amazon.com/ElasticMapReduce/latest/DeveloperGuide/EnvironmentConfig_AMIVersion.html#ami-versions-supported">AMI Versions Supported in Elastic MapReduce</a> in the <i>Amazon Elastic MapReduce Developer\'s Guide.</i></p>',
        'JobFlowInstancesConfig$Ec2KeyName' => '<p>The name of the Amazon EC2 key pair that can be used to ssh to the master node as the user called "hadoop."</p>',
        'JobFlowInstancesConfig$HadoopVersion' => '<p>The Hadoop version for the job flow. Valid inputs are "0.18", "0.20", "0.20.205", "1.0.3", "2.2.0", or "2.4.0". If you do not set this value, the default of 0.18 is used, unless the AmiVersion parameter is set in the RunJobFlow call, in which case the default version of Hadoop for that AMI version is used.</p>',
        'JobFlowInstancesConfig$Ec2SubnetId' => '<p> To launch the job flow in Amazon Virtual Private Cloud (Amazon VPC], set this parameter to the identifier of the Amazon VPC subnet where you want the job flow to launch. If you do not specify this value, the job flow is launched in the normal Amazon Web Services cloud, outside of an Amazon VPC. </p> <p> Amazon VPC currently does not support cluster compute quadruple extra large (cc1.4xlarge] instances. Thus you cannot specify the cc1.4xlarge instance type for nodes of a job flow launched in a Amazon VPC. </p>',
        'JobFlowInstancesConfig$EmrManagedMasterSecurityGroup' => '<p>The identifier of the Amazon EC2 security group (managed by Amazon ElasticMapReduce] for the master node.</p>',
        'JobFlowInstancesConfig$EmrManagedSlaveSecurityGroup' => '<p>The identifier of the Amazon EC2 security group (managed by Amazon ElasticMapReduce] for the slave nodes.</p>',
        'JobFlowInstancesDetail$Ec2KeyName' => '<p>The name of an Amazon EC2 key pair that can be used to ssh to the master node of job flow.</p>',
        'JobFlowInstancesDetail$Ec2SubnetId' => '<p>For job flows launched within Amazon Virtual Private Cloud, this value specifies the identifier of the subnet where the job flow was launched.</p>',
        'JobFlowInstancesDetail$HadoopVersion' => '<p>The Hadoop version for the job flow.</p>',
        'RunJobFlowInput$Name' => '<p>The name of the job flow.</p>',
        'RunJobFlowInput$AmiVersion' => '<p>The version of the Amazon Machine Image (AMI] to use when launching Amazon EC2 instances in the job flow. The following values are valid: </p> <ul> <li>"latest" (uses the latest AMI]</li> <li>The version number of the AMI to use, for example, "2.0"</li> </ul> <p>If the AMI supports multiple versions of Hadoop (for example, AMI 1.0 supports both Hadoop 0.18 and 0.20] you can use the <a>JobFlowInstancesConfig</a> <code>HadoopVersion</code> parameter to modify the version of Hadoop from the defaults shown above.</p> <p>For details about the AMI versions currently supported by Amazon Elastic MapReduce, go to <a href="http://docs.aws.amazon.com/ElasticMapReduce/latest/DeveloperGuide/EnvironmentConfig_AMIVersion.html#ami-versions-supported">AMI Versions Supported in Elastic MapReduce</a> in the <i>Amazon Elastic MapReduce Developer\'s Guide.</i> </p>',
        'RunJobFlowOutput$JobFlowId' => '<p>An unique identifier for the job flow.</p>',
        'SecurityGroupsList$member' => NULL,
        'StepConfig$Name' => '<p>The name of the job flow step.</p>',
        'StepIdsList$member' => NULL,
        'SupportedProductConfig$Name' => '<p>The name of the product configuration.</p>',
        'SupportedProductsList$member' => NULL,
      ],
    ],
  ],
];
