<?php
// require_once('../base.php');
// require (ABS_PATH . 'views/sqlConnect.php');
class Contact_Model extends CI_Model {
   
    function __construct() {
       parent::__construct();
       $this->load->database();
    }

    function get_contact_data() {
        $sql = "SELECT * FROM contacts";
        $query = $this->db->query($sql);
        while ($row = $query->result_array()) {
            
            $backArray[] = $row;
        }
        return $backArray;
    }

    function insert_contact_data($name, $sex, $grade, $tel, $qq, $email){
        $sql = "SELECT * FROM contacts WHERE member_name = '$name' ";
        $query = $this->db->query($sql); 
        $data=array(
        	'member_name'=> $name,
        	'sex'=>$sex,
        	'grade'=>$grade,
        	'phone'=>$tel,
        	'qq'=>$qq,
        	'email'=>$email
        	);
        if ($query->num_rows()) {
        	$this->db->where('member_name',$name);
            $this->db->update('contacts',$data);

        } else {
            $this->db->insert('contacts',$data);
        }      
        // mysql_close($con);
		$result = 'ok';
        return $result;
}

    function search_contact_data($key) {
        $sql = "SELECT * FROM contacts WHERE member_name LIKE '%$key%' ";
        $query = $this->db->query($sql);
         while ($row=$query->result_array()){
            $contacts[] = $row;
         }
            for ($i=0; $i < sizeof($contacts); $i++) { 
            $backArray[$i] = array('0' => $contacts[$i]['member_name'],
                                    '1' => $contacts[$i]['sex'],
                                    '2' => $contacts[$i]['grade'],
                                    '3' => $contacts[$i]['phone'],
                                    '4' => $contacts[$i]['qq'],
                                    '5' =>$contacts[$i]['email'],
                                    );
        }
         
                     
        return $backArray;
    }
}