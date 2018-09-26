<?php
// created: 2018-09-26 11:48:43
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
  'ibm_enterprise_accounts_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_IBM_ENTERPRISE_ACCOUNTS_1_FROM_IBM_ENTERPRISE_TITLE',
    'id' => 'IBM_ENTERPRISE_ACCOUNTS_1IBM_ENTERPRISE_IDA',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ibm_Enterprise',
    'target_record_key' => 'ibm_enterprise_accounts_1ibm_enterprise_ida',
  ),
  'financier_c' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_FINANCIER',
    'width' => 10,
    'default' => true,
  ),
  'dealer_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_DEALER_STATUS',
    'width' => 10,
  ),
);