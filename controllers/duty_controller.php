<?php

require(ABS_PATH.'models/duty_model.php');//引入duty_model文件
class Duty_Controller {//类名Duty_Controller
    function __construct() {
        $this->duty_model = new Duty_Model(); //新建一个duty_model中的Duty_Model类
        
    }
    function index() { //从mode l层获取数据
        $laterdata = $this->duty_model->get_duty_laterdata(); //返回later表数据中待值日的
        $contactdata = $this->duty_model->get_duty_contactdata(); //返回contact表中常规值日
        $weekday = array(
            "Monday" => 1,
            "Tuesday" => 2,
            "Wednesday" => 3,
            "Thursday" => 4,
            "Friday" => 5,
            "Saturday" => 6,
            "Sunday" => 7
        );
        $time = time();
        $day = date("l", $time);
        $contactdataNum = count($contactdata);
        $result = array();
        $data[] = array();
        $data = array_merge($laterdata, $contactdata);
        $weekMarker = $weekday[$day];
        $dataCount = count($data);
        if ($dataCount < 14 - $weekMarker) {
            for ($k = 0, $j = 0, $i = 0; $i <= 13; $i++) {
                if ($i < $weekMarker - 1) array_push($result, '');
                else if ($j < $dataCount) {
                    array_push($result, $data[$j][0]);
                    $j++;
                } else {
                    if ($k < $contactdataNum) {
                        array_push($result, $contactdata[$k][0]);
                        $k++;
                    } else $k = 0;
                }
            }
        } else for ($j = 0, $i = 0; $i <= 13; $i++) {
            if ($i < $weekMarker - 1) array_push($result, '');
            else {
                array_push($result, $data[$j][0]);
                $j++;
            }
        }
        require (ABS_PATH . 'views/duty_view.php');
        
    }
    function login() {                  //管理员输入正确的用户名和密码则正确登录，并保存cookie
        $username = $_POST["username"];
        $password = $_POST["password"];
        $charge = $this->duty_model->get_login_data($username,$password);
        }
    }
}