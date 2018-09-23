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

$dictionary['ibm_Enterprise'] = array(
    'table' => 'ibm_enterprise',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'geography' => 
  array (
    'required' => false,
    'name' => 'geography',
    'vname' => 'LBL_GEOGRAPHY',
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
    'options' => 'geography_list',
    'dependency' => false,
  ),
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
  'enterprise_country' => 
  array (
    'required' => false,
    'name' => 'enterprise_country',
    'vname' => 'LBL_ENTERPRISE_COUNTRY',
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
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);

if (!class_exists('VardefManager')){
}
VardefManager::createVardef('ibm_Enterprise','ibm_Enterprise', array('basic','team_security','assignable','taggable','company'));