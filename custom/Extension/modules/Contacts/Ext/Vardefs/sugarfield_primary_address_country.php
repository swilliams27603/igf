<?php
$dictionary['Contact']['fields']['primary_address_country']['full_text_search']=array (
    'enabled' => true,
    'boost' => '1',
    'searchable' => true,
);
$dictionary['Contact']['fields']['primary_address_country']['required']=true;
$dictionary['Contact']['fields']['primary_address_country']['type']='enum';
$dictionary['Contact']['fields']['primary_address_country']['options']='address_country_list';
