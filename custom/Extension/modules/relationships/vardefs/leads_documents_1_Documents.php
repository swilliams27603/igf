<?php
// created: 2018-03-28 15:34:42
$dictionary["Document"]["fields"]["leads_documents_1"] = array (
  'name' => 'leads_documents_1',
  'type' => 'link',
  'relationship' => 'leads_documents_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'side' => 'right',
  'vname' => 'LBL_LEADS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'id_name' => 'leads_documents_1leads_ida',
  'link-type' => 'one',
);
$dictionary["Document"]["fields"]["leads_documents_1_name"] = array (
  'name' => 'leads_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_DOCUMENTS_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_documents_1leads_ida',
  'link' => 'leads_documents_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Document"]["fields"]["leads_documents_1leads_ida"] = array (
  'name' => 'leads_documents_1leads_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE_ID',
  'id_name' => 'leads_documents_1leads_ida',
  'link' => 'leads_documents_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
