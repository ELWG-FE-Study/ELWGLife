<?php 
require_once('../base.php')
error_reporting(E_ALL ^ E_NOTICE); 
require('../../controllers/contact_controller.php'); 
$controller = new Contact_Controller(); 
$controller->update_contact($name,$sex,$grade,$tel,$qq,$email);
/* End of file page/update_contact.php */ 