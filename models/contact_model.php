<?php
class contact_model
{
	function _construct(){

	}

	function get_contact_data（）{
		$con = mysql_connect("115.156.216.95", "lidasong", "123");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db('db_elwg_life', $con);
if (!$db_selected) {
    die('Could not connect: ' . mysql_error());
}
$result = mysql_query("SELECT * FROM contacts ");
if (!$result) {
	echo "no contacts information here in contacts";
    $message = 'Invalid query: ' . mysql_error() . "\n";
    die($message);
}
while ($row = mysql_fetch_array($result)) {
	echo $row['member_name']." ".$row['sex']." ".$row['grade'].
	" ".$row['phone']." ".$row['qq']." ".$row['email'];
}
mysql_close($con);
}


}
?>