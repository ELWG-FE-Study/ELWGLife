<?php
require (ABS_PATH . ('views/sqlConnect.php'));
class Duty_Model {
    function get_duty_contactdata($param) {
        if($param==='no'){
            $query = mysql_query("SELECT member_name FROM contacts
            WHERE on_duty=1 && duty_or_not='no' ");
            while ($contacts = mysql_fetch_array($query)) {
            $duty_result[] = $contacts;
            }
        }
        else if($param==="all"){
            $query = mysql_query("SELECT member_name FROM contacts
            WHERE on_duty=1 ");
            while ($contacts = mysql_fetch_array($query)) {
            $duty_result[] = $contacts;
            }
        }
        //mysql_close($con);
        return $duty_result;
    }
    function get_duty_laterdata() {
        $query = mysql_query("SELECT member_name FROM later WHERE label='1' ");
        //值日未完成按钮触发label变化
        while ($later = mysql_fetch_array($query)) {
            $duty_result[] = $later;
        }
        //mysql_close($con);
        return $duty_result;
    }
     
    function get_login_data() {
        $query = mysql_query("SELECT * FROM user");
        //值日未完成按钮触发label变化
        $user = mysql_fetch_array($query);
        mysql_close($con);
        return $user;
    }
   function confictSolve($data){
        mysql_query("UPDATE later SET member_name='$data',label=1 WHERE id=1");
        mysql_query("UPDATE contacts SET duty_or_not='yes' WHERE member_name='$data'");
        mysql_close($con);
    }
}
