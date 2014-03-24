###控制器接口文档

***

* controller通讯录部分设一个类contact_controller分俩个函数showcontact_controller()和update_controller()

* showcontact_controller()需要从model层提取联系人信息(使用函数get_contact_data（）)，并获取contact_view.php页面加载。

* update_controller()需要收集表单信息:姓名，性别，年纪，电话,QQ，email，并传送给model层。