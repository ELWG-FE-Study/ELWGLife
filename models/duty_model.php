<?php

class Duty_Model {
    function get_duty_contactdata() {
        $dbName = "db_elwg_life";
        $con = mysql_connect("115.156.216.95", "lidasong", "123");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        $db_selected = mysql_select_db($dbName, $con);
        if (!$db_selected) {
            die('Could not connect: ' . mysql_error());
        }
        $duty_result = array();
        mysql_query("set names utf8");
        $query = mysql_query("SELECT member_name FROM contacts
         WHERE on_duty=1 && duty_or_not='no' ");
        while ($contacts = mysql_fetch_array($query)) {
            $duty_result[] = $contacts;
        }
        mysql_close($con);
        return $duty_result;
}
    function get_duty_laterdata() {
        $dbName = "db_elwg_life";
        $con = mysql_connect("115.156.216.95", "lidasong", "123");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        $db_selected = mysql_select_db($dbName, $con);
        if (!$db_selected) {
            die('Could not connect: ' . mysql_error());
        }
        mysql_query("set names utf8");
        $duty_result = array();
        $query = mysql_query("SELECT member_name FROM later WHERE label='1' ");
        //值日未完成按钮触发label变化
        while ($later = mysql_fetch_array($query)) {
            $duty_result[] = $later;
        }
        mysql_close($con);
        return $duty_result;
    }
    function get_login_data() {
        $dbName = "db_elwg_life";
        $con = mysql_connect("115.156.216.95", "lidasong", "123");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        $db_selected = mysql_select_db($dbName, $con);
        if (!$db_selected) {
            die('Could not connect: ' . mysql_error());
        }
        mysql_query("set names utf8");
        $duty_result = array();
        $query = mysql_query("SELECT member_name FROM later WHERE label='1' ");
        //值日未完成按钮触发label变化
        while ($later = mysql_fetch_array($query)) {
            $duty_result[] = $later;
        }
        mysql_close($con);
        return $duty_result;
    }
    