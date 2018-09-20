<?php
// created: 2018-05-13 06:14:04
$viewdefs['Opportunities']['mobile']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_LIST_OPPORTUNITY_NAME',
          'enabled' => true,
          'default' => true,
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'id' => 'ACCOUNT_ID',
          'link' => true,
          'sortable' => false,
        ),
        2 => 
        array (
          'name' => 'date_closed',
          'label' => 'LBL_DATE_CLOSED',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'opportunity_type',
          'label' => 'LBL_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'sales_stage',
          'label' => 'LBL_SALES_STAGE',
          'enabled' => true,
          'default' => true,
          'width' => '10',
        ),
        5 => 
        array (
          'name' => 'probability',
          'label' => 'LBL_PROBABILITY',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'lead_source',
          'label' => 'LBL_LEAD_SOURCE',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'acv_c',
          'label' => 'LBL_ACV',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
        ),
        8 => 
        array (
          'name' => 'amount',
          'label' => 'LBL_LIKELY',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
        ),
        9 => 
        array (
          'name' => 'date_of_next_step_c',
          'label' => 'LBL_DATE_OF_NEXT_STEP',
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'next_step_new_c',
          'label' => 'LBL_NEXT_STEP_NEW',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        11 => 
        array (
          'name' => 'next_step',
          'label' => 'LBL_NEXT_STEP',
          'enabled' => true,
          'default' => false,
        ),
        12 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
        ),
        13 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
          'enabled' => true,
          'default' => false,
          'id' => 'CREATED_BY',
          'link' => true,
          'readonly' => true,
        ),
        14 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_LIST_TEAM',
          'enabled' => true,
          'default' => false,
          'id' => 'TEAM_ID',
          'link' => true,
          'sortable' => false,
        ),
        15 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'enabled' => true,
          'default' => false,
          'id' => 'ASSIGNED_USER_ID',
          'link' => true,
        ),
        16 => 
        array (
          'name' => 'other_igf_sales_lead_c',
          'label' => 'LBL_OTHER_IGF_SALES_LEAD',
          'enabled' => true,
          'default' => false,
          'id' => 'USER_ID_C',
          'link' => true,
          'sortable' => false,
        ),
        17 => 
        array (
          'name' => 'modified_by_name',
          'label' => 'LBL_MODIFIED',
          'enabled' => true,
          'default' => false,
          'id' => 'MODIFIED_USER_ID',
          'link' => true,
          'readonly' => true,
        ),
        18 => 
        array (
          'name' => 'acv_calculation_new_c',
          'label' => 'LBL_ACV_CALCULATION_NEW',
          'enabled' => true,
          'default' => false,
          'sortable' => false,
        ),
        19 => 
        array (
          'name' => 'closed_lost_reason_c',
          'label' => 'LBL_CLOSED_LOST_REASON',
          'enabled' => true,
          'default' => false,
        ),
        20 => 
        array (
          'name' => 'closed_lost_reason_details_c',
          'label' => 'LBL_CLOSED_LOST_REASON_DETAILS',
          'enabled' => true,
          'default' => false,
        ),
        21 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
          'enabled' => true,
          'default' => false,
          'sortable' => false,
        ),
        22 => 
        array (
          'name' => 'revenue_c',
          'label' => 'LBL_REVENUE',
          'enabled' => true,
          'default' => false,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
        ),
        23 => 
        array (
          'name' => 'geography_c',
          'label' => 'LBL_GEOGRAPHY',
          'enabled' => true,
          'default' => false,
        ),
        24 => 
        array (
          'name' => 'imt_c',
          'label' => 'LBL_IMT',
          'enabled' => true,
          'default' => false,
        ),
        25 => 
        array (
          'name' => 'other_deal_type_new_c',
          'label' => 'LBL_OTHER_DEAL_TYPE_NEW',
          'enabled' => true,
          'default' => false,
          'sortable' => false,
        ),
        26 => 
        array (
          'name' => 'offering_type_c',
          'label' => 'LBL_OFFERING_TYPE',
          'enabled' => true,
          'default' => false,
        ),
        27 => 
        array (
          'name' => 'other_offering_type_new_c',
          'label' => 'LBL_OTHER_OFFERING_TYPE_NEW',
          'enabled' => true,
          'default' => false,
          'sortable' => false,
        ),
        28 => 
        array (
          'name' => 'supplier_c',
          'label' => 'LBL_SUPPLIER',
          'enabled' => true,
          'default' => false,
        ),
        29 => 
        array (
          'name' => 'other_supplier_c',
          'label' => 'LBL_OTHER_SUPPLIER',
          'enabled' => true,
          'default' => false,
        ),
        30 => 
        array (
          'name' => 'distributor_c',
          'label' => 'LBL_DISTRIBUTOR',
          'enabled' => true,
          'default' => false,
        ),
        31 => 
        array (
          'name' => 'other_none_distributor_c',
          'label' => 'LBL_OTHER_NONE_DISTRIBUTOR',
          'enabled' => true,
          'default' => false,
        ),
      ),
    ),
  ),
);