<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$v=$_GET['value'];
$sql="SELECT * FROM tbl_video WHERE video_id='$v'";
$result=mysqli_query($conn,$sql);
 while($all_video=mysqli_fetch_array($result))

	{
?>
	 
	 <iframe src="video/1.mp4" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	
	<?php }  
 
?>