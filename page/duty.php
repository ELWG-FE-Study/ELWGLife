<?php
require_once('../base.php');
require(ABS_PATH . 'controllers/duty_controller.php'); 
$controller = new Duty_Controller(); 
$controller->index(); 
