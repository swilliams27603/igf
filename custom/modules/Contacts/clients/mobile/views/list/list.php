<?php
// created: 2018-05-13 06:14:04
$viewdefs['Contacts']['mobile']['view']['list'] = array (
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
          'related_fields' => 
          array (
            0 => 'first_name',
            1 => 'last_name',
            2 => 'salutation',
          ),
        ),
        1 => 
        array (
          'name' => 'title',
          'label' => 'LBL_TITLE',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'email',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_OFFICE_PHONE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'phone_mobile',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'picture',
          'label' => 'LBL_PICTURE_FILE',
          'enabled' => true,
          'default' => true,
          'width' => '42',
        ),
        6 => 
        array (
          'name' => 'primary_address_street',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'primary_address_city',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'primary_address_state',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'primary_address_postalcode',
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'primary_address_country',
          'enabled' => true,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'alt_address_street',
          'enabled' => true,
          'default' => true,
        ),
        12 => 
        array (
          'name' => 'alt_address_city',
          'enabled' => true,
          'default' => true,
        ),
        13 => 
        array (
          'name' => 'alt_address_state',
          'enabled' => true,
          'default' => true,
        ),
        14 => 
        array (
          'name' => 'alt_address_postalcode',
          'enabled' => true,
          'default' => true,
        ),
        15 => 
        array (
          'name' => 'alt_address_country',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);