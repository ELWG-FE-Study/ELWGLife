<?php 
class HelloModel {
    function get_hello_data() {
        //这里应该对数据库进行操作，然后返回相关数据
        $data['info'] = 'hehe';
        $data['list'] = array(1, 2, 3 ,5, 8);
        return $data;
    }
}
/* End of file models/hello_model.php */ 