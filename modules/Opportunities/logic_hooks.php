<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
$hook_version = 1;
$hook_array = Array();
// position, file, function 
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(77,
    'updateGeocodeInfo',
    'custom/modules/Opportunities/OpportunitiesJjwg_MapsLogicHook.php',
    'OpportunitiesJjwg_MapsLogicHook',
    'updateGeocodeInfo');
$hook_array['before_save'][] = Array(1,
    'Opportunities push feed',
    'modules/Opportunities/SugarFeeds/OppFeed.php',
    'OppFeed',
    'pushFeed');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(77,
    'updateRelatedMeetingsGeocodeInfo',
    'custom/modules/Opportunities/OpportunitiesJjwg_MapsLogicHook.php',
    'OpportunitiesJjwg_MapsLogicHook',
    'updateRelatedMeetingsGeocodeInfo');
$hook_array['after_save'][] = Array(78,
    'updateRelatedProjectGeocodeInfo',
    'custom/modules/Opportunities/OpportunitiesJjwg_MapsLogicHook.php',
    'OpportunitiesJjwg_MapsLogicHook',
    'updateRelatedProjectGeocodeInfo');
$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(77,
    'addRelationship',
    'custom/modules/Opportunities/OpportunitiesJjwg_MapsLogicHook.php',
    'OpportunitiesJjwg_MapsLogicHook',
    'addRelationship');
$hook_array['after_relationship_delete'] = Array();
$hook_array['after_relationship_delete'][] = Array(77,
    'deleteRelationship',
    'custom/modules/Opportunities/OpportunitiesJjwg_MapsLogicHook.php',
    'OpportunitiesJjwg_MapsLogicHook',
    'deleteRelationship');


$hook_array['after_ui_frame'][] = Array(71,
    'script test',
    'custom/modules/Opportunities/script.php',
    'script_branch',
    'script');

// Before save hook for sending email to unis on stage 1
$hook_array['before_save'][] = Array(78,
    'send email',
    'custom/modules/Opportunities/send_email.php',
    'send_email',
    'send'); // Checking Duplicate Mobile

?>