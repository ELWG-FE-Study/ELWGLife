<?php
require_once('../../base.php');
require(ABS_PATH . 'controllers/duty_controller.php');
$controller = new Duty_Controller();
$controller->login();

/*end of file page/ajax/search_contact.php*/