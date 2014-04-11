<?php 
class Manager_Model extends CI_Model{
	function __construct(){
		parent::__construct();
        $this->load->database();
	}
	function add_later_data($later) {
		/*判断从controller层得到的迟到人名$later，若有人迟到，则把相应名字插入到数据库中的later表中*/
		 $length = count($later);
		 if(!$length)
		 	return 0;	//为空即返回
		 for($j=0;$j<$length;$j++){
		 	$this->db->set('member_name',$later[$j]);
			$this->db->insert('later');
		 }
		 	
		// mysql_close($con);
	} 

	// function change_duty_data() {
	// 	/*根据controller层里当天值日人员$name是否值日，对contacts表里当天值日人员的duty_or_not标签进行修改*/

	// 	$result = mysql_query("UPDATE contacts SET duty_or_not = 'no' 
	// 			WHERE member_name = '$name' ");

	// 	// mysql_close($con);

	// 	if (!$result) {
	// 		return 'Invalid query: ' . mysql_error() . "\n";
	// 	}
	// 	else {
	// 		return 'ok';
	// 	}
	// }
	function done(){ //使用done进行测试
		$data=array(
			'label'=>0;
			);
		$this->db->where('label','1');
		$this->db->limit(1);
		$this->db->update( 'laater',$data);
		// mysql_close($con);

	}
}

