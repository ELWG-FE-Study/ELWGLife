<?php
class Contact extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('contact_model');//载入models中contact_model.php文件
	}
	public function index(){
		$data['contact'] = $this->contact_model->get_contact_data();
		$this->load->view('contact_view',$data);
	}

	public function insert(){
		$name = $this->input->post('name',TRUE);
		$sex = $this->input->post('sex',TRUE);
		$grade = $this->input->post('grade',TRUE);
		$tel = $this->input->post('tel',TRUE);
		$qq = $this->input->post('qq',TRUE);
		$email = $this->input->post('email',TRUE);

		$post_data = $this->input->post();

		$result = $this->contact_model->insert_contact_data($name,$sex,$grade,$tel,$qq,$email);
		echo $result;
	}

	public function search(){
		 $key=$this->input->post('key',TRUE);
		//根据keywords进行搜索

		$result_search = $this->contact_model->search_contact_data($key);
		// for ($i=0; $i < sizeof($result_search); $i++) { 
		//     echo ;
		// }
		echo json_encode($result_search);
		return $result_search;
	}
}