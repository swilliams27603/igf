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
                'name' => 'geography_c',
                'label' => 'LBL_GEOGRAPHY',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'market_c',
                'label' => 'LBL_MARKET',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'ibm_enterprise_accounts_1_name',
                'label' => 'LBL_IBM_ENTERPRISE_ACCOUNTS_1_FROM_IBM_ENTERPRISE_TITLE',
                'enabled' => true,
                'id' => 'IBM_ENTERPRISE_ACCOUNTS_1IBM_ENTERPRISE_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'ibm_legal_entity_accounts_1_name',
                'label' => 'LBL_IBM_LEGAL_ENTITY_ACCOUNTS_1_FROM_IBM_LEGAL_ENTITY_TITLE',
                'enabled' => true,
                'id' => 'IBM_LEGAL_ENTITY_ACCOUNTS_1IBM_LEGAL_ENTITY_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'dealer_contact_phone_c',
                'label' => 'LBL_DEALER_CONTACT_PHONE',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'email',
                'label' => 'LBL_EMAIL_ADDRESS',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              10 => 
              array (
                'name' => 'billing_address_country',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
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
                'name' => 'billing_address_city',
                'label' => 'LBL_LIST_CITY',
                'enabled' => true,
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'dealer_contact_c',
                'label' => 'LBL_DEALER_CONTACT',
                'enabled' => true,
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'irfs_acct_id_c',
                'label' => 'LBL_IRFS_ACCT_ID',
                'enabled' => true,
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'financier_c',
                'label' => 'LBL_FINANCIER',
                'enabled' => true,
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'grmg_c',
                'label' => 'LBL_GRMG',
                'enabled' => true,
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'dealer_status_c',
                'label' => 'LBL_DEALER_STATUS',
                'enabled' => true,
                'default' => false,
              ),
              18 => 
              array (
                'name' => 'legal_entity_country_c',
                'label' => 'LBL_LEGAL_ENTITY_COUNTRY',
                'enabled' => true,
                'default' => false,
              ),
              19 => 
              array (
                'name' => 'enterprise_country_c',
                'label' => 'LBL_ENTERPRISE_COUNTRY',
                'enabled' => true,
                'default' => false,
              ),
              20 => 
              array (
                'name' => 'dealer_contact_fax_c',
                'label' => 'LBL_DEALER_CONTACT_FAX',
                'enabled' => true,
                'default' => false,
              ),
              21 => 
              array (
                'name' => 'dealer_contact_country_c',
                'label' => 'LBL_DEALER_CONTACT_COUNTRY',
                'enabled' => true,
                'default' => false,
              ),
              22 => 
              array (
                'name' => 'phone_office',
                'label' => 'LBL_LIST_PHONE',
                'enabled' => true,
                'default' => false,
              ),
              23 => 
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
