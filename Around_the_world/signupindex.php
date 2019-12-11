<?php
$con=mysqli_connect("localhost","root","","news");

if ($con->connect_error) 
{
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST['register']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$Password=$_POST['Password'];
	$phonenumber=$_POST['phonenumber'];
	$HouseName=$_POST['HouseName'];
	$A=$_POST['AadharNo'];
	$District=$_POST['district'];
	$Landmark=$_POST['land'];
	$Pincode=$_POST['Pincode'];
	$Security=$_POST['security'];
	$Answer=$_POST['Answer'];

	
	$sql="SELECT Status FROM tbl_login WHERE gmail='$email'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
	 $count=mysqli_num_rows($result);
   	 
    
    
	if($count>0)
	{
		if($row['Status']==1)
		    header ("location:http://localhost/web1/loginnew/index.php?message=Email already contain an account");
	    else
			header ("location:http://localhost/web1/loginnew/index.php?message=Your Account is Not verified");
			
	}
	else
	{
		if($p1!=$p2)
			header ("location:http://localhost/web1/loginnew/index.php?message=Password does not match");
	else
	{
	
	$sql="INSERT INTO tbl_address(Address_id,District_id,landmark,pincode,housename,Status) VALUES
	(NULL,'$District','$Landmark','$Pincode','$HouseName','1')";
	
	if ($con->query($sql) == TRUE) 
	{
	$sql="SELECT MAX(Address_id) AS max FROM tbl_address";
	$result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
	$max=$row['max'];

	$sql="INSERT INTO `tbl__registration`(`reg_id`, `Name`, `Address_id`, `Phno`, `Password`, `Security_id`, `Ans`, `Aadhar_no`) VALUES
	(NULL,'$name','$max','$phonenumber','$Password','$Security','$Answer','$A')";
	
	if ($con->query($sql) == TRUE) 
	{
		
		$sql="SELECT MAX(reg_id) AS max FROM tbl__registration";
	    $result1=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result1);
	    $id=$row['max'];
		
		$t='Reporter';
	    $sql1="INSERT INTO `tbl_login`(`reg_id`, `gmail`, `Password`, `Type_of_user`, `Status`) VALUES ('$id','$email','$Password','$t','1')";
	    
		if($con->query($sql1) == TRUE) 
		{
		
             header("location:http://localhost/web1/loginnew/index.php?message=Sign up successful"); 
			 
	    }
	    else
		    
		echo "fail1";
    
	}
	else
		
	echo "fail2";
	
	} 
	else
		echo"hai";
	}
	}
}
    
		

if(isset($_POST['loginnew']))
{
	echo"hi";
	$email=$_POST['Email'];
	$pw=$_POST['Password'];
	
		echo"hi";
	$sql="SELECT * FROM tbl_login WHERE gmail='$email'";
	$result=mysqli_query($con,$sql);
	
	$count=mysqli_num_rows($result);
	echo $count;
	$a=0;
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row['gmail'];
		echo $row['Password'];
	if($row['gmail']==$email)
	{
		if($row['Password']==$pw)
		{
			header("location:http://localhost/web1/index.php");
			$a=1;
		}
		else
		{
			header("location:http://localhost/web1/register/index.php?message=Invalid Password");
			$a=1;
	    }
	}
	if($a!=1)
	{
					header("location:http://localhost/web1/register?message=Invalid username and password");
	}
	}
	
}

?>