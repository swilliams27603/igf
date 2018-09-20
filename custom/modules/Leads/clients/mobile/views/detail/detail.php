<?php
// created: 2018-05-13 06:14:04
$viewdefs['Leads']['mobile']['view']['detail'] = array (
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
        0 => 'full_name',
        1 => 'title',
        2 => 'account_name',
        3 => 'phone_work',
        4 => 'phone_mobile',
        5 => 'phone_home',
        6 => 'email',
        7 => 'primary_address_street',
        8 => 'primary_address_city',
        9 => 'primary_address_state',
        10 => 'primary_address_postalcode',
        11 => 'primary_address_country',
        12 => 'alt_address_street',
        13 => 'alt_address_city',
        14 => 'alt_address_state',
        15 => 'alt_address_postalcode',
        16 => 'alt_address_country',
        17 => 'status',
        18 => 
        array (
          'name' => 'lead_source',
          'comment' => 'Lead source (ex: Web, print)',
          'label' => 'LBL_LEAD_SOURCE',
        ),
        19 => 'assigned_user_name',
        20 => 'team_name',
        21 => 
        array (
          'name' => 'initiatives_c',
          'label' => 'LBL_INITIATIVES',
        ),
      ),
    ),
  ),
);