<?php
echo "<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
session_start();
$sid = $_SESSION['News_id'];
$sql ="SELECT * FROM tbl_feedback WHERE News_id = '$sid'";

$result=mysqli_query($con,$sql);

		?>
<html>
	<head>
		<title>Comments</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">Back <span></span></a></div>
				
				
				
			</header>
			<div id="main">
			 <table class="news">
			 <tr>
			 <th>NAME</th>
			 <th>COMMENTS</th>
			 
			
			 </tr>
			 <?php
			
			 while($row=mysqli_fetch_assoc($result))
			 { ?>
			 <tr>
			 <td><?php echo $row['user']; ?></td>
			 <td><?php echo $row['feedback']; ?></td>
			
			 
			 </tr>
			 <?php }?>
			 
			
			 </table>
			 
			 </div>
	</body>
</html>