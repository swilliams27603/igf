<?php
$viewdefs['Opportunities'] =
array (
  'base' =>
  array (
    'view' =>
    array (
      'list' =>
      array (
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
                'related_fields' =>
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                  2 => 'included_revenue_line_items',
                ),
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
                'sortable' => true,
              ),
              2 =>
              array (
                'name' => 'sales_stage',
                'label' => 'LBL_SALES_STAGE',
                'enabled' => true,
                'default' => true,
              ),
              3 =>
              array (
                'name' => 'date_closed',
                'label' => 'LBL_DATE_CLOSED',
                'enabled' => true,
                'default' => true,
              ),
              4 =>
              array (
                'name' => 'amount',
                'label' => 'LBL_LIKELY',
                'enabled' => true,
                'default' => true,
                'related_fields' =>
                array (
                  0 => 'amount',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_format' => true,
                'type' => 'currency',
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              5 =>
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
              6 =>
              array (
                'name' => 'geography_c',
                'label' => 'LBL_GEOGRAPHY',
                'enabled' => true,
                'default' => true,
              ),
              7 =>
              array (
                'name' => 'imt_c',
                'label' => 'LBL_IMT',
                'enabled' => true,
                'default' => true,
              ),
              8 =>
              array (
                'name' => 'opportunity_type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'default' => true,
              ),
              9 =>
              array (
                'name' => 'next_step_new_c',
                'label' => 'LBL_NEXT_STEP_NEW',
                'enabled' => true,
                'default' => true,
                'sortable' => false,
              ),
              10 =>
              array (
                'name' => 'date_of_next_step_c',
                'label' => 'LBL_DATE_OF_NEXT_STEP',
                'enabled' => true,
                'default' => true,
              ),
              11 =>
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'default' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'readonly' => true,
                'sortable' => true,
              ),
              12 =>
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'enabled' => true,
                'default' => true,
                'id' => 'ASSIGNED_USER_ID',
                'link' => true,
                'sortable' => true,
              ),
              13 =>
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED',
                'enabled' => true,
                'default' => true,
                'id' => 'MODIFIED_USER_ID',
                'link' => true,
                'readonly' => true,
                'sortable' => true,
              ),
              14 =>
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              15 =>
              array (
                'name' => 'probability',
                'label' => 'LBL_PROBABILITY',
                'enabled' => true,
                'default' => true,
              ),
              16 =>
              array (
                'name' => 'forecast_c',
                'label' => 'LBL_FORECAST',
                'enabled' => true,
                'default' => true,
              ),
              17 =>
              array (
                'name' => 'team_name',
                'label' => 'LBL_LIST_TEAM',
                'enabled' => true,
                'default' => false,
                'type' => 'teamset',
              ),
              18 =>
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'default' => false,
                'sortable' => false,
              ),
              19 =>
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
              20 =>
              array (
                'name' => 'lead_source',
                'label' => 'LBL_LEAD_SOURCE',
                'enabled' => true,
                'default' => false,
              ),
              21 =>
              array (
                'name' => 'other_igf_sales_lead_c',
                'label' => 'LBL_OTHER_IGF_SALES_LEAD',
                'enabled' => true,
                'default' => false,
                'id' => 'USER_ID_C',
                'link' => true,
                'sortable' => false,
              ),
              22 =>
              array (
                'name' => 'closed_lost_reason_c',
                'label' => 'LBL_CLOSED_LOST_REASON',
                'enabled' => true,
                'default' => false,
              ),
              23 =>
              array (
                'name' => 'offering_type_c',
                'label' => 'LBL_OFFERING_TYPE',
                'enabled' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
