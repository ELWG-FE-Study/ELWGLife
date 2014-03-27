<?php 
require(ABS_PATH . 'models/hello_model.php');

class HelloController 
{
    private $hello_model;

    function __construct() {
        $this->hello_model = new HelloModel();
    }

    function index() {
        //从model层获取数据
        $data = $this->hello_model->get_hello_data();
        //加载主界面
        require(ABS_PATH . 'views/hello.php');
        //加载footer部分
        require(ABS_PATH . 'views/footer.php'); 
    }
}
/* End of file controllers/hello_controller.php */ 