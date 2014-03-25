<?php

class Contact_model {
    function _construct() {
        static $con = mysql_connect("115.156.216.95", "lidasong", "123");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        static $db_selected = mysql_select_db('db_elwg_life', $con);
        if (!$db_selected) {
            die('Could not connect: ' . mysql_error());
        }
    }
    function get_contact_data（） {
        $sql = "SELECT * FROM contacts ";
        $result = mysql_query($sql);
        $backArray[] = array();
        if (!$result) {
            echo "no contacts information here in contacts";
            $message = 'Invalid query: ' . mysql_error() . "\n";
            die($message);
        }
        while ($row = mysql_fetch_array($result)) {
            $backArray[] = $row;
        }
        mysql_close($con);
        return $backArray;
    }
    function update_contact_data($name, $sex, $grade, $tel, $qq, $email) {
        $backArray[] = array();
        $sql = "SELECT member_name FROM contacts WHERE member_name=$name";
        $search = mysql_query($sql);
        if ($search) {
            $result = mysql_query(" UPDATE contacts SET sex='$sex',grade='$grade',phone='$tel',
        qq='$qq', email='$email' ");
        } else $result = mysql_query("INSERT INTO contacts (member_name,sex,grade,phone,qq,email)
 VALUES ('$name','$sex','$grade','$tel','$qq','$email')");
        if (!$result) {
            echo "no contacts information here in contacts";
            $message = 'Invalid query: ' . mysql_error() . "\n";
            die($message);
        }
        mysql_close($con);
    }
    function search_contact_data($key) {
        $sql = "SELECT member_name FROM contacts WHERE member_name LIKE '%$key%' ";
        $search = mysql_query($sql);
        $backArray = array();
        while ($row = mysql_fetch_array($search)) {
            $backArray[] = $row;
        }
        mysql_close($con);
        return $backArray;
    }
}
?>       
