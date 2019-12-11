<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>News Times a Entertainment Category Flat Bootstrap Responsive Website Template | New & Events :: w3layouts</title>
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

?>
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
							<li><a href="indexlogin.php">Login</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->	
					
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- news-and-events -->
	<div class="news-and-events">
		<div class="container">
			<div class="move-text">
				<div class="breaking_news">
					<h2>Breaking News</h2>
				</div>
				<div class="marquee" >
				<?php
					 $sql="SELECT MAX(News_id) AS max FROM tbl_news";
					 $result=mysqli_query($con,$sql);
		             $row=mysqli_fetch_assoc($result);
					 $maxi=$row['max'];
					 $sql="SELECT * FROM tbl_news WHERE News_id='$maxi' ";
					 $result=mysqli_query($con,$sql);
		             $row=mysqli_fetch_assoc($result);
					 $re=$row['News_id'];
					 
					 
					 ?>
					<div class="marquee1"><a class="breaking" href="single.php?value_key=<?php echo$re; ?>">
					<?php
					 
					 echo $row['News_title'];
					 
					 ?>
					 
					 
					</a></div>
					<?php
					$maxi=$maxi-1;
					 $sql="SELECT * FROM tbl_news WHERE News_id='$maxi' ";
					 $result=mysqli_query($con,$sql);
		             $row=mysqli_fetch_assoc($result);
					 $re=$row['News_id'];
					?>
					<div class="marquee2"><a class="breaking" href="single.php?value_key=<?php echo$re; ?>">
					<?php
					
					 echo $row['News_title'];
					?>
					</a></div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="js/jquery.marquee.js"></script>
				<script>
				  $('.marquee').marquee({ pauseOnHover: true });
				  //@ sourceURL=pen.js
				</script>
			</div>
			</div>
			
				<div class="news">
					<div class="news-grids">
						<div class="col-md-8 news-grid-left">
						<?php
						
                        $var=$_GET['value_k'];
                      						
						$sql="SELECT * FROM tbl_news WHERE category_id='$var'";
						$result=mysqli_query($con,$sql);
		                $row=mysqli_fetch_assoc($result);
						$count = mysqli_num_rows($result);
						$sql="SELECT MAX(News_id) AS max FROM tbl_news WHERE category_id='$var'";
						$result=mysqli_query($con,$sql);
		                $row=mysqli_fetch_assoc($result);
					    $id= $row["max"];
						
						
						?>
							<h3><?php echo$var;  ?></h3>
							<ul>
							<?php while($count>0){?>
							
								
								
								<?php
								$sql="SELECT * FROM tbl_news WHERE News_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$count1 = mysqli_num_rows($result);
										$var1=$row['Category_id'];
										if($count1==1){
											if($var1==$var){
								   ?>
								   <li>
									<div class="news-grid-left1">
										<img src="" alt="" class="img-responsive" />
										<?php
												echo '<image src=='.$row1['image'].' length=100% width=100%/>';
												?>
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.php?value_key=<?php echo$row['News_id']; ?>">
										<?php echo$row['News_title']; ?>
										</a></h4>
										<h5>By <a>
										<?php
										$rid=$row['reg_id'];
										$sql1="SELECT * FROM tbl_registration WHERE reg_id='$rid'";
										$result1=mysqli_query($con,$sql1);
										$row1=mysqli_fetch_assoc($result1);
										echo $row1['Name'];
										?>
										</a> <label>|</label> <i><?php echo$row['date']; ?></i><label>|</label><i><?php echo$row['Address']; ?></i></h5>
										
									</div>
									<div class="clearfix"> </div>
								</li>
							<?php 
											
                               $count=$count-1;
											}
										}
							else{}
							$id=$id-1;
							}
							?>
							
								
							</ul>
						</div>
						
						<div class="clearfix"> </div>
					</div>
				</div>
		</div>
	</div>
<!-- //news-and-events -->
<!-- footer -->
	
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>