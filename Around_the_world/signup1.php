<?php
$con=mysqli_connect("localhost","root","","news");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
	$name=$_POST['name'];
	$email=$_POST['email'];
	$Password=$_POST['Password'];
	$phonenumber=$_POST['mobile'];
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
   	 
    
    
	if($count>0){
		if($row['Status']==1)
		    echo "Email contains an account";
	    else
			echo "location:signup.php?message=Your Account is blocked";
			
		}
	else{
	
	$sql="INSERT INTO tbl_address(Address_id,District_id,landmark,pincode,housename,Status) VALUES
	(NULL,'$District','$Landmark','$Pincode','$HouseName','1')";
	
	if ($con->query($sql) == TRUE) {
	$sql="SELECT MAX(Address_id) AS max FROM tbl_address";
	$result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
	$max=$row['max'];
	//echo $max;
	$sql="INSERT INTO `tbl__registration`(`reg_id`, `Name`, `Address_id`, `Phno`, `Security_id`, `Ans`, `Aadhar_no`) VALUES
	(NULL,'$name','$max','$phonenumber','$Security','$Answer','$A')";
	//$result=mysqli_query($con,$sql1);
	//echo $name."\n";
	//cho $max."\n";
	//echo $phonenumber."\n";
	//echo $Password."\n";
	//echo $Security."\n";
	//echo $Answer."\n";
	//echo $A;
	if ($con->query($sql) == TRUE) {
		//echo"hai";
		$sql="SELECT MAX(reg_id) AS max FROM tbl__registration";
	    $result1=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result1);
	    $id=$row['max'];
		//echo $id;
		//echo $email;
		//echo $Password;
		$t='Reporter';
	    $sql1="INSERT INTO `tbl_login`(`reg_id`, `gmail`, `Password`, `Type_of_user`, `Status`,`Role`) VALUES ('$id','$email','$Password','$t','1','1')";
	    
		if($con->query($sql1) == TRUE) {
		
             //header("location:signup.php?message=Under process wait for 24 hrs for verification"); 
			 //echo"succes";
			 header("location:http://localhost/web1/indexlogin.php");
	      }
	    else{
		    //header("location:signup.php?message=Error while accesing data base1");
		echo "1";
		}
    
	}
	else
		//header("location:signup.php?message=Error while accesing data base2");
	echo "no register";
	
	} 
	else
		echo"hai";
	}