<?php

$hook_array['before_save'][] = array(
    1,
    "Used during import of Legal Entities",
    'custom/modules/ibm_Legal_Entity/LegalEntityHooks.php',
    'LegalEntityHooks',
    'beforeSave'
);
