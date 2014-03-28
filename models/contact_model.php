<?php
class Contact_Model {

    function _construct() {

    }

    function get_contact_data() {
        $con = mysql_connect("115.156.216.95" , "lidasong" , "123");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        
        $db_selected = mysql_select_db('db_elwg_life', $con);
        if (!$db_selected) {
            die('Could not connect: ' . mysql_error());
        }

        mysql_query("set names utf8;");
        $sql = "SELECT * FROM contacts ";
        $result = mysql_query($sql);
        $backArray[] = array();
        if (!$result) {
            $message = 'Invalid query: ' . mysql_error() . "\n";
            die($message);
        }
        while ($row = mysql_fetch_array($result,MYSQL_BOTH)) {
            $backArray[] = $row;
        }
        mysql_close($con);
        return $backArray;
    }

    function update_contact_data($name, $sex, $grade, $tel, $qq, $email) {
        $con = mysql_connect("115.156.216.95" , "lidasong" , "123");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        
        $db_selected = mysql_select_db('db_elwg_life', $con);
        if (!$db_selected) {
            die('Could not connect: ' . mysql_error());
        }
        mysql_query("set names utf8;"); 
        $backArray[] = array();
        $sql = "SELECT member_name FROM contacts WHERE member_name='$name'";
        $search = mysql_query($sql,$con);
        if ($search) {
            $result = mysql_query(" UPDATE contacts SET sex='$sex',grade='$grade',phone='$tel',
            qq='$qq', email='$email' WHERE member_name='$name' ");
        } 
        //else {
         //   $result = mysql_query("INSERT INTO contacts VALUES ('$name','$sex','$grade','$tel','$qq','$email')",$con);
        //};


        mysql_close($con);
        if (!$result) {
            return 'Invalid query: ' . mysql_error() . "\n";
            // $message = 'Invalid query: ' . mysql_error() . "\n";
            // die($message);
        } else {
            return 'ok';
        }
        
    }

    function search_contact_data($key) {
        $con = mysql_connect("115.156.216.95" , "lidasong" , "123");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        
        $db_selected = mysql_select_db('db_elwg_life', $con);
        if (!$db_selected) {
            die('Could not connect: ' . mysql_error());
        }
        mysql_query("set names utf8;"); 
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
