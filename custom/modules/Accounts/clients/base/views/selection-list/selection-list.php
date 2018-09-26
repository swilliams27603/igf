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
$viewdefs['Accounts']['base']['view']['selection-list'] = array(
    'panels' => array(
        array(
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => array(
                array(
                    'name' => 'name',
                    'link' => true,
                    'label' => 'LBL_LIST_ACCOUNT_NAME',
                    'enabled' => true,
                    'default' => true,
                ),
                array (
                    'name' => 'geography_c',
                    'label' => 'LBL_GEOGRAPHY',
                    'enabled' => true,
                    'default' => true,
                ),
                array (
                    'name' => 'market_c',
                    'label' => 'LBL_MARKET',
                    'enabled' => true,
                    'default' => true,
                ),
                array (
                    'name' => 'ibm_enterprise_accounts_1_name',
                    'label' => 'LBL_IBM_ENTERPRISE_ACCOUNTS_1_FROM_IBM_ENTERPRISE_TITLE',
                    'enabled' => true,
                    'id' => 'IBM_ENTERPRISE_ACCOUNTS_1IBM_ENTERPRISE_IDA',
                    'link' => true,
                    'sortable' => false,
                    'default' => true,
                ),
                array (
                    'name' => 'ibm_legal_entity_accounts_1_name',
                    'label' => 'LBL_IBM_LEGAL_ENTITY_ACCOUNTS_1_FROM_IBM_LEGAL_ENTITY_TITLE',
                    'enabled' => true,
                    'id' => 'IBM_LEGAL_ENTITY_ACCOUNTS_1IBM_LEGAL_ENTITY_IDA',
                    'link' => true,
                    'sortable' => false,
                    'default' => true,
                ),
                array(
                    'name' => 'assigned_user_name',
                    'label' => 'LBL_LIST_ASSIGNED_USER',
                    'id' => 'ASSIGNED_USER_ID',
                    'enabled' => true,
                    'default' => false,
                ),
                array(
                    'name' => 'date_entered',
                    'type' => 'datetime',
                    'label' => 'LBL_DATE_ENTERED',
                    'enabled' => true,
                    'default' => false,
                    'readonly' => true,
                ),
            ),
        ),
    ),
);
