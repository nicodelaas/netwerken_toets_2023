<?php

$dbhost = 'localhost:3306';
$dbuser = 'naskamp_nick_askamp';
$dbpass = 'welkom1234!';
$dbname = 'naskamp_netwerken_toets_2023';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>