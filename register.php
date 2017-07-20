<?php
require "dbcon.php";
if(isset($_POST['btnsubmit']))
{


if($_POST['First-name']=="First Name")
{
 echo "<script>alert('Enter First name');document.location='registerform.php'</script>";
        
        exit();
    }

if($_POST['Last-name']=="Last Name")
{
 echo "<script>alert('Enter last name');document.location='registerform.php'</script>";
        
        exit();
    }

if($_POST['Username']=="Username")
{
 echo "<script>alert('Enter username');document.location='registerform.php'</script>";
        
        exit();
    }

if($_POST['Email']=='Email')
{
 echo "<script>alert('Enter valid Email');document.location='registerform.php'</script>";
        
        exit();
    }

if($_POST['Password']=='Password')
{
 echo "<script>alert('Enter password');document.location='registerform.php'</script>";
        
        exit();
    }


if($_POST['Confirm-password']=='Password')
{
 echo "<script>alert('Enter confirm password');document.location='registerform.php'</script>";
        
        exit();
    }
if($_POST['Password']==$_POST['Confirm-password'])
{
$email=$_POST['Email'];
$fistName=$_POST['First-name'];
$lastName=$_POST['Last-name'];
$username=$_POST['Username'];
$email=$_POST['Email'];
$password=$_POST['Password'];
$query="insert into users(firstName,lastName,userName,email,password) values('$fistName','$lastName','$username','$email','$password')";
$run=$con->query($query);
}

echo "<script>alert('Successfuly Registered');document.location='home.php'</script>";

}
?>
