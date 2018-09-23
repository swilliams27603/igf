<?php

class LegalEntityHooks
{
    function beforeSave($bean, $event, $args)
    {
        $GLOBALS['log']->fatal("Begin LegalEntity LogicHook: " . $bean->name);
        
        if (empty($bean->in_import) || empty($bean->from_acct_id)) {
            //$GLOBALS['log']->fatal("In Import: " . $bean->in_import);
            //$GLOBALS['log']->fatal("From Account: " . $bean->from_acct_id);
            //$GLOBALS['log']->fatal("Not Import. Done");
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
        $admin = BeanFactory::getBean('Users', '1');
        
        if ($admin && $admin->id == '1') {
            $GLOBALS['current_user'] = $admin;
        } else {
            $GLOBALS['log']->fatal("Could not set current_user to Admin. Results may be limited.");
        }
        
//$bean->from_account_id = '6b553adc-499a-11e8-8602-06d48441b777';
        
        $account = BeanFactory::getBean('Accounts', $bean->from_acct_id);
        
        if(!$account) {
            $GLOBALS['log']->fatal("Unable to retrieve Account: {$bean->from_acct_id}. Unable to move related data to Legal Entity Record.");
            return;
        }
        
        //$GLOBALS['log']->fatal("Loaded Account...");
        
        foreach($rels as $from => $to) {
            //$GLOBALS['log']->fatal("Processing Rels $from -> $to");
            
            if($account->load_relationship($from)) {
                //$GLOBALS['log']->fatal("Account Rel $from Loaded...");
                
                $ids = $account->$from->get();

                if (sizeof($ids)) {
                    //$GLOBALS['log']->fatal("Related ($from): " . print_r($ids,true));
                    
                    if($bean->load_relationship($to)) {
                        //$GLOBALS['log']->fatal("Legal Entity Rel $to Loaded...");
                        $bean->$to->add($ids);
                        //Calling with related id's deletes all rels of $from.
                        $account->$from->delete($account->id);
                        //$GLOBALS['log']->fatal("Added to Legal Entity and deleted from Account");
                    } else {
                        $GLOBALS['log']->fatal("Failed to load Legal Entity $to. Unable to move related data from Account.");
                    }
                } else {
                    //$GLOBALS['log']->fatal("Account has 0 Related $from records");
                }
            } else {
                $GLOBALS['log']->fatal("Failed to load Account Relationship $from. Unable to move related data to Legal Entity Record.");
            }   
        }
        
        $account->deleted = 1;
        $account->save();
        
        $GLOBALS['current_user'] = $orig_current_user;
        
        $GLOBALS['log']->fatal("End LegalEntity LogicHook: beforeSave");
    }
}