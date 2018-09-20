<?php

/*
Add distributor and supplier teams to Opportunity team while creating or editing the opty.
Add Team to opty is in before save hook.
Remove Team from opty is in after save as per the sugar documentation.
*/

$hook_array['before_save'][] = array(
                                1,
                                "Add distributor and supplier team to opty teams",
                                'custom/modules/Opportunities/DSTeam.php',
                                'DSTeam',
                                'AddDSTeam'
                                );

$hook_array['after_save'][] = array(
                                1,
                                "Remove distributor and supplier team to opty teams",
                                'custom/modules/Opportunities/DSTeam.php',
                                'DSTeam',
                                'RemoveDSTeam'
                                );