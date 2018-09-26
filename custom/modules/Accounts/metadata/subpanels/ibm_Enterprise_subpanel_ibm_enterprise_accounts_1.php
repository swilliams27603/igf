<?php
// created: 2018-09-26 11:41:25
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_ACCOUNT_NAME',
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
  'market_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_MARKET',
    'width' => 10,
  ),
  'ibm_legal_entity_accounts_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_IBM_LEGAL_ENTITY_ACCOUNTS_1_FROM_IBM_LEGAL_ENTITY_TITLE',
    'id' => 'IBM_LEGAL_ENTITY_ACCOUNTS_1IBM_LEGAL_ENTITY_IDA',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ibm_Legal_Entity',
    'target_record_key' => 'ibm_legal_entity_accounts_1ibm_legal_entity_ida',
  ),
  'dealer_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_DEALER_STATUS',
    'width' => 10,
  ),
);