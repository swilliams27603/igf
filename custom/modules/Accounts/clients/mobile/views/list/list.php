<?php
$viewdefs['Accounts'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
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
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'website',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              2 => 
              array (
                'name' => 'email',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'phone_office',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'billing_address_street',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'billing_address_city',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'billing_address_state',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'billing_address_postalcode',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'billing_address_country',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'team_name',
                'enabled' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO',
                'enabled' => true,
                'id' => 'ASSIGNED_USER_ID',
                'link' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'annual_contract_value_c',
                'label' => 'LBL_ANNUAL_CONTRACT_VALUE',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'account_type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'parent_name',
                'label' => 'LBL_MEMBER_OF',
                'enabled' => true,
                'id' => 'PARENT_ID',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'geography_c',
                'label' => 'LBL_GEOGRAPHY',
                'enabled' => true,
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'dba_c',
                'label' => 'LBL_DBA',
                'enabled' => true,
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'duns_num',
                'label' => 'LBL_DUNS_NUM',
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
