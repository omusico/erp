<?php
// created: 2015-11-05 08:05:12
$dictionary["anmol_Marketing_activities"]["fields"]["anmol_marketing_campaigns_anmol_marketing_activities"] = array (
  'name' => 'anmol_marketing_campaigns_anmol_marketing_activities',
  'type' => 'link',
  'relationship' => 'anmol_marketing_campaigns_anmol_marketing_activities',
  'source' => 'non-db',
  'module' => 'anmol_marketing_campaigns',
  'bean_name' => 'anmol_marketing_campaigns',
  'vname' => 'LBL_ANMOL_MARKETING_CAMPAIGNS_ANMOL_MARKETING_ACTIVITIES_FROM_ANMOL_MARKETING_CAMPAIGNS_TITLE',
  'id_name' => 'anmol_mark980bmpaigns_ida',
);
$dictionary["anmol_Marketing_activities"]["fields"]["anmol_marketing_campaigns_anmol_marketing_activities_name"] = array (
  'name' => 'anmol_marketing_campaigns_anmol_marketing_activities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ANMOL_MARKETING_CAMPAIGNS_ANMOL_MARKETING_ACTIVITIES_FROM_ANMOL_MARKETING_CAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'anmol_mark980bmpaigns_ida',
  'link' => 'anmol_marketing_campaigns_anmol_marketing_activities',
  'table' => 'anmol_marketing_campaigns',
  'module' => 'anmol_marketing_campaigns',
  'rname' => 'name',
);
$dictionary["anmol_Marketing_activities"]["fields"]["anmol_mark980bmpaigns_ida"] = array (
  'name' => 'anmol_mark980bmpaigns_ida',
  'type' => 'link',
  'relationship' => 'anmol_marketing_campaigns_anmol_marketing_activities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ANMOL_MARKETING_CAMPAIGNS_ANMOL_MARKETING_ACTIVITIES_FROM_ANMOL_MARKETING_ACTIVITIES_TITLE',
);
