<?php
// created: 2018-09-20 15:26:27
$dictionary["ibm_legal_entity_tasks_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ibm_legal_entity_tasks_1' => 
    array (
      'lhs_module' => 'ibm_Legal_Entity',
      'lhs_table' => 'ibm_legal_entity',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ibm_legal_entity_tasks_1_c',
      'join_key_lhs' => 'ibm_legal_entity_tasks_1ibm_legal_entity_ida',
      'join_key_rhs' => 'ibm_legal_entity_tasks_1tasks_idb',
    ),
  ),
  'table' => 'ibm_legal_entity_tasks_1_c',
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
    'ibm_legal_entity_tasks_1ibm_legal_entity_ida' => 
    array (
      'name' => 'ibm_legal_entity_tasks_1ibm_legal_entity_ida',
      'type' => 'id',
    ),
    'ibm_legal_entity_tasks_1tasks_idb' => 
    array (
      'name' => 'ibm_legal_entity_tasks_1tasks_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_ibm_legal_entity_tasks_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_ibm_legal_entity_tasks_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ibm_legal_entity_tasks_1ibm_legal_entity_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_ibm_legal_entity_tasks_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ibm_legal_entity_tasks_1tasks_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'ibm_legal_entity_tasks_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ibm_legal_entity_tasks_1tasks_idb',
      ),
    ),
  ),
);