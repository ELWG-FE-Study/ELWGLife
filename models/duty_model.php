<?php

class Duty_Model {

    function get_duty_data(){
        $dbName = "db_elwg_life";
        $con = mysql_connect("115.156.216.95" , "lidasong" , "123");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        $db_selected = mysql_select_db($dbName,$con);
        if (!$db_selected) {
            die('Could not connect: ' . mysql_error());
        }
        $duty_result = array();
        $duty_result1 = array();
        $duty_result2 = array();
        $duty_result3 = array();
        mysql_query("set names utf8");
        $query1 = mysql_query("SELECT member_name FROM later WHERE label='1' ");
        mysql_query("UPDATE later SET label='0' ");
        while ($later = mysql_fetch_array($query1)) {
            $duty_result1[] = $later;  
        }

        $query2 = mysql_query("SELECT member_name FROM contacts WHERE on_duty='1' && duty_or_not='no' ");
        while ($contacts = mysql_fetch_array($query2)) {
            $duty_result2[] = $contacts;  
        }
        if (!empty($duty_result2)) {
            mysql_close($con);
            $duty_result = array_merge($duty_result1,$duty_result2);
            return $duty_result;
        }
        else {
            mysql_query("UPDATE contacts SET duty_or_not = 'no' ");
            $query3 = mysql_query("SELECT member_name FROM contacts WHERE on_duty='1' && duty_or_not='no' ");
            while ($contacts = mysql_fetch_array($query3)) {
            $duty_result3[] = $contacts;
            }
            mysql_close($con);
            $duty_result = array_merge($duty_result1,$duty_result3);
            return $duty_result;
        } 

    }

    function get_login_data(){
        $dbName = "db_elwg_life";
        $con = mysql_connect("115.156.216.95" , "lidasong" , "123");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        $db_selected = mysql_select_db($dbName,$con);
        if (!$db_selected) {
            die('Could not connect: ' . mysql_error());
        }
        mysql_query("set names utf8");
        $query = mysql_query("SELECT * FROM user",$con);
        while ($result= mysql_fetch_array($query)){
             $login[] = $result;
        }
        return $login;
    }
}

?>