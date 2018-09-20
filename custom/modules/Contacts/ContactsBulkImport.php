<?php

// Enrico Simonetti
// 2017-03-16

require_once('custom/include/bulkimport/BulkImport.php');

class ContactsBulkImport extends BulkImport
{
    public function contactsBeforeSave($b, $data, $args)
    {
        if(!empty($data['external_assigned_user_key'])) {
            $sugar_id = $this->getSugarRecordId(BeanFactory::getBean('Users'), $data['external_assigned_user_key']);
            unset($b->external_assigned_user_key);

            if(!empty($sugar_id)) {
                $b->assigned_user_id = $sugar_id;
            } else {
                $b->assigned_user_id = 1;
            }
        }

        if(!empty($data['external_account_key'])) {
            $sugar_id = $this->getSugarRecordId(BeanFactory::getBean('Accounts'), $data['external_account_key']);
            unset($b->external_account_key);

            if(!empty($sugar_id)) {
                $b->account_id = $sugar_id;
            } else {
                $b->account_id = '';
            }
        }
        
    }
}
