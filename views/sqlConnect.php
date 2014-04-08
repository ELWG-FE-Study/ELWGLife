<?php
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