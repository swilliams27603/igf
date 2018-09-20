<?php
$viewdefs['base']['view']['multiple-file-upload-documents'] = array(
    'dashlets' => array(
        array(
            'label' => 'Multiple file upload',
            'description' => 'Multiple file upload to create documents',
            'config' => array(
            ),
            'preview' => array(
            ),
            'filter' => array(
                'modules' => array(
                    'Accounts',
                    'Contacts',
                    'Opportunities',
                    'Calls',
                    'Meetings',
                    'Tasks',
                    'Leads',
                    'Bugs',
                    'Cases',
                    'RevenueLineItems',
                    'Quotes',
                    'Contracts'
                ),
                'view' => array(
                    'record'
                )
            )
        ),
    ),
    'fields' => array(
        
    )
);
