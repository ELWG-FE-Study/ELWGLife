<?php
require_once('../../base.php');
require(ABS_PATH . 'controllers/manager_controller.php');
$controller = new Manager_Controller();
$controller->done();
