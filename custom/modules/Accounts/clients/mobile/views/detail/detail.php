<?php
$viewdefs['Accounts'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'detail' => 
      array (
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
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'labelsOnTop' => 1,
            'placeholders' => 1,
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
              1 => 
              array (
                'name' => 'dba_c',
                'label' => 'LBL_DBA',
              ),
              2 => 
              array (
                'name' => 'website',
                'displayParams' => 
                array (
                  'type' => 'link',
                ),
              ),
              3 => 'email',
              4 => 'billing_address_street',
              5 => 'billing_address_city',
              6 => 'billing_address_state',
              7 => 'billing_address_postalcode',
              8 => 'billing_address_country',
              9 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
              10 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'annual_contract_value_c',
                'label' => 'LBL_ANNUAL_CONTRACT_VALUE',
              ),
              11 => 
              array (
                'name' => 'duns_num',
                'comment' => 'DUNS number of the account',
                'label' => 'LBL_DUNS_NUM',
              ),
              12 => 
              array (
                'name' => 'geography_c',
                'label' => 'LBL_GEOGRAPHY',
              ),
              13 => 
              array (
                'name' => 'account_type',
                'comment' => 'The Company is of this type',
                'label' => 'LBL_TYPE',
              ),
              14 => 'team_name',
              15 => 'assigned_user_name',
              16 => 
              array (
                'name' => 'date_entered',
                'comment' => 'Date record created',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_ENTERED',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
