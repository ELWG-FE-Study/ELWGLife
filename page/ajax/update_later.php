<?php 
require_once('../../base.php');
error_reporting(E_ALL ^ E_NOTICE); 
require(ABS_PATH . 'controllers/manage_controller.php'); 
$controller = new Manage_Controller(); 
// $controller->update_contact($_POST['name'],$_POST['sex'],$_POST['grade'],
// 	$_POST['tel'],$_POST['qq'],$_POST['email']);
$controller->update_later();
/* End of file page/ajax/update_contact.php */ 
