<?php

$dbhost = 'localhost:3306';
$dbuser = 'naskamp_dbuser';
$dbpass = 'dbpassword1234!';
$dbname = 'naskamp_crud_simple';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>