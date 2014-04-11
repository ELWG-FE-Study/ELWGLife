<?php
class Manager extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('manager_model');
	}
	public function postLater(){
		$later=$this->input->post('name');
		// $laterstr = implode("",$later);//将数组转化为字符串
		$later_array = explode('/', $later);
		$later = $this->manager_model->add_later_data($later_array);
		echo $later;
	}
	public function done(){
		$this->manager_model->done();
	}
	}
}