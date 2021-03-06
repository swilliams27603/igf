<?php
$viewdefs['Opportunities'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Opportunities',
                'acl_action' => 'create',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              9 => 
              array (
                'type' => 'divider',
              ),
              10 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'related_fields' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                  2 => 'included_revenue_line_items',
                ),
              ),
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'account_name',
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
              ),
              1 => 'assigned_user_name',
              2 => 
              array (
                'name' => 'geography_c',
                'label' => 'LBL_GEOGRAPHY',
              ),
              3 => 
              array (
                'name' => 'imt_c',
                'label' => 'LBL_IMT',
              ),
              4 => 
              array (
                'name' => 'team_name',
              ),
              5 => 
              array (
                'name' => 'other_igf_sales_lead_c',
                'studio' => 'visible',
                'label' => 'LBL_OTHER_IGF_SALES_LEAD',
              ),
              6 => 'opportunity_type',
              7 => 
              array (
                'name' => 'offering_type_c',
                'label' => 'LBL_OFFERING_TYPE',
              ),
              8 => 
              array (
                'name' => 'description',
                'span' => 6,
              ),
              9 => 
              array (
                'name' => 'offering_detail_new_c',
                'studio' => 'visible',
                'label' => 'LBL_OFFERING_DETAIL_NEW',
                'span' => 6,
              ),
              10 => 
              array (
                'name' => 'supplier_c',
                'label' => 'LBL_SUPPLIER',
              ),
              11 => 
              array (
                'name' => 'distributor_c',
                'label' => 'LBL_DISTRIBUTOR',
              ),
              12 => 
              array (
                'name' => 'other_supplier_c',
                'label' => 'LBL_OTHER_SUPPLIER',
              ),
              13 => 
              array (
                'name' => 'other_none_distributor_c',
                'label' => 'LBL_OTHER_NONE_DISTRIBUTOR',
              ),
              14 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'acv_c',
                'label' => 'LBL_ACV',
              ),
              15 => 
              array (
                'name' => 'acv_calculation_new_c',
                'studio' => 'visible',
                'label' => 'LBL_ACV_CALCULATION_NEW',
              ),
              16 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'revenue_c',
                'label' => 'LBL_REVENUE',
              ),
              17 => 
              array (
              ),
              18 => 
              array (
                'name' => 'sales_stage',
              ),
              19 => 
              array (
                'name' => 'forecast_c',
                'label' => 'LBL_FORECAST',
              ),
              20 => 
              array (
                'name' => 'probability',
              ),
              21 => 
              array (
              ),
              22 => 
              array (
                'name' => 'next_step_new_c',
                'studio' => 'visible',
                'label' => 'LBL_NEXT_STEP_NEW',
              ),
              23 => 
              array (
                'name' => 'date_closed',
                'related_fields' => 
                array (
                  0 => 'date_closed_timestamp',
                ),
              ),
              24 => 
              array (
                'name' => 'date_of_next_step_c',
                'label' => 'LBL_DATE_OF_NEXT_STEP',
              ),
              25 => 
              array (
                'name' => 'amount',
                'type' => 'currency',
                'label' => 'LBL_LIKELY',
                'related_fields' => 
                array (
                  0 => 'amount',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'span' => 6,
              ),
              26 => 
              array (
                'name' => 'pricing_new_c',
                'studio' => 'visible',
                'label' => 'LBL_PRICING_NEW',
              ),
              27 => 
              array (
                'name' => 'credit_new_c',
                'studio' => 'visible',
                'label' => 'LBL_CREDIT_NEW',
              ),
              28 => 
              array (
                'name' => 'proof_of_funding_new_c',
                'studio' => 'visible',
                'label' => 'LBL_PROOF_OF_FUNDING_NEW',
              ),
              29 => 
              array (
                'name' => 'any_other_information_new_c',
                'studio' => 'visible',
                'label' => 'LBL_ANY_OTHER_INFORMATION_NEW',
              ),
              30 => 
              array (
                'name' => 'contracts_legal_c',
                'studio' => 'visible',
                'label' => 'LBL_CONTRACTS_LEGAL',
              ),
              31 => 
              array (
                'name' => 'antimoney_c',
                'studio' => 'visible',
                'label' => 'LBL_ANTIMONEY',
              ),
              32 => 
              array (
                'name' => 'closed_lost_reason_c',
                'label' => 'LBL_CLOSED_LOST_REASON',
              ),
              33 => 
              array (
                'name' => 'closed_lost_reason_details_c',
                'label' => 'LBL_CLOSED_LOST_REASON_DETAILS',
              ),
              34 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              35 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => true,
        ),
      ),
    ),
  ),
);
