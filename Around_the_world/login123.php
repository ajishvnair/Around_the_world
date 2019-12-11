<?php
	$email=$_POST['Email'];
	$pw=$_POST['Password'];
	
$con=mysqli_connect('localhost','root','','news') or die(mysqli_error());

	$sql="SELECT * FROM tbl_login";
	$result=mysqli_query($con,$sql);
	//$row=mysqli_fetch_assoc($result);
	while($count=mysqli_fetch_array($result))
	{
		if($email==$count['gmail'] && $pw==$count['Password'] && $count['Role']==0)
		{
		header("location:neweepp/index.php");
		}
	else if($email==$count['gmail'] && $pw==$count['Password'] && $count['Role']==1)
	{
		session_start();
		$_SESSION['id']=$count['reg_id'];
		$_SESSION['sid']=session_id();
		header("location:reporters_news/indexrep.php");
	}
	else{
		$val=0;
	}
	}
	if($val==0)
	{
		echo "<script> alert('invalid login'); document.location='index.php';</script>";
	}

	?>
	<a href="index.php"> Click to login again</a>