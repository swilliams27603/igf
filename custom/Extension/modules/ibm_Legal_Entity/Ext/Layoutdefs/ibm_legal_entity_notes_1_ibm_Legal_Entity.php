<?php
 // created: 2018-09-20 15:27:26
$layout_defs["ibm_Legal_Entity"]["subpanel_setup"]['ibm_legal_entity_notes_1'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_IBM_LEGAL_ENTITY_NOTES_1_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'ibm_legal_entity_notes_1',
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
