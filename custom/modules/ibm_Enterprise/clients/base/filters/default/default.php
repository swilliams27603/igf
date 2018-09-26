<?php
// created: 2018-09-26 11:15:41
$viewdefs['ibm_Enterprise']['base']['filter']['default'] = array (
  'default_filter' => 'all_records',
  'fields' => 
  array (
    'name' => 
    array (
    ),
    'ibm_enterprise_type' => 
    array (
    ),
    'geography' => 
    array (
    ),
    'enterprise_country' => 
    array (
    ),
    'address_street' => 
    array (
      'dbFields' => 
      array (
        0 => 'billing_address_street',
        1 => 'shipping_address_street',
      ),
      'vname' => 'LBL_STREET',
      'type' => 'text',
    ),
    'market' => 
    array (
    ),
    'address_city' => 
    array (
      'dbFields' => 
      array (
        0 => 'billing_address_city',
        1 => 'shipping_address_city',
      ),
      'vname' => 'LBL_CITY',
      'type' => 'text',
    ),
    'address_state' => 
    array (
      'dbFields' => 
      array (
        0 => 'billing_address_state',
        1 => 'shipping_address_state',
      ),
      'vname' => 'LBL_STATE',
      'type' => 'text',
    ),
    'address_postalcode' => 
    array (
      'dbFields' => 
      array (
        0 => 'billing_address_postalcode',
        1 => 'shipping_address_postalcode',
      ),
      'vname' => 'LBL_POSTAL_CODE',
      'type' => 'text',
    ),
    'address_country' => 
    array (
      'dbFields' => 
      array (
        0 => 'billing_address_country',
        1 => 'shipping_address_country',
      ),
      'vname' => 'LBL_COUNTRY',
      'type' => 'text',
    ),
    'phone_office' => 
    array (
    ),
    'ownership' => 
    array (
    ),
    'email' => 
    array (
    ),
    'assigned_user_name' => 
    array (
    ),
    '$owner' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
    ),
    '$favorite' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_FAVORITES_FILTER',
    ),
  ),
);