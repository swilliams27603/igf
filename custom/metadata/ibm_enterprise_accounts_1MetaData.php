<?php
// created: 2018-09-20 15:40:57
$dictionary["ibm_enterprise_accounts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ibm_enterprise_accounts_1' => 
    array (
      'lhs_module' => 'ibm_Enterprise',
      'lhs_table' => 'ibm_enterprise',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ibm_enterprise_accounts_1_c',
      'join_key_lhs' => 'ibm_enterprise_accounts_1ibm_enterprise_ida',
      'join_key_rhs' => 'ibm_enterprise_accounts_1accounts_idb',
    ),
  ),
  'table' => 'ibm_enterprise_accounts_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'ibm_enterprise_accounts_1ibm_enterprise_ida' => 
    array (
      'name' => 'ibm_enterprise_accounts_1ibm_enterprise_ida',
      'type' => 'id',
    ),
    'ibm_enterprise_accounts_1accounts_idb' => 
    array (
      'name' => 'ibm_enterprise_accounts_1accounts_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_ibm_enterprise_accounts_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_ibm_enterprise_accounts_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ibm_enterprise_accounts_1ibm_enterprise_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_ibm_enterprise_accounts_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ibm_enterprise_accounts_1accounts_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'ibm_enterprise_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ibm_enterprise_accounts_1accounts_idb',
      ),
    ),
  ),
);