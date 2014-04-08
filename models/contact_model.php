<?php
require (ABS_PATH . 'views/sqlConnect.php');
class Contact_Model {
   
    function __construct() {
       
    }

    function get_contact_data() {
        $sql = "SELECT * FROM contacts";
        $result = mysql_query($sql);
        if (!$result) {
            $message = 'Invalid query: ' . mysql_error() . "\n";
            die($message);
        }
        while ($row = mysql_fetch_array($result,MYSQL_BOTH)) {
            
            $backArray[] = $row;
        }
        //mysql_close($con);
        return $backArray;
    }

    function insert_contact_data($name, $sex, $grade, $tel, $qq, $email){
        $sql = "SELECT * FROM contacts WHERE member_name = '$name' ";
        $flag = mysql_query($sql); 

        if ($row = mysql_fetch_assoc($flag)) {
            $result = mysql_query(" UPDATE contacts SET sex='$sex',grade='$grade',phone='$tel',
            qq='$qq', email='$email' WHERE member_name = '$name' ");
        } else {
            $result = mysql_query("INSERT INTO contacts (member_name,sex,grade,phone,qq,email)
            VALUES ('$name','$sex','$grade','$tel','$qq','$email')");
        }      
        // mysql_close($con);


        if (!$flag) {
            $result = 'Invalid query: ' . mysql_error() . "\n";
        } else {
            $result = 'ok';
        }
        return $result;
}

    function search_contact_data($key) {
        $sql = "SELECT * FROM contacts WHERE member_name LIKE '%$key%' ";
        $result = mysql_query($sql);
        // $backArrayAll[] = array();//返回的数组
        if (!$result) {
            $message = 'Invalid query: ' . mysql_error() . "\n";
            die($message);
        }
        while($backArrayAll = mysql_fetch_array($result)){
            $contacts[] = $backArrayAll;
        }
        // mysql_close($con);

        // $backArray = array('member_name' => $backArrayAll['member_name'],
        //                     'sex' => $backArrayAll['sex'],
        //                     'grade' => $backArrayAll['grade'],
        //                     'phone' => $backArrayAll['phone'],
        //                     'qq' => $backArrayAll['qq'],
        //                     'email' =>$backArrayAll['email'],
        //                     );
        // return $backArray;
        // var_dump($contacts);
        for ($i=0; $i < sizeof($contacts); $i++) { 
            $backArray[$i] = array('0' => $contacts[$i]['member_name'],
                                    '1' => $contacts[$i]['sex'],
                                    '2' => $contacts[$i]['grade'],
                                    '3' => $contacts[$i]['phone'],
                                    '4' => $contacts[$i]['qq'],
                                    '5' =>$contacts[$i]['email'],
                                    );
            // var_dump($backArray[$i];);

        }
        // var_dump($backArray);
        // return $backArray;
        return $backArray;
    }
}
