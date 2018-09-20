<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$viewdefs['Home']['base']['view']['weblink'] = array(
    'dashlets' => array(
        array(
            'label' => 'Web Link',
            'description' => 'Web Link',
            'config' => array(
                'url' => '',
                'module' => 'Home',
                'limit' => 3,
            ),
            'preview' => array(
                'title' => 'web link',
                'url' => '',
                'limit' => '3',
                'module' => 'Home',
            ),
        ),
    ),
    'config' => array(
        'fields' => array(
            array(
                'type' => 'span',
                'name' => 'url',
                'label' => 'LBL_DASHLET_WEBPAGE_URL',
                'help' => 'LBL_DASHLET_WEBPAGE_URL_HELP',
            ),
            array(
                'name' => 'limit',
                'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
                'type' => 'enum',
                'options' => 'dashlet_webpage_limit_options',
            ),
        ),
    ),
    'view_panel' => array(
        array(
            'type' => 'url',
            'name' => 'url',
            'label' => 'LBL_DASHLET_WEBPAGE_URL',
            'width' => '100%',

        ),
    ),
);
