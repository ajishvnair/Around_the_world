<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>News Times a Entertainment Category Flat Bootstrap Responsive Website Template | Single.html:: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="News Times Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- banner -->
	<div class="banner1">
		<div class="banner-info1">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" href="index.php"><span>N</span> News Times</a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
							<li><a href="index.php">Home</a></li>
							
							
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="http://localhost/web1/indexlogin.php">Login</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->	
					
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- single -->
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

?>
	<div class="single">
		<div class="container">
			<div class="single-grid">
				<div class="col-md-8 blog-left">
					<div class="blog-left-grid">
						<div class="blog-leftl">
							<h4>
                            <?php
							if(isset($_GET['value_key'])){
								$var=$_GET['value_key'];
								$sql="SELECT * FROM tbl_news WHERE News_id='$var'";
								$result=mysqli_query($conn,$sql);
		                        $row=mysqli_fetch_assoc($result);
								$d=$row['date'];
								echo $d;
								session_start();
								$_SESSION['News_id']=$var;
								
							}
							?>
							
							<span><?php echo$row['Address']; ?></span></h4>
							<a href="coments.php"><i class="glyphicon glyphicon-comment" aria-hidden="true"></i>
							<?php
							 $sql5="SELECT * FROM `tbl_feedback` WHERE News_id='$var'";
							 $result5=mysqli_query($conn,$sql5);
							 $count=mysqli_num_rows($result5);
								echo$count;
								?>
							
							</a>
						</div>
						<div class="blog-leftr">
							
							
							<?php
							$sql3="SELECT `Image_id`, `News_id`, `image` FROM `tbl_image` WHERE News_id='$var'";
							$result3=mysqli_query($conn,$sql3);
							$row3=mysqli_fetch_array($result3);
							$cat=$row['Category_id'];
							$sql3="SELECT * FROM tbl_category WHERE Category_id='$cat'";
							$result3=mysqli_query($conn,$sql3);
							$row4=mysqli_fetch_array($result3);
							
												echo '<image src="'.$row3['image'].'" length=100% width=100%/>';
											
												
									?>			
						  <h3><?php echo$row['News_title'] ?></h3>
						  <br>
						  <br>
						  <h4>Category:<?php echo $row4['Category_name']; ?></h4>
							<p><?php echo $row['Description']; ?>
							</p>
							
								<br>
								<br>
								<li><a href="coments.php"><i class="glyphicon glyphicon-comment" aria-hidden="true"></i><?php echo$count;?> Comments</a></li>
								<br>
								<br>
								<h3>Leave Your Comment</h3>
								<br><br>
							
						</div>
						</div>
						
						<div class="coment-form">
							
							<form  action="#" method="post">
							
								<input type="text" value="Name" name="n" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								
				
								
								<textarea type="text" name="cmnt" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
								
								<input type="submit" value="Submit Comment" >
							</form>
						</div>
					
				
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //single -->
<!-- footer -->
	
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
<?php
if($_POST)
{
	$name=$_POST["n"];
	$cmnt=$_POST["cmnt"];
	
	$ni=$_SESSION['nid'];
	$sql="INSERT INTO tbl_feedback(Feedback_id,News_id,feedback,user,Status) VALUES(NULL,'$var','$cmnt','$name','1')";
	if ($conn->query($sql) === TRUE){
		
	echo "<script type='text/javascript'>
window.location.href = 'http://localhost/web1/single.php?value_key=".$var."';
</script>";
	}
	else
	echo "<script type='text/javascript'>alert('Somthing goes wrong Try again') </script>";	
}
?>	
