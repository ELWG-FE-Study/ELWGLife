<?php
<<<<<<< HEAD
error_reporting(E_ALL ^ E_NOTICE); 
=======
error_reporting(E_ERROR | E_WARNING | E_PARSE);
>>>>>>> 9ec8b7abee4742d92222d3b5cc15b34367da803e
require_once('../base.php');
require(ABS_PATH . 'controllers/duty_controller.php'); 
$controller = new Duty_Controller(); 
$controller->index(); 
