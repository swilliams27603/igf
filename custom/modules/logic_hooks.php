<?php

/*
Add WW Team to opportunity and account module teams
*/

$hook_array['after_save'][] = array(
    1,
    "Add WW Team to all the modules",
    'custom/modules/ModuleTeams.php',
    'ModuleTeams',
    'addWWTeamToModule'
);
