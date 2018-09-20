<?php
// created: 2018-03-26 17:19:23
$viewdefs['RevenueLineItems']['base']['menu']['quickcreate'] = array (
  'layout' => 'create',
  'label' => 'LNK_NEW_REVENUELINEITEM',
  'visible' => false,
  'icon' => 'fa-plus',
  'related' => 
  array (
    0 => 
    array (
      'module' => 'Accounts',
      'link' => 'revenuelineitems',
    ),
    1 => 
    array (
      'module' => 'Contacts',
      'link' => 'revenuelineitems',
    ),
    2 => 
    array (
      'module' => 'Opportunities',
      'link' => 'revenuelineitems',
    ),
  ),
);