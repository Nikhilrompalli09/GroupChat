<?php
session_start();
if($_SESSION["username"]){
header("location: index.php");
}

require "dbcon.php";
if(isset($_POST['btnsubmit']))
{
	
	$Username =$_POST['username'];
	$Password=$_POST['Password'];
$query="select userName,password from users where userName='$Username' and password='$Password'";
$run=$con->query($query);
	
if($run)
{
$_SESSION["username"]=$_POST["username"];
echo "<script>document.location='index.php'</script>";
}
else
echo "<script>alert('Invalid Credentials');document.location='home.php'</script>";

}
?>
