<?php 
require_once('../../base.php');
error_reporting(E_ALL ^ E_NOTICE); 
require(ABS_PATH . 'controllers/manager_controller.php'); 
$controller = new Manager_Controller(); 
// $controller->update_contact($_POST['name'],$_POST['sex'],$_POST['grade'],
// 	$_POST['tel'],$_POST['qq'],$_POST['email']);
$controller->postLater();
/* End of file page/ajax/update_contact.php */ 
