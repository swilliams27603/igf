<?php

class LegalEntityHooks
{
    function beforeSave($bean, $event, $args)
    {
        if (empty($bean->in_import) || empty($bean->from_acct_id)) {
            return;
        }
        
        $rels = array(
            'contacts' => 'ibm_legal_entity_contacts_1',
            'tasks' => 'ibm_legal_entity_tasks_1',
            'notes' => 'ibm_legal_entity_notes_1',
            'meetings' => 'ibm_legal_entity_meetings_1',
            'calls' => 'ibm_legal_entity_calls_1',
            'opportunities' => 'ibm_legal_entity_opportunities_1',
        );
        
        $orig_current_user = $GLOBALS['current_user'];
        
        //Don't know which user will be doing the import. Use admin to get around
        //team restrictions. The from_account_id should only be filled for initial
        //data migration and not for new Legal Entities.
        if (!$GLOBALS['current_user']->is_admin) {
            $admin = BeanFactory::getBean('Users', '1');
        
            if ($admin && $admin->id == '1') {
                $GLOBALS['current_user'] = $admin;
            } else {
                $GLOBALS['log']->fatal("Could not set current_user to Admin. Results may be limited.");
            }
        }
        
        $account = BeanFactory::getBean('Accounts', $bean->from_acct_id);
        
        if(!$account) {
            $GLOBALS['log']->fatal("Unable to retrieve Account: {$bean->from_acct_id}. Unable to move related data to Legal Entity Record.");
            return;
        }
        
        foreach($rels as $from => $to) {
            if($account->load_relationship($from)) {
                $ids = $account->$from->get();

                if (sizeof($ids)) {
                    if($bean->load_relationship($to)) {
                        $bean->$to->add($ids);
                        //Calling with related id's deletes all rels of $from.
                        $account->$from->delete($account->id);
                    } else {
                        $GLOBALS['log']->fatal("Failed to load Legal Entity $to. Unable to move related data from Account.");
                    }
                } 
            } else {
                $GLOBALS['log']->fatal("Failed to load Account Relationship $from. Unable to move related data to Legal Entity Record.");
            }   
        }
        
        $account->deleted = 1;
        $account->save();
        
        $GLOBALS['current_user'] = $orig_current_user;
    }
}