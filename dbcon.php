<?php

$host="localhost";
$user="root";
$pass="";
$db_name="chatapp";

$con=new mysqli($host,$user,$pass,$db_name);

function dateFormat($date){
	return date('g:i a',strtotime($date));
}


?>