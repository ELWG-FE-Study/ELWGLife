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
        mysql_query("set names utf8");
        $query = mysql_query("SELECT member_name FROM contacts WHERE on_duty='1' ",$con);
        while ($result= mysql_fetch_array($query)){
             $duty_result[] = $result;
        }
        return $duty_result;
    }

    function duty_login(){
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