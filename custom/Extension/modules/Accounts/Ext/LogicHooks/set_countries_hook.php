<?php

$hook_array['before_save'][] = array(
    1,
    "Set LE/Ent Countries",
    'custom/modules/Accounts/AccountLogicHooks.php',
    'AccountLogicHooks',
    'beforeSave'
);
