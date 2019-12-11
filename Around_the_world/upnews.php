<html>
	<head>
		<title>Upload News</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body class="subpage">

		
			<header id="header">
				<div class="logo"><a href="index.php">News Times <span></span></a></div>
				<a href="http://localhost/web1/">Logout</a>
				
				
			</header>

<?php
include 'conn.php';
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
session_start();
$id = $_SESSION['id'];
$sql ="SELECT * FROM `tbl__registration` WHERE reg_id='$id'";

$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
		
		
?>

		
			<div id="main">

				
					<section class="wrapper">
						<div class="inner">
							<header class="align-center">
								<h1>Upload News</h1>
								
								
								<h1>Welcome
								<?php
									echo $row["Name"];
								?></h1>
								
							</header>
						</div>
					</section>

				
				
					<section class="wrapper style1">
					
							
						
						<div class="inner">
								<div class="6u 12u$(xsmall)">	
									<div class=inner>
									<div class="select-wrapper">
									
									
									<form method=POST action="" enctype="multipart/form-data">
									<h4>
									<?php
									if(isset($_GET['message']))
									echo $_GET['message'];
									?>
					
									</h4>
									<h3>Upload your News</h3>
									<br><br><input type=longtext name='nt' value placeholder='Enter News Title ' required><br>
									<br><br><input type=longtext name='np' value placeholder='Enter the place it happen' required><br>
									<br><br>
									<textarea class="mess" id="ITSWUsers" name="disc"  placeholder="Write few lines about your product" required=" "   ></textarea>
					
									
									<br>
									<h3>Select the category of your news</h3>
									<?php
									
									$sql="SELECT * FROM `tbl_category` WHERE Status='1'";
									$result=mysqli_query($con,$sql);
									?>
									<select name='category' id='category' required>
									<option value="">Select a category</option>
									<?php
									
                                    while($row1=mysqli_fetch_array($result))
									{
									?>
										<option value="<?php echo$row1['Category_id']; ?>"><?php echo $row1['Category_name']; ?></option>
									<?php
									}
?>									
										
									</select>
									
									</div>
									<h3>Upload an Image of your news</h3>
							<br><br><input type="file" id="fileselect" name="image[]" multiple="multiple" />
<br>
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
	include 'conn.php';
	
$id = $_SESSION['id'];



$nt=$_POST['nt'];
$np=$_POST['np'];
$nc=$_POST['disc'];
$d=date("Y/m/d");
$t=date("h:m");
$ncat=$_POST["category"];

$nc=mysqli_real_escape_string($con,$nc);
$nt=mysqli_real_escape_string($con,$nt);


$sql = "INSERT INTO `tbl_news`(`News_id`, `reg_id`, `date`, `Category_id`, `Description`, `Status`, `Address`, `News_title`) VALUES 
('NULL','$id','$d','$ncat','$nc','1','$np','$nt')";
if ($con->query($sql) == TRUE) {
	$sql="SELECT MAX(News_id)as max FROM tbl_news";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$m=$row['max'];
	
	
	
    
	if(isset($_FILES['image'])){
    $errors= array();
    foreach($_FILES['image']['tmp_name'] as $key => $tmp_name ){
		$target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"][$key]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            header("location:post.php?message=Please avoid unwanted file while uploading");
    
           }
       else
	   {
        $file_name = $_FILES['image']['name'][$key];
        $file_size =$_FILES['image']['size'][$key];
        $file_tmp =$_FILES['image']['tmp_name'][$key];
        $file_type=$_FILES['image']['type'][$key];  
        if($file_size > 2097152){
            $errors[]='File size must be less than 2 MB';
        } 
        		
        $query="INSERT into tbl_image (`Image_id`,`News_id`,`image`) VALUES(NULL,'$m','$target_file')";
        $desired_dir="uploads";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);       
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"uploads/".$file_name);
            }else{                                  
                $new_dir="uploads/".$file_name.time();
                 rename($file_tmp,$new_dir) ;               
            }
            mysqli_query($con,$query);            
        }else{
                print_r($errors);
		}   }
    }
    
		
		
		
    }
	 header("location:upnews.php?message=News uploaded successfully Please wait for Authentication ");
	
} 
else {
	
    echo "<script type='text/javascript'>alert('your uploading has been stopped.something goes wrong<?php $con->error ?>') </script>";
}

}
?>
			
		
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

		
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
