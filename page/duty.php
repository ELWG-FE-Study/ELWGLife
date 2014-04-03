<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once('../base.php');
require(ABS_PATH . 'controllers/duty_controller.php'); 
$controller = new Duty_Controller(); 
$controller->index(); 
