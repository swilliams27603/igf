<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$dictionary['ibm_Legal_Entity'] = array(
    'table' => 'ibm_legal_entity',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'name' => 
  array (
    'name' => 'name',
    'type' => 'name',
    'dbType' => 'varchar',
    'vname' => 'LBL_NAME',
    'len' => '255',
    'comment' => 'Name of the Company',
    'unified_search' => true,
    'full_text_search' => 
    array (
      'enabled' => true,
      'boost' => '1.75',
      'searchable' => true,
    ),
    'audited' => true,
    'required' => true,
    'importable' => 'required',
    'duplicate_on_record_copy' => 'always',
    'merge_filter' => 'disabled',
    'massupdate' => false,
    'no_default' => false,
    'comments' => 'Name of the Company',
    'help' => '',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'reportable' => true,
    'pii' => false,
    'default' => '',
    'calculated' => false,
    'size' => '20',
  ),
  'legal_entity_country' => 
  array (
    'required' => false,
    'name' => 'legal_entity_country',
    'vname' => 'LBL_LEGAL_ENTITY_COUNTRY',
    'type' => 'enum',
    'massupdate' => true,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'default' => '',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'countries_dom',
    'dependency' => false,
  ),
  'from_acct_id' =>
  array(
    'name' => 'from_acct_id',
    'vname' => 'LBL_FROM_ACCT_ID',
    'type' => 'varchar',
    'len' => '40',
    'audited' => false,
    'required' => false,
    'importable' => true,  
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);

if (!class_exists('VardefManager')){
}
VardefManager::createVardef('ibm_Legal_Entity','ibm_Legal_Entity', array('basic','team_security','assignable','taggable','company'));