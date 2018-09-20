<?php
 // created: 2018-04-26 21:28:22
$dictionary['Opportunity']['fields']['other_supplier_c']['labelValue']='Other Supplier';
$dictionary['Opportunity']['fields']['other_supplier_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['other_supplier_c']['enforced']='';
$dictionary['Opportunity']['fields']['other_supplier_c']['dependency']='equal($supplier_c,"Other")';

 ?>