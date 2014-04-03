<?php
<<<<<<< HEAD
error_reporting(E_ALL ^ E_NOTICE); 
=======
<<<<<<< HEAD
error_reporting(E_ALL ^ E_NOTICE); 
=======
error_reporting(E_ERROR | E_WARNING | E_PARSE);
>>>>>>> 9ec8b7abee4742d92222d3b5cc15b34367da803e
>>>>>>> cf41a5967f941c751b5f29a225b189a5204ec5a8
require_once('../base.php');
require(ABS_PATH . 'controllers/duty_controller.php'); 
$controller = new Duty_Controller(); 
$controller->index(); 
