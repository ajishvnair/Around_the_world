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
$ncat=$_POST["category"];
$sql =" DELETE  FROM tbl_image WHERE News_id = '$ncat'";
$conn->query($sql);
$sql =" DELETE  FROM tbl_feedback WHERE News_id = '$ncat'";
$conn->query($sql);
$sql =" DELETE  FROM tbl_news WHERE News_id = '$ncat'";
if ($conn->query($sql) == TRUE) {
    header("location:removen.php?message=Remove Successfully");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
		?>