<?php
// created: 2018-09-26 11:41:25
$viewdefs['Accounts']['base']['view']['subpanel-for-ibm_enterprise-ibm_enterprise_accounts_1'] = array (
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
          'name' => 'ibm_legal_entity_accounts_1_name',
          'label' => 'LBL_IBM_LEGAL_ENTITY_ACCOUNTS_1_FROM_IBM_LEGAL_ENTITY_TITLE',
          'enabled' => true,
          'id' => 'IBM_LEGAL_ENTITY_ACCOUNTS_1IBM_LEGAL_ENTITY_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        4 => 
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