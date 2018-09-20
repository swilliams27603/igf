<?php

// Enrico Simonetti
// 2017-03-16

require_once('custom/include/bulkimport/BulkImport.php');

class UsersBulkImport extends BulkImport
{
    public function usersBeforeSave($b, $data, $args)
    {
      if(!empty($data['external_reports_to_user_key'])) {
          $sugar_id = $this->getSugarRecordId(BeanFactory::getBean('Users'), $data['external_reports_to_user_key']);
          unset($b->external_reports_to_user_key);

          if(!empty($sugar_id)) {
              $b->reports_to_id = $sugar_id;
          } else {
              $GLOBALS['log']->fatal('We could not find "' . $data['external_reports_to_user_key'] . '" from module ' .  $b->module_dir);
              $b->reports_to_id = '';
          }
      }
    }
}
