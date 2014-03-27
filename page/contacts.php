<?php 
require_once('../base.php');
error_reporting(E_ALL ^ E_NOTICE); 
require('../controllers/contact_controller.php'); 
$controller = new Contact_Controller(); 
$controller->index(); 
/* End of file page/contacts.php */ 