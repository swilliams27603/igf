<?php
// created: 2018-09-20 15:26:47
$dictionary["Call"]["fields"]["ibm_legal_entity_calls_1"] = array (
  'name' => 'ibm_legal_entity_calls_1',
  'type' => 'link',
  'relationship' => 'ibm_legal_entity_calls_1',
  'source' => 'non-db',
  'module' => 'ibm_Legal_Entity',
  'bean_name' => 'ibm_Legal_Entity',
  'side' => 'right',
  'vname' => 'LBL_IBM_LEGAL_ENTITY_CALLS_1_FROM_CALLS_TITLE',
  'id_name' => 'ibm_legal_entity_calls_1ibm_legal_entity_ida',
  'link-type' => 'one',
);
$dictionary["Call"]["fields"]["ibm_legal_entity_calls_1_name"] = array (
  'name' => 'ibm_legal_entity_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IBM_LEGAL_ENTITY_CALLS_1_FROM_IBM_LEGAL_ENTITY_TITLE',
  'save' => true,
  'id_name' => 'ibm_legal_entity_calls_1ibm_legal_entity_ida',
  'link' => 'ibm_legal_entity_calls_1',
  'table' => 'ibm_legal_entity',
  'module' => 'ibm_Legal_Entity',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["ibm_legal_entity_calls_1ibm_legal_entity_ida"] = array (
  'name' => 'ibm_legal_entity_calls_1ibm_legal_entity_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_IBM_LEGAL_ENTITY_CALLS_1_FROM_CALLS_TITLE_ID',
  'id_name' => 'ibm_legal_entity_calls_1ibm_legal_entity_ida',
  'link' => 'ibm_legal_entity_calls_1',
  'table' => 'ibm_legal_entity',
  'module' => 'ibm_Legal_Entity',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
