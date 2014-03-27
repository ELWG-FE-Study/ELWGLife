<?php 
require_once('../base.php');
// var_dump($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
require ABS_PATH . 'controllers/hello_controller.php';
$controller = new HelloController(); 
$controller->index(); 
/* End of file page/hello.php */ 