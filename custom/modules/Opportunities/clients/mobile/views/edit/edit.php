<?php
// created: 2018-05-13 06:14:04
$viewdefs['Opportunities']['mobile']['view']['edit'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '1',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'useTabs' => false,
  ),
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'name' => 'LBL_PANEL_DEFAULT',
      'columns' => '1',
      'labelsOnTop' => 1,
      'placeholders' => 1,
      'newTab' => false,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
            'wireless_edit_only' => true,
          ),
        ),
        1 => 'amount',
        2 => 'account_name',
        3 => 'date_closed',
        4 => 'assigned_user_name',
        5 => 
        array (
          'name' => 'opportunity_type',
          'comment' => 'Type of opportunity (ex: Existing, New)',
          'label' => 'LBL_TYPE',
        ),
        6 => 
        array (
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'name' => 'revenue_c',
          'label' => 'LBL_REVENUE',
        ),
        7 => 'team_name',
        8 => 'sales_stage',
        9 => 'probability',
        10 => 
        array (
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'name' => 'acv_c',
          'label' => 'LBL_ACV',
        ),
        11 => 
        array (
          'name' => 'acv_calculation_new_c',
          'studio' => 'visible',
          'label' => 'LBL_ACV_CALCULATION_NEW',
        ),
        12 => 
        array (
          'name' => 'date_of_next_step_c',
          'label' => 'LBL_DATE_OF_NEXT_STEP',
        ),
        13 => 
        array (
          'name' => 'next_step_new_c',
          'studio' => 'visible',
          'label' => 'LBL_NEXT_STEP_NEW',
        ),
        14 => 
        array (
          'name' => 'closed_lost_reason_c',
          'label' => 'LBL_CLOSED_LOST_REASON',
        ),
        15 => 
        array (
          'name' => 'closed_lost_reason_details_c',
          'label' => 'LBL_CLOSED_LOST_REASON_DETAILS',
        ),
        16 => 
        array (
          'name' => 'geography_c',
          'label' => 'LBL_GEOGRAPHY',
        ),
        17 => 
        array (
          'name' => 'imt_c',
          'label' => 'LBL_IMT',
        ),
        18 => 
        array (
          'name' => 'offering_type_c',
          'label' => 'LBL_OFFERING_TYPE',
        ),
        19 => 
        array (
          'name' => 'other_offering_type_new_c',
          'studio' => 'visible',
          'label' => 'LBL_OTHER_OFFERING_TYPE_NEW',
        ),
        20 => 
        array (
          'name' => 'other_deal_type_new_c',
          'studio' => 'visible',
          'label' => 'LBL_OTHER_DEAL_TYPE_NEW',
        ),
        21 => 
        array (
          'name' => 'supplier_c',
          'label' => 'LBL_SUPPLIER',
        ),
        22 => 
        array (
          'name' => 'other_supplier_c',
          'label' => 'LBL_OTHER_SUPPLIER',
        ),
        23 => 
        array (
          'name' => 'distributor_c',
          'label' => 'LBL_DISTRIBUTOR',
        ),
        24 => 
        array (
          'name' => 'other_none_distributor_c',
          'label' => 'LBL_OTHER_NONE_DISTRIBUTOR',
        ),
      ),
    ),
  ),
);