<?php

if(!defined('sugarEntry'))define('sugarEntry', true);

require_once('service/v4_1/SugarWebServiceImplv4_1.php');

class SugarWebServiceImplv4_1_custom extends SugarWebServiceImplv4_1
{

    public function login($user_auth, $application = '', $name_value_list = array()){
        return parent::login($user_auth, $application, $name_value_list);
    }
}

?>