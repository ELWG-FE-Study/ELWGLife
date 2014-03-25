<?php 
require('../models/hello_model.php');

class HelloController 
{
    private $hello_model;

    function __construct() {
        $this->hello_model = new HelloModel();//新建一个HelloModel类
    }

    function index() {
        //从model层获取数据
        $data = $this->hello_model->get_hello_data();
        //加载主界面
        require('../views/hello.php');
        //加载footer部分
        require('../views/footer.php'); 
    }
}
/* End of file controllers/hello_controller.php */ 