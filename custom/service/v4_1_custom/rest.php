<?php
if(!defined('sugarEntry'))define('sugarEntry', true);

chdir('../../..');
require 'include/entryPoint.php';

$webservice_path = 'service/core/SugarRestService.php';
$webservice_class = 'SugarRestService';
$webservice_impl_class = 'SugarWebServiceImplv4_1_custom';
$webservice_impl_class_path = 'custom/service/v4_1_custom/SugarWebServiceImplv4_1_custom.php';

$registry_path = 'custom/service/v4_1_custom/registry.php';
$registry_class = 'registry_v4_1_custom';

$location = 'custom/service/v4_1_custom/rest.php';

require_once('service/core/webservice.php');

?>
