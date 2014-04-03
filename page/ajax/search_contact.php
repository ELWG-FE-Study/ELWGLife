<?php
require_once('../../base.php');
require(ABS_PATH . 'controllers/contact_controller.php');
$controller = new Contact_Controller();
$controller->search_contact();
/*end of file page/ajax/search_contact.php*/