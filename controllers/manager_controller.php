<?php
require(ABS_PATH . 'models/manager_model.php');
class Manager_Controller
{
    
    function __construct()
    {
        $this->manager_model=new Manager_Model;
    }
    function postLater(){   //接收view端的迟到数组
        $later=$_POST['name'];
        $later_array = explode('/', $later);
        $later = $this->manager_model->add_later_data($later_array);
        echo $later;
    }

    function undone(){
        $this->manager_model->undone();
    }
}
