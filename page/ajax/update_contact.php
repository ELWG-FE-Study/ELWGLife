<?php 
error_reporting(E_ALL ^ E_NOTICE); 
require('../../controllers/contact_controller.php'); 
$controller = new Contact_Controller(); 
$controller->update_contact();
/* End of file page/update_contact.php */ 