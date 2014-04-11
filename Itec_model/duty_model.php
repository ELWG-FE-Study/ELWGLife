<?php
class Duty_Model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function get_duty_contactdata($param) {
        if($param==='no'){
            $sql="SELECT member_name FROM contacts WHERE on_duty=1 && duty_or_not='no' ";
            $query = $this->db->query($sql);
            while ($row = $query->result_array()) {
                $duty_result[] = $row;
            }
            if (count($duty_result)==0) {
                $sql="UPDATE contacts SET duty_or_not='no' WHERE on_duty = '1' ";
                $query = $this->db->query($sql);                
            }
        }
        else if($param==="all"){
            $sql="SELECT member_name FROM contacts
            WHERE on_duty=1 ";
            $query = $this->db->query($sql);
            while ($row = $query->result_array()) {
            $duty_result[] = $row;
            }
        }
        //mysql_close($con);
        return $duty_result;
    }
    function get_duty_laterdata() {
        $sql="SELECT member_name FROM later WHERE label='1' ";
        $query = $this->db->query($sql);
        //值日未完成按钮触发label变化
        while ($row = $query->result_array()) {
            $duty_result[] = $row;
        }
        //mysql_close($con);
        return $duty_result;
    }
     
    function get_login_data() {
        $sql="SELECT * FROM user";
        $query = $this->db->query($sql);
        //值日未完成按钮触发label变化
        $user = $query->result_array();
        // mysql_close($con);
        return $user;
    }
   function confictSolve($data){
        $this->db->query("UPDATE later SET member_name='$data',label=1 WHERE id=1");
         $this->db->query("UPDATE contacts SET duty_or_not='yes' WHERE member_name='$data'");
        // mysql_close($con);
    }
}
