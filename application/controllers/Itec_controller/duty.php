<?php
class Duty extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Itec_model/duty_model');
	}

	public function index(){
		$laterdata = $this->duty_model->get_duty_laterdata(); //返回later表数据中待值日的
		$contactdata = $this->duty_model->get_duty_contactdata('no'); //返回contact表中常规值日
		$contactdataAll=$this->duty_model->get_duty_contactdata('all');
		$laterdataNum=count($laterdata);
		$contactdataNum=count($contactdata);
		$contactNum=count($contactdataAll);//contact表中清洁总人数
		$cleanerNum=$laterdataNum+$contactdataNum;
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
		if(!count($laterdata)){         //解决later表为空时的冲突
			$this->duty_model->confictSolve($contactdata[0][0]);
		}
		$result = array();
		$weekMarker = $weekday[$day];
		if ($cleanerNum <= 14 - $weekMarker) {
			for ($m=0,$k = 0, $j = 0, $i = 0; $i <= 13; $i++) {
				if ($i < $weekMarker - 1) 
					array_push($result, '');
				else if ($j < $cleanerNum) {
						if($j<$laterdataNum)
						{
							array_push($result, $laterdata[$j][0]);
							$j++;
						}
						else if($k<$contactdataNum){
							array_push($result, $contactdata[$k][0]);
							$k++;
							$j++;
						}
				}
				   
				else {
					if($m >= $contactNum){
						$m = 0;
					}
						array_push($result, $contactdataAll[$m][0]);
						$m++;
				} 
			}
		}
		else for ($k=0,$j = 0, $i = 0; $i <= 13; $i++) {
			if ($i < $weekMarker - 1) array_push($result, '');
			else if($j<$laterdataNum){
				array_push($result, $laterdata[$j][0]);
				$j++;
			}
			else{
				array_push($result, $laterdata[$k][0]);
				$k++;
			}
		}

		$data['result'] = $result;
		$this->load->view('Itec_view/duty_view',$data);
	}

	public function login(){
		$username = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		$info = array();
		$info = $this->duty_model->get_login_data();

		
		if (!$this->input->cookie('state')) {
			echo 'ok';
		}

		elseif ($username == $info["username"] && $password == $info["password"]) {
			// setcookie("state","landed",time()+20000000);
			$cookie = array(
				'name'=>'state',
				'value'=>'landed',
				'expire'=>'2000');
			$this->input->setcookie($cookie);
			echo 'ok';
		} 

		else {
			echo "fail";
		}
	}
}