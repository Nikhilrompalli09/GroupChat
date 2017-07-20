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
    <title>msgUI</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>

      <script>
       function auto_load(){
        $.ajax({
          url: "displayMsg.php",
          success: function(data){
            console.log(data);
             $("#chat-area").html(data);
             setTimeout(function(){
              auto_load();
             },1000);
          } 
        });
    }



    </script>

</head>
<body class="ng-scope" ng-controller="MainCtrl" onload="auto_load()">
<div class="wrapper">
    <div class="container">
        <div class="left">
            <div class="top">
            <form method="post" action="logout.php">
            	<input class="logout" type="submit" value="Log out"/>
            </form>
            <span style="padding:60px;font-size: 15px;color: #1a1a1a">Active Peoples</span>
                <!-- <input type="text" ng-model="userSearch.name" /> -->
            </div>
            <div class="peopleContainer">
                <ul class="people">
                <?php
                    $query="select * from users";
                    $run=$con->query($query);
                    while ($row=$run->fetch_array()) :
                ?>
                    <li class="person ">
                        <span class="name" ng-style="contact.id === cont ? {'color': '#fff'} : '' "><?php echo $row['userName'] ?></span>
                    </li>
                <?php endwhile; ?>
                </ul>
            </div>
            <!-- <button class="logout" name="submit">Logout</button> -->
            
        </div>

        <div class="right">
            <div class="top"><span>Group: <span class="name">Computer Science And Engineering</span></span></div>
            <div class="chat-area" id="chat-area">
                <div class="received"></div>
                <div class="sent"></div>
            </div>
              <div class="client-text">
                <form method="POST" accept="index.php">
                   <input class="msgBox" name='msgBox' type="text" placeholder="Text here.."/>
                  <input class="submitbtn" name="submitbtn" type="submit" value=""/>
                </form>
                <?php 
                  if(isset($_POST['submitbtn'])){
                    $username=$_SESSION["username"];
                    $msg=$_POST['msgBox'];

                    $query="insert into msg(username,msg) values('$username','$msg')";
                    $run=$con->query($query);
                  }
                ?>
              </div>
        </div>

    </div>
</div>
</body>
</html>



