<?php 
require (ABS_PATH . ('views/sqlConnect.php'));
class Manager_Model {

	function add_later_data($later) {
		/*判断从controller层得到的迟到人名$later，若有人迟到，则把相应名字插入到数据库中的later表中*/
		 $length = count($later);
		 for ($i=0; $i < $length ; $i++) { 
			$result = mysql_query("INSERT INTO later (member_name) VALUES ('$later[$i]') ");
		 }
			if ($result) {
				return 1;
			}
			else
			{
				return 0;
			}
		mysql_close($con);
	} 

	function change_duty_data() {
		/*根据controller层里当天值日人员$name是否值日，对contacts表里当天值日人员的duty_or_not标签进行修改*/
		$result = mysql_query("UPDATE contacts SET duty_or_not = 'no' 
				WHERE member_name = '$name' ");

		mysql_close($con);

		if (!$result) {
			return 'Invalid query: ' . mysql_error() . "\n";
		}
		else {
			return 'ok';
		}
	}
	function done(){ //使用done进行测试
		$flag = mysql_query("UPDATE later SET label = '0' WHERE label = '1' LIMIT 1");
		mysql_close($con);

	}
}

