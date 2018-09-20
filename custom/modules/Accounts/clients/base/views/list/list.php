<?php
$viewdefs['Accounts'] = 
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
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'width' => 'xlarge',
              ),
              1 => 
              array (
                'name' => 'billing_address_city',
                'label' => 'LBL_LIST_CITY',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'billing_address_country',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'phone_office',
                'label' => 'LBL_LIST_PHONE',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'email',
                'label' => 'LBL_EMAIL_ADDRESS',
                'enabled' => true,
                'default' => true,
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
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              9 => 
              array (
                'name' => 'parent_name',
                'label' => 'LBL_MEMBER_OF',
                'enabled' => true,
                'id' => 'PARENT_ID',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'dba_c',
                'label' => 'LBL_DBA',
                'enabled' => true,
                'default' => false,
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
