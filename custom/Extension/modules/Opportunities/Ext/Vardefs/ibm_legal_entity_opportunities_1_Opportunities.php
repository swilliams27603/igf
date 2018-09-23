<?php
// created: 2018-09-20 15:24:01
$dictionary["Opportunity"]["fields"]["ibm_legal_entity_opportunities_1"] = array (
  'name' => 'ibm_legal_entity_opportunities_1',
  'type' => 'link',
  'relationship' => 'ibm_legal_entity_opportunities_1',
  'source' => 'non-db',
  'module' => 'ibm_Legal_Entity',
  'bean_name' => 'ibm_Legal_Entity',
  'side' => 'right',
  'vname' => 'LBL_IBM_LEGAL_ENTITY_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'ibm_legal_entity_opportunities_1ibm_legal_entity_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["ibm_legal_entity_opportunities_1_name"] = array (
  'name' => 'ibm_legal_entity_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IBM_LEGAL_ENTITY_OPPORTUNITIES_1_FROM_IBM_LEGAL_ENTITY_TITLE',
  'save' => true,
  'id_name' => 'ibm_legal_entity_opportunities_1ibm_legal_entity_ida',
  'link' => 'ibm_legal_entity_opportunities_1',
  'table' => 'ibm_legal_entity',
  'module' => 'ibm_Legal_Entity',
  'rname' => 'name',
  'populate_list' => array(
      'ibm_enterprise_ibm_legal_entity_1_name' => 'ibm_enterprise_opportunities_1_name',
      'ibm_enterprise_ibm_legal_entity_1ibm_enterprise_ida' => 'ibm_enterprise_opportunities_1ibm_enterprise_ida',
  ),
  'auto_populate' => true,  
);
$dictionary["Opportunity"]["fields"]["ibm_legal_entity_opportunities_1ibm_legal_entity_ida"] = array (
  'name' => 'ibm_legal_entity_opportunities_1ibm_legal_entity_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_IBM_LEGAL_ENTITY_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'ibm_legal_entity_opportunities_1ibm_legal_entity_ida',
  'link' => 'ibm_legal_entity_opportunities_1',
  'table' => 'ibm_legal_entity',
  'module' => 'ibm_Legal_Entity',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
