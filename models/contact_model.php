<?php

class Contact_model {
    
    function _construct() {

    }
    function get_contact_data（） {
    	oprateSql(1);
    }


    function update_contact_data($name, $sex, $grade, $tel, $qq, $email) {
	   	oprateSql(2);
}

$sql;
function oprateSql($value){
	switch (value) {
		$con = mysql_connect("115.156.216.95", "lidasong", "123");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        $db_selected = mysql_select_db('db_elwg_life', $con);
        if (!$db_selected) {
            die('Could not connect: ' . mysql_error());
        }       
		case 1:
        $sql="SELECT * FROM contacts ";
        $result = mysql_query($sql);
        if (!$result) {
            echo "no contacts information here in contacts";
            $message = 'Invalid query: ' . mysql_error() . "\n";
            die($message);
        }
        while ($row = mysql_fetch_array($result)) {
            echo $row['member_name'] . " " . $row['sex'] . " " . $row['grade'] . " " . $row['phone'] . " " . $row['qq'] . " " . $row['email'];
        }
        break;
        case 2:
        $sql="SELECT member_name FROM contacts";
        $search = mysql_query($sql);
        if ($search == $name) {
            $result = mysql_query(" UPDATE contacts SET sex='$sex',grade='$grade',phone='$tel',
		qq='$qq', email='$email' ");
        } else $result = mysql_query("INSERT INTO contacts (member_name,sex,grade,phone,qq,email)
 VALUES ('$name','$sex','$grade','$tel','$qq','$email')")
  if (!$result) {
            echo "no contacts information here in contacts";
            $message = 'Invalid query: ' . mysql_error() . "\n";
            die($message);
        }
        break;
        default:
        break;
	}
	
        mysql_close($con);
}

?>            
