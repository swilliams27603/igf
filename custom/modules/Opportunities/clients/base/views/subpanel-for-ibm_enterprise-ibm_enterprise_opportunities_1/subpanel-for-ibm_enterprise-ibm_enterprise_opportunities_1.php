<?php
// created: 2018-09-26 11:44:30
$viewdefs['Opportunities']['base']['view']['subpanel-for-ibm_enterprise-ibm_enterprise_opportunities_1'] = array (
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
          'name' => 'name',
          'label' => 'LBL_LIST_OPPORTUNITY_NAME',
          'enabled' => true,
          'default' => true,
          'link' => true,
          'related_fields' => 
          array (
            0 => 'sales_status',
            1 => 'closed_revenue_line_items',
          ),
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
          'name' => 'imt_c',
          'label' => 'LBL_IMT',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'ibm_legal_entity_opportunities_1_name',
          'label' => 'LBL_IBM_LEGAL_ENTITY_OPPORTUNITIES_1_FROM_IBM_LEGAL_ENTITY_TITLE',
          'enabled' => true,
          'id' => 'IBM_LEGAL_ENTITY_OPPORTUNITIES_1IBM_LEGAL_ENTITY_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        4 => 
        array (
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'account_name',
          'sortable' => true,
        ),
        5 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);