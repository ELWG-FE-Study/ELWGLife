<?php 

class Manager_Model {

	function add_later_data($later) {
		$con = mysql_connect("115.156.216.95","lidasong","123");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}

		$db_selected = mysql_select_db('db_elwg_life',$con);
		if (!$db_selected) {
			die('Could not connect: ' . mysql_error());
		}

		mysql_query("set names utf8");


		/*判断从controller层得到的迟到人名$later，若有人迟到，则把相应名字插入到数据库中的later表中*/
		 $length = count($later);
		 for ($i=0; $i < $length ; $i++) { 
		 	$sql = "INSERT INTO later (member_name) VALUES ('$later[$i]') ";
			$result = mysql_query($sql);
		 	// $sql1 = "UPDATE later SET label = '1' WHERE member_name = '$later_array[i]' ";
		 }
			if ($result) {
				return 1;
			}
			else
			{
				return 0;
			}
		// return $later;
		mysql_close($con);
	} 

	function change_duty_data() {
		$con = mysql_connect("115.156.216.95","lidasong","123");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}

		$db_selected = mysql_select_db('db_elwg_life',$con);
		if (!$db_selected) {
			die('Could not connect: ' . mysql_error());
		}
		mysql_query("set names utf8");
		
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

	/*function adjust_duty_data() {//调整每天值日信息
	

	}*/



	}
}

