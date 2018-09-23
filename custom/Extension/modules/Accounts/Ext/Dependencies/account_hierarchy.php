<?php
$dependencies['Accounts']['legal_entity_country_deps'] = array(
    'hooks' => array('edit', 'view'),
    'trigger' => 'true',
    'triggerFields' => array('legal_entity_country_c'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'legal_entity_country_c',
                'value' => 'not(equal($legal_entity_country_c,""))',
            ),
        ),
    ),
);

$dependencies['Accounts']['enterprise_country_deps'] = array(
    'hooks' => array('edit', 'view'),
    'trigger' => 'true',
    'triggerFields' => array('enterprise_country_c'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'enterprise_country_c',
                'value' => 'not(equal($enterprise_country_c,""))',
            ),
        ),
    ),
);