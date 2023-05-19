<?php

$sname= "localhost";
$unmae= "vdjdbfdx_test_db";
$password = "I_Love_My_Mom_100%";

$db_name = "vdjdbfdx_test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

?>