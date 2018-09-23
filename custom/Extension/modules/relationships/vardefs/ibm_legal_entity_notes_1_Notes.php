<?php
// created: 2018-09-20 15:27:26
$dictionary["Note"]["fields"]["ibm_legal_entity_notes_1"] = array (
  'name' => 'ibm_legal_entity_notes_1',
  'type' => 'link',
  'relationship' => 'ibm_legal_entity_notes_1',
  'source' => 'non-db',
  'module' => 'ibm_Legal_Entity',
  'bean_name' => 'ibm_Legal_Entity',
  'side' => 'right',
  'vname' => 'LBL_IBM_LEGAL_ENTITY_NOTES_1_FROM_NOTES_TITLE',
  'id_name' => 'ibm_legal_entity_notes_1ibm_legal_entity_ida',
  'link-type' => 'one',
);
$dictionary["Note"]["fields"]["ibm_legal_entity_notes_1_name"] = array (
  'name' => 'ibm_legal_entity_notes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IBM_LEGAL_ENTITY_NOTES_1_FROM_IBM_LEGAL_ENTITY_TITLE',
  'save' => true,
  'id_name' => 'ibm_legal_entity_notes_1ibm_legal_entity_ida',
  'link' => 'ibm_legal_entity_notes_1',
  'table' => 'ibm_legal_entity',
  'module' => 'ibm_Legal_Entity',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["ibm_legal_entity_notes_1ibm_legal_entity_ida"] = array (
  'name' => 'ibm_legal_entity_notes_1ibm_legal_entity_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_IBM_LEGAL_ENTITY_NOTES_1_FROM_NOTES_TITLE_ID',
  'id_name' => 'ibm_legal_entity_notes_1ibm_legal_entity_ida',
  'link' => 'ibm_legal_entity_notes_1',
  'table' => 'ibm_legal_entity',
  'module' => 'ibm_Legal_Entity',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
