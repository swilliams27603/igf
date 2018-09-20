<?php
 // created: 2018-04-03 19:32:16
$dictionary['Opportunity']['fields']['other_deal_type_c']['labelValue']='Other Deal Type';
$dictionary['Opportunity']['fields']['other_deal_type_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['other_deal_type_c']['enforced']='';
$dictionary['Opportunity']['fields']['other_deal_type_c']['dependency']='equal($deal_type_c,"Other")';

 ?>