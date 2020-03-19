<?php
// This file was auto-generated from sdk-root/src/data/outposts/2019-12-03/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>AWS Outposts is a fully-managed service that extends AWS infrastructure, APIs, and tools to customer premises. By providing local access to AWS-managed infrastructure, AWS Outposts enables customers to build and run applications on premises using the same programming interfaces as in AWS Regions, while using local compute and storage resources for lower latency and local data processing needs.</p>', 'operations' => [ 'CreateOutpost' => '<p>Creates an Outpost.</p>', 'DeleteOutpost' => '<p>Deletes the Outpost.</p>', 'DeleteSite' => '<p>Deletes the site.</p>', 'GetOutpost' => '<p>Gets information about the specified Outpost.</p>', 'GetOutpostInstanceTypes' => '<p>Lists the instance types for the specified Outpost.</p>', 'ListOutposts' => '<p>List the Outposts for your AWS account.</p>', 'ListSites' => '<p>Lists the sites for the specified AWS account.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>You do not have permission to perform this operation.</p>', 'refs' => [], ], 'AccountId' => [ 'base' => '<p>The ID of the AWS account.</p>', 'refs' => [ 'Site$AccountId' => NULL, ], ], 'AvailabilityZone' => [ 'base' => '<p>The Availability Zone.</p> <p>You must specify <code>AvailabilityZone</code> or <code>AvailabilityZoneId</code>.</p>', 'refs' => [ 'CreateOutpostInput$AvailabilityZone' => NULL, 'Outpost$AvailabilityZone' => NULL, ], ], 'AvailabilityZoneId' => [ 'base' => '<p>The ID of the Availability Zone.</p> <p>You must specify <code>AvailabilityZone</code> or <code>AvailabilityZoneId</code>.</p>', 'refs' => [ 'CreateOutpostInput$AvailabilityZoneId' => NULL, 'Outpost$AvailabilityZoneId' => NULL, ], ], 'CreateOutpostInput' => [ 'base' => NULL, 'refs' => [], ], 'CreateOutpostOutput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteOutpostInput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteOutpostOutput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteSiteInput' => [ 'base' => NULL, 'refs' => [], ], 'DeleteSiteOutput' => [ 'base' => NULL, 'refs' => [], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$Message' => NULL, 'InternalServerException$Message' => NULL, 'NotFoundException$Message' => NULL, 'ServiceQuotaExceededException$Message' => NULL, 'ValidationException$Message' => NULL, ], ], 'GetOutpostInput' => [ 'base' => NULL, 'refs' => [], ], 'GetOutpostInstanceTypesInput' => [ 'base' => NULL, 'refs' => [], ], 'GetOutpostInstanceTypesOutput' => [ 'base' => NULL, 'refs' => [], ], 'GetOutpostOutput' => [ 'base' => NULL, 'refs' => [], ], 'InstanceType' => [ 'base' => '<p>The instance type.</p>', 'refs' => [ 'InstanceTypeItem$InstanceType' => NULL, ], ], 'InstanceTypeItem' => [ 'base' => '<p>Information about an instance type.</p>', 'refs' => [ 'InstanceTypeListDefinition$member' => NULL, ], ], 'InstanceTypeListDefinition' => [ 'base' => '<p>Information about the instance types.</p>', 'refs' => [ 'GetOutpostInstanceTypesOutput$InstanceTypes' => NULL, ], ], 'InternalServerException' => [ 'base' => '<p>An internal error has occurred.</p>', 'refs' => [], ], 'LifeCycleStatus' => [ 'base' => '<p>The life cycle status.</p>', 'refs' => [ 'Outpost$LifeCycleStatus' => NULL, ], ], 'ListOutpostsInput' => [ 'base' => NULL, 'refs' => [], ], 'ListOutpostsOutput' => [ 'base' => NULL, 'refs' => [], ], 'ListSitesInput' => [ 'base' => NULL, 'refs' => [], ], 'ListSitesOutput' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults1000' => [ 'base' => '<p>The maximum page size.</p>', 'refs' => [ 'GetOutpostInstanceTypesInput$MaxResults' => NULL, 'ListOutpostsInput$MaxResults' => NULL, 'ListSitesInput$MaxResults' => NULL, ], ], 'NotFoundException' => [ 'base' => '<p>The specified request is not valid.</p>', 'refs' => [], ], 'Outpost' => [ 'base' => '<p>Information about an Outpost.</p>', 'refs' => [ 'CreateOutpostOutput$Outpost' => NULL, 'GetOutpostOutput$Outpost' => NULL, 'outpostListDefinition$member' => NULL, ], ], 'OutpostArn' => [ 'base' => '<p>The Amazon Resource Name (ARN) of the Outpost.</p>', 'refs' => [ 'GetOutpostInstanceTypesOutput$OutpostArn' => NULL, 'Outpost$OutpostArn' => NULL, ], ], 'OutpostDescription' => [ 'base' => '<p>The Outpost description.</p>', 'refs' => [ 'CreateOutpostInput$Description' => NULL, 'Outpost$Description' => NULL, ], ], 'OutpostId' => [ 'base' => '<p>The ID of the Outpost.</p>', 'refs' => [ 'DeleteOutpostInput$OutpostId' => NULL, 'GetOutpostInput$OutpostId' => NULL, 'GetOutpostInstanceTypesInput$OutpostId' => NULL, 'GetOutpostInstanceTypesOutput$OutpostId' => NULL, 'Outpost$OutpostId' => NULL, ], ], 'OutpostName' => [ 'base' => '<p>The name of the Outpost.</p>', 'refs' => [ 'CreateOutpostInput$Name' => NULL, 'Outpost$Name' => NULL, ], ], 'OwnerId' => [ 'base' => '<p>The AWS account ID of the Outpost owner.</p>', 'refs' => [ 'Outpost$OwnerId' => NULL, ], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>You have exceeded a service quota.</p>', 'refs' => [], ], 'Site' => [ 'base' => '<p>Information about a site.</p>', 'refs' => [ 'siteListDefinition$member' => NULL, ], ], 'SiteDescription' => [ 'base' => '<p>The description of the site.</p>', 'refs' => [ 'Site$Description' => NULL, ], ], 'SiteId' => [ 'base' => '<p>The ID of the site.</p>', 'refs' => [ 'CreateOutpostInput$SiteId' => NULL, 'DeleteSiteInput$SiteId' => NULL, 'Outpost$SiteId' => NULL, 'Site$SiteId' => NULL, ], ], 'SiteName' => [ 'base' => '<p>The name of the site.</p>', 'refs' => [ 'Site$Name' => NULL, ], ], 'Token' => [ 'base' => '<p>The pagination token.</p>', 'refs' => [ 'GetOutpostInstanceTypesInput$NextToken' => NULL, 'GetOutpostInstanceTypesOutput$NextToken' => NULL, 'ListOutpostsInput$NextToken' => NULL, 'ListOutpostsOutput$NextToken' => NULL, 'ListSitesInput$NextToken' => NULL, 'ListSitesOutput$NextToken' => NULL, ], ], 'ValidationException' => [ 'base' => '<p>A parameter is not valid.</p>', 'refs' => [], ], 'outpostListDefinition' => [ 'base' => '<p>Information about the Outposts.</p>', 'refs' => [ 'ListOutpostsOutput$Outposts' => NULL, ], ], 'siteListDefinition' => [ 'base' => '<p>Information about the sites.</p>', 'refs' => [ 'ListSitesOutput$Sites' => NULL, ], ], ],];
