<?php
require(ABS_PATH.'models/duty_model.php');//引入duty_model文件
//类名Duty_Controller
class Duty_Controller{

	function __construct() {
		$this ->duty_model = new Duty_Model();//新建一个duty_model中的Duty_Model类
	}

	function index() {//从mode l层获取数据
		
		$data = $this->duty_model->get_duty_data();
		//调用duty_model中的get_duty_data函数，从数据库中获得姓名并显示在值日列表中
		require(ABS_PATH . ('views/duty_view.php'));
		//加载duty_view.php页面,duty_view.php需要用到从duty_model中调用get_duty_data得到的数据
	}



	function login() {
		/*管理员输入正确的用户名和密码则正确登录，并保存cookie*/
		$username = $_POST['username'];
		$password = $_POST['password'];
		$info = array();
		$info = $this->duty_model->get_login_data();
		if($username == $info[0] && $password == $info[1]){
			//登陆页面
			//setcookie("name","loged",time()+24*3600);
		}

	}
}