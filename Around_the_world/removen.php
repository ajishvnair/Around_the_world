<?php
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
session_start();
$sid = $_SESSION['id'];
$sql ="SELECT * FROM tbl_news WHERE reg_id = '$sid'";

$result=mysqli_query($conn,$sql);
		
		?>
<html>
	<head>
		<title>Upload News</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<?php
	echo "<br>";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "news";
	$conn = new mysqli($servername, $username, $password, $dbname);
	

	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}
	if(isset($_GET['message'])){
		for($i=0;$i<170;$i++)
			echo "&nbsp";
	
  echo "<font style='color:blue'>".$_GET['message']."</font>";
	}
		
	
	
		?>
	<body class="subpage">

		
			<header id="header">
				<div class="logo"><a href="upnews.php">Back <span></span></a></div>
				<a href="http://localhost/web1/">Logout</a>
				
				
			</header>
			<div id="main">
			 <table class="news">
			 <tr>
			 <th>NID</th>
			 <th>NEWS_TITLE</th>
			 <th>CATEGORY</th>
			 <th>DATE</th>
			
			 </tr>
			 <?php
			
			 while($row=mysqli_fetch_assoc($result))
			 { ?>
			 <tr>
			 <td><font style="color:red; weight:bold;"><b><?php echo $row['News_id']; ?></b></font></td>
			 <td><font style="color:red; weight:bold;"><b><?php echo $row['News_title']; ?></b></font</td>
			 <td><b><?php echo $row['Category_id']; ?></b></td>
			 <td><b><?php echo $row['date']; ?></b></td>
			 
			 </tr>
			 <?php }?>
			 
			
			 </table>
			 <div class=inner>
			 <div class="select-wrapper">
			 <h3>Select the title  of your news you want to delete</h3>
			 <form action="remove.php" method="post">
									<select name='category' id='category' value="select">
										<?php
										      $result=mysqli_query($conn,$sql);
			                                  while($row=mysqli_fetch_assoc($result))
			                                      { ?>
												  <option value = "<?php echo $row['News_id']; ?>"  >  <?php echo $row['News_title'];echo"   "; echo$row['News_id']; ?></option>
										<?php
												  }
												  ?>
										
										
									</select>
									<br><br><input type=submit name=submit id=submit value=Remove>
									</form>
			 </div>
			 </div>
			 </div>
	</body>
</html>