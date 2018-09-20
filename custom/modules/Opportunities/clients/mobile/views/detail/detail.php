<?php
// created: 2018-05-13 06:14:04
$viewdefs['Opportunities']['mobile']['view']['detail'] = array (
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
        5 => 'team_name',
        6 => 'sales_stage',
        7 => 'probability',
        8 => 
        array (
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'name' => 'acv_c',
          'label' => 'LBL_ACV',
        ),
        9 => 
        array (
          'name' => 'acv_calculation_new_c',
          'studio' => 'visible',
          'label' => 'LBL_ACV_CALCULATION_NEW',
        ),
        10 => 
        array (
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'name' => 'revenue_c',
          'label' => 'LBL_REVENUE',
        ),
        11 => 
        array (
          'name' => 'next_step_new_c',
          'studio' => 'visible',
          'label' => 'LBL_NEXT_STEP_NEW',
        ),
        12 => 
        array (
          'name' => 'date_of_next_step_c',
          'label' => 'LBL_DATE_OF_NEXT_STEP',
        ),
        13 => 
        array (
          'name' => 'opportunity_type',
          'comment' => 'Type of opportunity (ex: Existing, New)',
          'label' => 'LBL_TYPE',
        ),
        14 => 
        array (
          'name' => 'geography_c',
          'label' => 'LBL_GEOGRAPHY',
        ),
        15 => 
        array (
          'name' => 'imt_c',
          'label' => 'LBL_IMT',
        ),
        16 => 
        array (
          'name' => 'other_deal_type_new_c',
          'studio' => 'visible',
          'label' => 'LBL_OTHER_DEAL_TYPE_NEW',
        ),
        17 => 
        array (
          'name' => 'offering_type_c',
          'label' => 'LBL_OFFERING_TYPE',
        ),
        18 => 
        array (
          'name' => 'other_offering_type_new_c',
          'studio' => 'visible',
          'label' => 'LBL_OTHER_OFFERING_TYPE_NEW',
        ),
        19 => 
        array (
          'name' => 'offering_detail_c',
          'label' => 'LBL_OFFERING_DETAIL',
        ),
        20 => 
        array (
          'name' => 'supplier_c',
          'label' => 'LBL_SUPPLIER',
        ),
        21 => 
        array (
          'name' => 'other_supplier_c',
          'label' => 'LBL_OTHER_SUPPLIER',
        ),
        22 => 
        array (
          'name' => 'distributor_c',
          'label' => 'LBL_DISTRIBUTOR',
        ),
        23 => 
        array (
          'name' => 'other_none_distributor_c',
          'label' => 'LBL_OTHER_NONE_DISTRIBUTOR',
        ),
        24 => 
        array (
          'name' => 'closed_lost_reason_c',
          'label' => 'LBL_CLOSED_LOST_REASON',
        ),
        25 => 
        array (
          'name' => 'closed_lost_reason_details_c',
          'label' => 'LBL_CLOSED_LOST_REASON_DETAILS',
        ),
        26 => 
        array (
          'name' => 'other_igf_sales_lead_c',
          'studio' => 'visible',
          'label' => 'LBL_OTHER_IGF_SALES_LEAD',
        ),
        27 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
      ),
    ),
  ),
);