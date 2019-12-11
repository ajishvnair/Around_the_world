<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>News Times a Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
<script type="text/javascript">
var todayDate=new Date();
var date=todayDate.getDate();
var month=todayDate.getMonth()+1;
var year=todayDate.getFullYear();
var hours=todayDate.getHours();
var minutes=todayDate.getMinutes();
var seconds=todayDate.getSeconds();
//document.writeln(todayDate);
//document.writeln( date + "/" + month + "/" + year+"<br>");
//document.writeln(hours + " : " + minutes + " : " + seconds);
/*if(hours>19||hours<6)
 document.getElementById(tabName).style.background-color="red";
 else
 document.getElementById(tabName).style.background-color="blue";*/

</script>

<body>
<?php
echo "<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newsportal";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";
$con = new mysqli($servername, $username, $password, $dbname);

?>
<!-- banner -->
	<div class="banner">
		<div class="banner-info">
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
							<li class="act"><a href="index.php" class="effect1 active">Home</a></li>
							
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="indexlogin.php">Login</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->	
					
				<!--banner-Slider-->
					<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
							  });

							});	
						</script>
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="banner-info-slider">
									<ul>
										<li><a href="cat.php?value_k=Politics">politics</a></li>
										<li>
										<script type="text/javascript">
										document.writeln( date + "/" + month + "/" + year+"<br>");
										</script>
										</li>
									</ul>
									<h1>
									<?php
                                        $sql="SELECT MAX(News_id) AS max FROM tbl_news WHERE Category_id='5' and Status='2'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$id= $row["max"];
										$sql="SELECT * FROM tbl_news WHERE News_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										echo $row["News_title"];
										$id= $row["reg_id"];
										$re=$row['News_id'];
										$sql="SELECT * FROM `tbl__registration` WHERE reg_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										
                                    ?>					
									</h1>
									<p><span>By <i><?php echo $row['Name']; ?></i></span></p>
									<div class="more">
										<a href="single.php?value_key=<?php echo$re;?>" class="type-1">
											<span> Read More </span>
											<span> Read More </span>
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info-slider">
									<ul>
										<li><a href="cat.php?value_k=Bussiness">Business</a></li>
									<li>
																			<script type="text/javascript">
										document.writeln(hours + " : " + minutes + " : " + seconds);
										</script>
									</li>
									</ul>
									<h1>
									<?php
                                        $sql="SELECT MAX(News_id) AS max FROM tbl_news WHERE Category_id='4' and Status='2'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$id= $row["max"];
										$sql="SELECT * FROM tbl_news WHERE News_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										echo $row["News_title"];
										$id= $row["reg_id"];
										$re=$row['News_id'];
										$sql="SELECT * FROM `tbl__registration` WHERE reg_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										
                                    ?>			
									</h1>
									<p><span>By <i><?php echo$row['Name'] ?></i> </span></p>
									<div class="more">
										<a href="single.php?value_key=<?php echo$re;?>" class="type-1">
											<span> Read More </span>
											<span> Read More </span>
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info-slider">
									<ul>
										<li><a href="cat.php?value_k=Sports">sports</a></li>
										<li>
																				<script type="text/javascript">
										document.writeln( date + "/" + month + "/" + year+"<br>");
										</script>
										</li>
									</ul>
									<h1>
									<?php
                                        $sql="SELECT MAX(News_id) AS max FROM tbl_news WHERE Category_id='1' and Status='2'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$id= $row["max"];
										$sql="SELECT * FROM tbl_news WHERE News_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										echo $row["News_title"];
										$id= $row["reg_id"];
										$re=$row['News_id'];
										$sql="SELECT * FROM `tbl__registration` WHERE reg_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										
                                    ?>			
									</h1>
									<p><span>By <i><?php echo$row['Name'] ?></i></span></p>
									<div class="more">
										<a href="single.php?value_key=<?php echo$re;?>" class="type-1">
											<span> Read More </span>
											<span> Read More </span>
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info-slider">
									<ul>
										<li><a href="cat.php?value_k=General">general</a></li>
										<li>
																				<script type="text/javascript">
										document.writeln(hours + " : " + minutes + " : " + seconds);
										</script>
										</li>
									</ul>
									<h1>
									<?php
                                        $sql="SELECT MAX(News_id) AS max FROM tbl_news WHERE Category_id='3' and Status='2'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$id= $row["max"];
										$sql="SELECT * FROM tbl_news WHERE News_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										echo $row["News_title"];
										$id= $row["reg_id"];
										$re=$row['News_id'];
										$sql="SELECT * FROM `tbl__registration` WHERE reg_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										
                                    ?>	
									</h1>
									<p><span>By <i><?php echo$row['Name'] ?></i> </span></p>
									<div class="more">
										<a href="single.php?value_key=<?php echo$re;?>" class="type-1">
											<span> Read More </span>
											<span> Read More </span>
										</a>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info-slider">
									<ul>
										<li><a href="cat.php?value_k=World">Death</a></li>
										<li>
																				<script type="text/javascript">
										document.writeln( date + "/" + month + "/" + year+"<br>");
										</script>
										</li>
									</ul>
									<h1>
									<?php
                                        $sql="SELECT MAX(News_id) AS max FROM tbl_news WHERE Category_id='2' and Status='2'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$id= $row["max"];
										$sql="SELECT * FROM tbl_news WHERE News_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										echo $row["News_title"];
										$id= $row["reg_id"];
										$re=$row['News_id'];
										$sql="SELECT * FROM `tbl__registration` WHERE reg_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										
                                    ?>	
									</h1>
									<p><span>By <i><?php echo$row['Name'] ?></i></span></p>
									<div class="more">
										<a href="single.php?value_key=<?php echo$re;?>" class="type-1">
											<span> Read More </span>
											<span> Read More </span>
										</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
			</div>
		</div>
	</div>
<!-- banner -->
<!-- banner-bottom -->
	
				
				
				
				
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
					</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="js/jquery.marquee.js"></script>
				<script>
				  $('.marquee').marquee({ pauseOnHover: true });
				  //@ sourceURL=pen.js
				</script>
			</div>
			<!-- video-grids -->
				<div class="video-grids">
					<div class="col-md-8 video-grids-left">
						<div class="video-grids-left1">
							<img src="images/aj.jpg" alt=" "  />
							<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
									<span> </span>
							</a>
							<div class="video-grid-pos">
								<h3><span>Hurricanes</span> produce storm surges, tornadoes, and often the most deadly of all -inland flooding.</h3>
								<ul>
									<li>9:32 <label>|</label></li>
									<li><i>Adom Smith</i> <label>|</label></li>
									<li><span>Politics</span></li>
								</ul>
							</div>

								<!-- pop-up-box -->
								<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
								<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
								<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
								<!--//pop-up-box -->
								<div id="small-dialog" class="mfp-hide">
									<iframe src="https://player.vimeo.com/video/145787219" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>

								<script>
									$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});
																									
									});
								</script>
						</div>
						<div class="video-grids-left2">
							<div class="course_demo1">
								<ul id="flexiselDemo1">	
									<li>
										<div class="item">
										
											<img src="images/10.jpg" alt="" class="img-responsive" />
											<a class="play-icon popup-with-zoom-anim" href="video.php?value=4">
													<i> </i>
											</a>
											<div id="small-dialog" class="mfp-hide">
												<iframe src="" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
											</div>
											<div class="floods-text">
												<h3>The fed and inequality <h3>
											</div>
										</div>
									</li>
									<li>
										<div class="item">
											<img src="images/11.jpg" alt=" " class="img-responsive" />
											<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
													<i> </i>
											</a>
											<div id="small-dialog" class="mfp-hide">
												<iframe src="https://player.vimeo.com/video/145787219" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
											</div>
											<div class="floods-text">
												<h3>The fastest insect in the world <span>Politics <label>|</label> <i>Adom Smith</i></span></h3>
												<p>5:56</p>
											</div>
										</div>
									</li>
									<li>
										<div class="item">
											<img src="images/12.jpg" alt=" " class="img-responsive" />
											<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
													<i> </i>
											</a>
											<div id="small-dialog" class="mfp-hide">
												<iframe src="https://player.vimeo.com/video/145787219" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
											</div>
											<div class="floods-text">
												<h3>Billionaires versus Millionaires<span>Politics <label>|</label> <i>Adom Smith</i></span></h3>
												<p>5:56</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
											<!-- pop-up-box -->
												<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
												<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
												<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
											<!--//pop-up-box -->
											<script>
												$(document).ready(function() {
												$('.popup-with-zoom-anim').magnificPopup({
													type: 'inline',
													fixedContentPos: false,
													fixedBgPos: true,
													overflowY: 'auto',
													closeBtnInside: true,
													preloader: false,
													midClick: true,
													removalDelay: 300,
													mainClass: 'my-mfp-zoom-in'
												});
																												
												});
											</script>
									<!-- requried-jsfiles-for owl -->
										<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							 });
							  </script>
							 <script type="text/javascript" src="js/jquery.flexisel.js"></script>
						</div>
					</div>
					<div class="col-md-4 video-grids-right">
						<div class="sap_tabs">	
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list">
									<li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>Category</span></li>
									
									<div class="clear"></div>
								</ul>				  	 
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
										
										<?php
                                        $sql="SELECT MAX(News_id) AS max FROM tbl_news WHERE Category_id='5' and Status='2'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$id= $row["max"];
										$sql="SELECT * FROM tbl_news WHERE News_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$sql1="SELECT * FROM tbl_image WHERE News_id='$id'";
										$result=mysqli_query($con,$sql1);
		                                $row1=mysqli_fetch_assoc($result);
										
                                    ?>		
											<div class="tab_list">
											
												
												<?php
												echo '<image src='.$row1['image'].' length=100% width=100%/>';
												?>
												
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="cat.php?value_k=1">Politics</a> <label>|</label></li>
													<li><?php echo $row['date']; ?></li>
												</ul>
												<p><a href="single.php?value_key=<?php echo $row['News_id']; ?>"><?php echo$row['News_title']; ?></a></p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="facts">
										
										<?php
                                        $sql="SELECT MAX(News_id) AS max FROM tbl_news WHERE Category_id='2' and Status='2'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$id= $row["max"];
										$sql="SELECT * FROM tbl_news WHERE News_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$sql1="SELECT * FROM tbl_image WHERE News_id='$id'";
										$result=mysqli_query($con,$sql1);
		                                $row1=mysqli_fetch_assoc($result);
										
										
                                    ?>		
											<div class="tab_list">
												
												
												<?php
												echo '<image src='.$row1['image'].' length=100% width=100%/>';
												?>
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="cat.php?value_k=death" class="green">Death</a> <label>|</label></li>
													<li><?php echo $row['date']; ?></li>
												</ul>
												<p><a href="single.php?value_key=<?php echo $row['News_id']; ?>"><?php echo$row['News_title']; ?></a></p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="facts">
										
										<?php
                                        $sql="SELECT MAX(News_id) AS max FROM tbl_news WHERE Category_id='3' and Status='2'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$id= $row["max"];
										$sql="SELECT * FROM tbl_news WHERE News_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$sql1="SELECT * FROM tbl_image WHERE News_id='$id'";
										$result=mysqli_query($con,$sql1);
		                                $row1=mysqli_fetch_assoc($result);
										
										
                                    ?>		
											<div class="tab_list">
												
												<?php
												echo '<image src='.$row1['image'].' length=100% width=100%/>';
												?>
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="cat.php?value_k=General" class="orange">general</a> <label>|</label></li>
													<li><?php echo $row['date']; ?></li>
												</ul>
												<p><a href="single.php?value_key=<?php echo $row['News_id']; ?>"><?php echo$row['News_title']; ?></a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
										
										<?php
                                        $sql="SELECT MAX(News_id) AS max FROM tbl_news WHERE Category_id='4' and Status='2'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$id= $row["max"];
										$sql="SELECT * FROM tbl_news WHERE News_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$sql1="SELECT * FROM tbl_image WHERE News_id='$id'";
										$result=mysqli_query($con,$sql1);
		                                $row1=mysqli_fetch_assoc($result);
										
										
                                    ?>		
											<div class="tab_list">
												
												<?php
												echo '<image src='.$row1['image'].' length=100% width=100%/>';
												?>
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="cat.php?value_k=Bussiness" class="orange1">business</a> <label>|</label></li>
													<li><?php echo $row['date']; ?></li>
												</ul>
												<p><a href="single.php?value_key=<?php echo $row['News_id']; ?>"><?php echo$row['News_title']; ?></a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
										<div class="facts">
										<?php
                                        $sql="SELECT MAX(News_id) AS max FROM tbl_news WHERE Category_id='1' and Status='2'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$id= $row["max"];
										$sql="SELECT * FROM tbl_news WHERE News_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$sql1="SELECT * FROM tbl_image WHERE News_id='$id'";
										$result=mysqli_query($con,$sql1);
		                                $row1=mysqli_fetch_assoc($result);
										
                                    ?>		
											<div class="tab_list">
												
												<?php
												echo '<image src='.$row1['image'].' length=100% width=100%/>';
												?>
											</div>
											<div class="tab_list1">
												<ul>
													<li><a href="cat.php?value_k=Sports" class="orange2">Sports</a> <label>|</label></li>
													<li><?php echo$row['date']; ?></li>
												</ul>
												<p><a href="single.php?value_key=<?php echo $row['News_id']; ?>"><?php echo$row['News_title']; ?></a></p>
											</div>
										  <div class="clearfix"> </div>
										</div>
									</div>
									
								</div>
								<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
								<script type="text/javascript">
									$(document).ready(function () {
										$('#horizontalTab').easyResponsiveTabs({
											type: 'default', //Types: default, vertical, accordion           
											width: 'auto', //auto or any width like 600px
											fit: true   // 100% fit in a container
										});
									});
								</script>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			<!-- //video-grids -->
			<!-- video-bottom-grids -->
				
			<!-- //video-bottom-grids -->
			<!-- news-and-events -->
				<div class="news">
					<div class="news-grids">
						<div class="col-md-8 news-grid-left">
							<h3>latest news & events</h3>
							<ul><?php
							$sql="SELECT MAX(News_id) AS max FROM tbl_news";
						$result=mysqli_query($con,$sql);
		                $row=mysqli_fetch_assoc($result);
					    $id= $row["max"];
						$c=0;
						?>
							<?php while($c<=5){?>
							<?php
								$sql="SELECT * FROM tbl_news WHERE News_id='$id'";
										$result=mysqli_query($con,$sql);
		                                $row=mysqli_fetch_assoc($result);
										$count1 = mysqli_num_rows($result);
										$sql1="SELECT * FROM tbl_image WHERE News_id='$id'";
										$result=mysqli_query($con,$sql1);
		                                $row3=mysqli_fetch_assoc($result);
										if($count1==1){
								   ?>
								
								
								
								<li>
									<div class="news-grid-left1">
										
										<?php
												echo '<image src='.$row3['image'].' length=100% width=100%/>';
												?>
										
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.php?value_key=<?php echo$row['News_id']; ?>"><?php echo$row['News_title']; ?></a></h4>
										<h5>By <a>
										<?php
										$rid=$row['reg_id'];
										$sql1="SELECT Name FROM `tbl__registration` WHERE reg_id='$rid'";
										$result1=mysqli_query($con,$sql1);
										$row5=mysqli_fetch_assoc($result1);
										echo $row5['Name'];;
										?>
										
										</a> <label>|</label> <i><?php echo$row['date']; ?></i><label>|</label><i><?php echo$row['Address'];?></i></h5>
										<p><?php echo$row['Description']; ?>.</p>
									</div>
									<div class="clearfix"> </div>
								</li>
								<?php
								$c=$c+1;
										}
										$id=$id-1;
							}
							?>
								
							</ul>
							<h3><a href="allnews.php">Read More<a/></h3>
						</div>
						<div class="col-md-4 news-grid-right">
							<div class="news-grid-rght1">
							<!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a class="high" href="#home" aria-controls="home" role="tab" data-toggle="tab">GENERAL INFORMATION</a></li>
								<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">edit location</a></li>
							  </ul>

							  <!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active london" id="home">
										<ul>
											<li>
												<h4>Petrol</h4>
												<span></span>
												<p>21<sup>°</sup></p>
											</li>
											<li>
												<h4>Desel</h4>
												<span class="moon"></span>
												<p>25<sup>°</sup></p>
											</li>
											<li>
												<h4>Dolar</h4>
												<span class="sun"></span>
												<p>31<sup>°</sup></p>
											</li>
											<div class="clearfix"> </div>
										</ul>
									</div>
									<div role="tabpanel" class="tab-pane" id="profile">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359652.109742895!2d-113.72446020222534!3d36.24602872499641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1450786850582" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<div class="news-grid-rght2">
								<h3>subscribe to our newsletter</h3>
								<p>Get the latest news and updates by signing up to our daily newsletter.We won't sell your email or spam you !</p>
								<form>
									<input type="text" value="enter your Email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your Email address';}">
									<input type="submit" value="Submit">
								</form>
							</div>
							<div class="news-grid-rght3">
								<img src="images/18.jpg" alt=" " class="img-responsive" />
								<div class="story">
									<p>story of the week</p>
									<h3><a href="single.html">US hails west Africa Ebola progress</a></h3>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
						
					</div>
				</div>
			<!-- //news-and-events -->
		</div>
	</div>
<!-- //banner-bottom -->
<!-- footer -->
	
			<div class="footer-bottom">
				
				<div class="footer-bottom-right">
					<ul>
						<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
						<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
						<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

</body>
</html>