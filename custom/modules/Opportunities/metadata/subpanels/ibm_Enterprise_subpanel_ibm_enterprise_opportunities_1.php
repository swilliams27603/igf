<?php
// created: 2018-09-26 11:44:30
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_OPPORTUNITY_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => 10,
    'default' => true,
  ),
  'geography_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_GEOGRAPHY',
    'width' => 10,
  ),
  'imt_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_IMT',
    'width' => 10,
  ),
  'ibm_legal_entity_opportunities_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_IBM_LEGAL_ENTITY_OPPORTUNITIES_1_FROM_IBM_LEGAL_ENTITY_TITLE',
    'id' => 'IBM_LEGAL_ENTITY_OPPORTUNITIES_1IBM_LEGAL_ENTITY_IDA',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ibm_Legal_Entity',
    'target_record_key' => 'ibm_legal_entity_opportunities_1ibm_legal_entity_ida',
  ),
  'account_name' => 
  array (
    'vname' => 'LBL_LIST_ACCOUNT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Accounts',
    'width' => 10,
    'target_record_key' => 'account_id',
    'target_module' => 'Accounts',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Employees',
    'width' => 10,
    'default' => true,
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);