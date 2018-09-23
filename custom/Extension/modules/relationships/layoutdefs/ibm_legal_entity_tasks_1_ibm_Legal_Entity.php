<?php
 // created: 2018-09-20 15:26:27
$layout_defs["ibm_Legal_Entity"]["subpanel_setup"]['ibm_legal_entity_tasks_1'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_IBM_LEGAL_ENTITY_TASKS_1_FROM_TASKS_TITLE',
  'get_subpanel_data' => 'ibm_legal_entity_tasks_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
