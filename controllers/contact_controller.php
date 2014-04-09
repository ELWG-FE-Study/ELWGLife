<?php
require(ABS_PATH . 'models/contact_model.php');//引入contact_model文件
//类名Contact_Controller

class Contact_Controller     
{
    
    function __construct()
    {
        $this->contact_model = new Contact_Model();//新建一个contact_model.php中的Contact_Model类
    }

    function index()
    {
         //从model层获取数据
        $data = $this->contact_model->get_contact_data();
        //调用contact_model中的get_contact_data函数，获得联系人信息
        //加载主界面
        // $this->contact_model->update_contact_data('name','$sex','$grade','$tel','$qq','$email');
        require(ABS_PATH . 'views/contact_view.php');
        /*加载contact_view.php页面,contact_view.php需要用到从contact_model中调用get_contact_data得到的数据*/
    }
    
    //当contact_view.php页面“完成”按钮点击时，需要调用本函数，用于提交表单,更新通讯录数据库
    // function update_contact($name,$sex,$grade,$tel,$qq,$email)
    function insert_contact()
    {
        //该函数参数是从contact_view.php中post过来的用户信息,contact_view中调用该函数应该按照左边设置参数    

        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $grade = $_POST['grade'];
        $tel = $_POST['tel'];
        $qq = $_POST['qq'];
        $email = $_POST['email'];

        $post_data = array(
            'name' => $_POST['name'],
            'sex' => $_POST['sex'],
            'grade' => $_POST['grade'],
            'tel' => $_POST['tel'],
            'qq' => $_POST['qq'],
            'email' => $_POST['email']
        );

        $result = $this->contact_model->insert_contact_data($name,$sex,$grade,$tel,$qq,$email);
        echo $result;
        // if($result == 'ok') {
        //     echo json_encode($post_data);
        // } else {
        //     echo $result;
        // }
    }
    //当contact_view.php页面“搜索”按钮被点击时，调用本函数，提交表单，从数据库中进行搜索
    function search_contact()
    {
        $key=$_POST['key'];
        //根据keywords进行搜索

        $result_search = $this->contact_model->search_contact_data($key);
        echo json_encode($result_search);
        // var_dump($result_search);
        return $result_search;

    }
}

