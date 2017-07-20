<?php
	session_start();
	if(!$_SESSION["username"]){
		header("location: home.php");
	}
	include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat App</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  		crossorigin="anonymous">
  </script>
	<script>



		function auto_load(){
        $.ajax({
          url: "displayMsg.php",
          success: function(data){
          	console.log(data);
             $("#chatbox").html(data);
             setTimeout(function(){
             	auto_load();
             },1000);
          } 
        });
}
		
	</script>
</head >
<body id=body onload="auto_load()">

<div id="container">
	<div id="chatbox">
	
	</div>
	<form method="POST" accept="index.php">
		<!-- <input type="text" name="name" placeholder="User Name"> -->
		<textarea name="msg" placeholder="Enter Message"></textarea>
		<input type="submit" name="submit" value="sent">
	</form>
	<?php 
		if(isset($_POST['submit'])){
			$username=$_SESSION["username"];
			$msg=$_POST['msg'];

			$query="insert into msg(username,msg) values('$username','$msg')";
			$run=$con->query($query);
		}
	?>
</div>
</body>
</html>