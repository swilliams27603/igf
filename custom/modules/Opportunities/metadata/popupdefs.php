<?php
$popupMeta = array (
    'moduleMain' => 'Opportunity',
    'varName' => 'OPPORTUNITY',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'opportunities.name',
  'account_name' => 'accounts.name',
  'opportunity_type' => 'opportunities.opportunity_type',
  'sales_stage' => 'opportunities.sales_stage',
  'assigned_user_id' => 'opportunities.assigned_user_id',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'account_name',
  2 => 'opportunity_type',
  3 => 'sales_stage',
  4 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => 10,
  ),
  'account_name' => 
  array (
    'name' => 'account_name',
    'displayParams' => 
    array (
      'hideButtons' => 'true',
      'size' => 30,
      'class' => 'sqsEnabled sqsNoAutofill',
    ),
    'width' => 10,
  ),
  'opportunity_type' => 
  array (
    'name' => 'opportunity_type',
    'width' => 10,
  ),
  'sales_stage' => 
  array (
    'name' => 'sales_stage',
    'width' => 10,
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => 10,
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_OPPORTUNITY_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'id' => 'ACCOUNT_ID',
    'module' => 'Accounts',
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'name' => 'account_name',
  ),
  'SALES_STAGE' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_SALES_STAGE',
    'default' => true,
    'name' => 'sales_stage',
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'default' => true,
    'label' => 'LBL_LIKELY',
    'currency_format' => true,
    'width' => 10,
    'name' => 'amount',
  ),
  'PROBABILITY' => 
  array (
    'type' => 'int',
    'studio' => true,
    'label' => 'LBL_PROBABILITY',
    'width' => 10,
    'default' => true,
    'name' => 'probability',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
