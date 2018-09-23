<?php
// created: 2018-09-20 15:24:33
$dictionary["Opportunity"]["fields"]["ibm_enterprise_opportunities_1"] = array (
  'name' => 'ibm_enterprise_opportunities_1',
  'type' => 'link',
  'relationship' => 'ibm_enterprise_opportunities_1',
  'source' => 'non-db',
  'module' => 'ibm_Enterprise',
  'bean_name' => 'ibm_Enterprise',
  'side' => 'right',
  'vname' => 'LBL_IBM_ENTERPRISE_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'ibm_enterprise_opportunities_1ibm_enterprise_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["ibm_enterprise_opportunities_1_name"] = array (
  'name' => 'ibm_enterprise_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IBM_ENTERPRISE_OPPORTUNITIES_1_FROM_IBM_ENTERPRISE_TITLE',
  'save' => true,
  'id_name' => 'ibm_enterprise_opportunities_1ibm_enterprise_ida',
  'link' => 'ibm_enterprise_opportunities_1',
  'table' => 'ibm_enterprise',
  'module' => 'ibm_Enterprise',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["ibm_enterprise_opportunities_1ibm_enterprise_ida"] = array (
  'name' => 'ibm_enterprise_opportunities_1ibm_enterprise_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_IBM_ENTERPRISE_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'ibm_enterprise_opportunities_1ibm_enterprise_ida',
  'link' => 'ibm_enterprise_opportunities_1',
  'table' => 'ibm_enterprise',
  'module' => 'ibm_Enterprise',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
