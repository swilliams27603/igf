<?php
// created: 2018-09-26 11:48:44
$viewdefs['Accounts']['base']['view']['subpanel-for-ibm_legal_entity-ibm_legal_entity_accounts_1'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'default' => true,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'geography_c',
          'label' => 'LBL_GEOGRAPHY',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'market_c',
          'label' => 'LBL_MARKET',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'ibm_enterprise_accounts_1_name',
          'label' => 'LBL_IBM_ENTERPRISE_ACCOUNTS_1_FROM_IBM_ENTERPRISE_TITLE',
          'enabled' => true,
          'id' => 'IBM_ENTERPRISE_ACCOUNTS_1IBM_ENTERPRISE_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'financier_c',
          'label' => 'LBL_FINANCIER',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'dealer_status_c',
          'label' => 'LBL_DEALER_STATUS',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);