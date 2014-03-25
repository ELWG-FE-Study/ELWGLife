###控制器接口文档

***

* controller通讯录部分设一个类Contact_Controller分三个个函数index()、update_controller()和search_contact()分别实现显示，添加通讯录，搜索通讯录功能。

* index()需要从model层提取联系人信息(使用函数get_contact_data（）)，并获取contact_view.php页面加载。

* update_controller()需要收集表单信息:姓名，性别，年纪，电话,QQ,email，并传送给model层。

* search_contact()需要接受从contact_view.php的搜索表单中传送过来的keyword，并转给model层进行搜索。