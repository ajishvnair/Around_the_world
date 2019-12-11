<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Register Login Widget Flat Responsive Widget Template :: w3layouts</title>
<!--Custom Theme files-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Register Login Widget template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login Signup Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Jura:400,300,500,600' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>
	<h1>NEWS TIMES</h1>
	<!-- main -->
	<div class="main">
		<!--login-profile-->
		
		<!--login-profile-->
		<!--signin-form-->
		<div class="w3">
			<div class="signin-form profile">
				<h3>Login</h3>
				
				<div class="login-form">
					<form action="" method="post">
				
						<input type="text" name="myu" placeholder="E-mail" required="">
						<input type="password" name="myp" placeholder="Password" required="">
						<div class="tp">
							<input type="submit" value="LOGIN NOW">
						</div>
						</table>
					</form>
				</div>
				
				<p><a href="#"> Forget your password?</a></p>
			</div>
		</div>
		<div class="clear"></div>
		<!--//signin-form-->	
	</div>
						
</body>
</html>

<?php
if( $_POST){

echo "<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $uname = $_POST['myu'];
      $password = $_POST["myp"]; 
      
      $sql = "SELECT login_id FROM tbl_login WHERE uname = '$uname' and password = '$password'";
      $result = mysqli_query($conn,$sql);
       $row = mysqli_fetch_assoc($result);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		  session_start();
		  $_SESSION['id'] = $row["login_id"];
		   header("Location:http:/web/upnews.php");
		 
         /*echo"Welcome";
		 echo "<br>";
		 $id=$row["rid"];
		 //echo "$id";
	  $sql ="SELECT rid,rname,rgmail FROM reporter WHERE rid = '$id'";
	  
	  
     $result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		echo "Id: " . $row["rid"]. "<br>" . "Name: " . $row["rname"]. "<br>" . "Gmail:" . $row["rgmail"]. "<br>";*/
		
		
		
		 
		 
      }else {
         echo "<script type='text/javascript'>alert('Username or Password is incorect') </script>";
      }
   }
   }
   ?>
   