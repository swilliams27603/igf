<?php
 // created: 2018-04-26 21:28:19
$dictionary['Opportunity']['fields']['closed_lost_reason_details_c']['labelValue']='Closed Lost Reason Details';
$dictionary['Opportunity']['fields']['closed_lost_reason_details_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['closed_lost_reason_details_c']['enforced']='';
$dictionary['Opportunity']['fields']['closed_lost_reason_details_c']['dependency']='equal($sales_stage,"Closed Lost")';

 ?>