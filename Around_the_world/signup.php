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

$name=$_POST['name'];
$gmail=$_POST['email'];
$pwd=$_POST['password'];
$sql="SELECT * FROM reporter WHERE rgmail='$gmail'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);
if($count>=1)
{
echo "Your'e mail id has already existing use another mail id to signup";
}
else{	

$sql = "INSERT INTO reporter(rid,rname,rgmail,rpwd)
VALUES (NULL,'$name','$gmail','$pwd')";
if ($conn->query($sql) === TRUE) {
    echo "You're account has been successfully created";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}


?>
<html>
<form action="login.php">
<input type="submit" value="Please go back ">
</form>
</html>