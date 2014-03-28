<?php 
require_once('../base.php');
//error_reporting(E_All ^ E_NOTICE);
require(ABS_PATH . 'controllers/contact_controller.php'); 
$controller = new Contact_Controller(); 
$controller->index(); 
/* End of file page/contacts.php */ 