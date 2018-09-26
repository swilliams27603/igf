<?php

class AccountLogicHooks
{
    function beforeSave($bean, $event, $args)
    {
        //Only for new records.
        if (is_array($bean->fetched_row)) {
            return;
        } 
        
        if (!empty($bean->ibm_legal_entity_accounts_1ibm_legal_entity_ida) &&
            empty($bean->legal_entity_country_c)) {
            $le = BeanFactory::getBean('ibm_Legal_Entity', $bean->ibm_legal_entity_accounts_1ibm_legal_entity_ida);

            $bean->legal_entity_country_c = $le->legal_entity_country;
        }

        if (!empty($bean->ibm_enterprise_accounts_1ibm_enterprise_ida) &&
            empty($bean->enterprise_country_c)) { 
            $ent = BeanFactory::getBean('ibm_Enterprise', $bean->ibm_enterprise_accounts_1ibm_enterprise_ida);
                
            $bean->enterprise_country_c = $ent->enterprise_country;
        }
    }
}