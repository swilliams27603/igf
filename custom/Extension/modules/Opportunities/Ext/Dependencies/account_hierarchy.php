<?php
$dependencies['Opportunities']['account_hierarchy_deps'] = array(
    'hooks' => array('edit', 'view'),
    'trigger' => 'not(equal($account_name,""))',
    'triggerFields' => array('account_name'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'ibm_enterprise_opportunities_1_name',
                'value' => 'true',
            ),
        ),
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'ibm_legal_entity_opportunities_1_name',
                'value' => 'true',
            ),
        ),
    ),
    'notActions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'ibm_enterprise_opportunities_1_name',
                'value' => 'false',
            ),    
        ),
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'ibm_legal_entity_opportunities_1_name',
                'value' => 'false',
            ),
        ),
    ),
);