<?php
require('../models/contact_model.php');//引入contact_model类

class contact_controller
{
	
	function __construct()
	{
		$this->contact_model = new contact_model();//新建一个contact_model.php中的contact_model类
	}

	function showcontact_controller()
	{
		 //从model层获取数据
        $data = $this->contact_model->get_contact_data();//调用contact_model中的get_contact_data函数，获得联系人信息
        //加载主界面
        require('../views/contact_view.php');
        /*加载contact_view.php页面，contact_view.php需要用到从contact_model中调用get_contact_data得到的数据*/
	}
	//当contact_view.php页面“完成”按钮点击时，需要调用本函数，用于提交表单,更新通讯录数据库
	function update_contact(name,sex,grade,tel,qq,email)//该函数参数是从contact_view.php中post过来的用户信息
	{
		
	}
}

?>