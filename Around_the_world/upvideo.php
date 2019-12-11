<html>
	<head>
		<title>Upload News</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="upnews.php">Back <span></span></a></div>
				<a href="logout.php">Logout</a>
				
				
			</header>

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

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper">
						<div class="inner">
							<header class="align-center">
								<h1>Upload News</h1>
								
								
								
								
								<h3>You can Upload Events here</h3>
							</header>
						</div>
					</section>

				<!-- Section -->
				
					<section class="wrapper style1">
					
							
						
						<div class="inner">
								<div class="6u 12u$(xsmall)">	
									<div class=inner>
									<div class="select-wrapper">
									
									<form method="POST" action="" enctype="multipart/form-data">
									<h3>Upload your Event</h3>
									<br><br><input type=text name='vt' id='name' value placeholder='Enter Video Title ' required><br>
									
									
									</div>
									<h3>Upload a video  </h3>
							<br><br><input type=file name='fileToUpload'  required><br>
							<br>
							<br>
							<input type=submit name=submit id=submit value=Upload>
								</div></div>
								</div>
						</form><br><br>
						
						</div>
					</section>

			</div>
<?php
if( $_POST)
{
	

//image

extract($_POST);
$target_dir = "video/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);


$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
{
     echo "<script type='text/javascript'>alert('Format does not supported') </script>";
} 

else
{

$video_path=$_FILES['fileToUpload']['name'];
$name=$_POST['vt'];

//$date=date("Y/m/d");
//$time=date("h:i:sa");
$sql="INSERT INTO tbl_video(video_id,Video_caption,video,Status) VALUES(NULL,'$name','$video_path','1')";
if ($conn->query($sql) == TRUE) {
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
    echo "<script type='text/javascript'>alert('Your news will be submitted successfully Thanks for being a part of us') </script>";
	
} else {
    echo "<script type='text/javascript'>alert('your uploading has been stopped.something goes wrong<?php $conn->error ?>') </script>";
}
/*$sql="SELECT nimage FROM news WHERE nid='10'";
$result=$conn->query($sql);
$row=mysqli_fetch_assoc($result);
header("content-type: image/jpg");
*/
}
}
?>
			
		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
					</ul>
					<p>&copy; Untitled. All rights reserved. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
