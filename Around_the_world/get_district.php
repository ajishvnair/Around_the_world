<?php
$con=mysqli_connect("localhost","root","","news");
if(!empty($_POST["state_id"])) 
{
$query =mysqli_query($con,"SELECT * FROM tbl_district WHERE State_id = '" . $_POST["state_id"] . "' AND Status='1'");
?>
<option value="">Select District</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["District_id"]; ?>"><?php echo $row["District_name"]; ?></option>
<?php
}
}
?>
