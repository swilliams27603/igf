<?php
// created: 2018-05-13 06:11:49
$listViewDefs['Users'] = array (
  'name' => 
  array (
    'width' => '30',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'related_fields' => 
    array (
      0 => 'last_name',
      1 => 'first_name',
    ),
    'orderBy' => 'last_name',
    'default' => true,
  ),
  'user_name' => 
  array (
    'width' => '5',
    'label' => 'LBL_USER_NAME',
    'link' => true,
    'default' => true,
  ),
  'title' => 
  array (
    'width' => '15',
    'label' => 'LBL_TITLE',
    'link' => true,
    'default' => true,
  ),
  'department' => 
  array (
    'width' => '15',
    'label' => 'LBL_DEPARTMENT',
    'link' => true,
    'default' => true,
  ),
  'email' => 
  array (
    'width' => '30',
    'sortable' => false,
    'label' => 'LBL_LIST_EMAIL',
    'link' => true,
    'default' => true,
  ),
  'phone_work' => 
  array (
    'width' => '25',
    'label' => 'LBL_LIST_PHONE',
    'link' => true,
    'default' => true,
  ),
  'status' => 
  array (
    'width' => '10',
    'label' => 'LBL_STATUS',
    'link' => false,
    'default' => true,
  ),
  'is_admin' => 
  array (
    'width' => '10',
    'label' => 'LBL_ADMIN',
    'link' => false,
    'default' => true,
  ),
  'is_group' => 
  array (
    'width' => '10',
    'label' => 'LBL_LIST_GROUP',
    'link' => true,
    'default' => false,
  ),
  'last_login' => 
  array (
    'type' => 'datetime',
    'readonly' => true,
    'label' => 'LBL_LAST_LOGIN',
    'width' => 10,
    'default' => false,
  ),
);