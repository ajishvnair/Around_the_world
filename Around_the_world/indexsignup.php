<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>General Application Form a Flat Responsive Widget Template :: w3layouts</title>
	<meta name="keywords" content="General Application Form Responsive widget, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="css2/style.css" type="text/css" media="all">
	
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<?php
$con=mysqli_connect("localhost","root","","news");
                              if ($con->connect_error) {
                                   die("Connection failed: " . $conn->connect_error);
                                  }if (isset($_GET['message'])) {
									  if($_GET['message']!=' '){
    print '<script type="text/javascript">alert("' . $_GET['message'] . '");</script>';
									  $_GET['message']=null;
									  }
}
								  ?>
								  <script>
function getdistrict(val) {
	$.ajax({
	type: "POST",
	url: "get_district.php",
	data:'state_id='+val,
	success: function(data){
		
		$("#district-list").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>
</head>
<body>
	<div class="w3ls-banner">
	<div class="heading">
		<h1>Registration Form</h1>
	</div>
		<div class="container">
			<div class="heading">
				<h2>Please Enter your Details</h2>
				<p>Fill the application form below and submit.</p>
			</div>
			<div class="agile-form">
				<form action="signup1.php" method="post">
					<ul class="field-list">
							<li> 
							<label class="form-label"> Name <span class="form-required"> * </span></label>
							<div class="form-input">
								<input type="text" name="name" placeholder="Name" required="" id="u" required onchange='Validate()';>
									<script>		
									function Validate() 
									{
										var val = document.getElementById('u').value;

									    if (!val.match(/^[A-Za-z][A-Za-z" "]{3,}$/)) 
										{
											alert('Only alphabets are allowed and Start with a Alphabet Greater than 3 letters');
											document.getElementById('u').value = "";
											return false;
										}

										return true;
									}
									</script>
								</span>
							</div>
						</li>
						<li> 
<label class="form-label"> E-Mail<span class="form-required"> * </span></label>
<div class="form-input">
<input type="email" name="email" placeholder="email" id="i" required onchange='Valida();'>
<script>
function Valida() 
{
    var val = document.getElementById('i').value;

    if (!val.match(/^[a-z][a-zA-Z0-9_]*(\.[a-zA-Z][a-zA-Z0-9_]*)?@[a-z][a-zA-Z-0-9]*\.[a-z]+(\.[a-z]+)?$/)) 
    {
        alert('Start with a Alphabet and also include @ and . also space is not allowed at starting position');
		            document.getElementById('i').value = "";
        return false;
    }

    return true;
}
</script>
							</div>
						</li>
						<li> 
							<span id="msg">
								<label style="color:red">Password contains UpperCase, LowerCase, Number/SpecialChar and min 8 Chars</label>
								</span>
								<br>
								<br>
								<label class="form-label"> Password <span class="form-required"> * </span></label>
							    <div class="form-input">
								<input type="Password" name="Password" placeholder="Password"  style="width:415px; height:40px; margin:0 auto;"required="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
							
							</div>
						</li>
<li> 
<label class="form-label"> Phone No <span class="form-required"> * </span></label>
<div class="form-input">
<input placeholder="Mobile" name="mobile" type="text" maxlength="10" id='p'  required onchange='Validat();'>
<script>		
function Validat() 
{
    var val = document.getElementById('p').value;

    if (!val.match(/^[7-9][0-9]{1,9}$/))
    {
        alert('Only Numbers are allowed and must contain 10 number');
	
		
		            document.getElementById('p').value = "";
        return false;
    }

    return true;
}
					  
</script>
</div>
</li>
<li> 
<label class="form-label"> House Name <span class="form-required"> * </span></label>
<div class="form-input">
<input placeholder="House Name" name="HouseName" type="text" id="h" required="" onchange='Valid();'>
<script>		
function Valid() 
{
    var val = document.getElementById('h').value;

    if (!val.match(/^[A-Za-z ][A-Za-z" "]{1,80}$/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('h').value = "";
        return false;
    }

    return true;
}
</script>
							
							</div>
						</li>
						
						<li> 
							<label class="form-label"> Aadhar No <span class="form-required"> * </span></label>
							<div class="form-input">
								<input type="text" name="AadharNo" placeholder="Aadhar No" required="" pattern="[0-9]{1,20}">
							
							</div>
						</li>
						<li>
							<label class="form-label"> State<span class="form-required"> * </span></label>
							<div class="form-input">
							<select class="form-dropdown" name="District" required onChange="getdistrict(this.value);">
								<option value="">Select State</option>
								<?php
							
								$sql="SELECT * FROM tbl_state WHERE Status='1'";
								$result=mysqli_query($con,$sql);
		                        while($row=mysqli_fetch_assoc($result))
								{
								?>
								<option value="<?php echo $row['State_id']; ?>" ><?php echo $row['State_name']; ?></option>
								<?php  
								}
								
								
							?>
                            </select>
							</div>
							<li>
							<label class="form-label"> District<span class="form-required"> * </span></label>
							 <div class="form-input">
								<select name="district" id="district-list" class="form-control">
<option value="">Select</option>
									
								</select>
							</div>
						</li>
						<li> 
							<label class="form-label"> Landmark <span class="form-required"> * </span></label>
							<div class="form-input">
								<input type="text" name="land" placeholder="Landmark" required="" pattern="[a-zA-z]{1,30}">
							
							</div>
						</li>
<li> 
<label class="form-label"> Pincode <span class="form-required"> * </span></label>
<div class="form-input">
<input placeholder="Pincode" name="Pincode" type="text" maxlength="6" id='pin'  required onchange='Val();'>
<script>		
function Val() 
{
    var val = document.getElementById('pin').value;

    if (!val.match(/^[0-9]{6}$/))
    {
        alert('Only Numbers are allowed and must contain 6 number');
	
		
		            document.getElementById('pin').value = "";
        return false;
    }

    return true;
}
					  
</script>
			
							
							</div>
						</li>
						
						<li>
							<label class="form-label"> Security question<span class="form-required">*</span></label>
							 <div class="form-input">
								<select id="security" class="form-dropdown" name="security" style="width:418px; height:40px; ; margin: 0 auto;">
                            <option>Choose a Security question to remove</option>
                            <?php
							
								$sql="SELECT * FROM tbl_security WHERE Status='1'";
								$result=mysqli_query($con,$sql);
		                        while($row=mysqli_fetch_assoc($result))
								{
								?>
								<option value="<?php echo $row['Security_id']; ?>" ><?php echo $row['Security_qus']; ?></option>
								<?php  
								}
								
								
							?>
                        </select>
									
								</select>
							</div>
						</li>
						<li> 
							<label class="form-label"> Answer <span class="form-required"> * </span></label>
							<div class="form-input">
								<input type="text" name="Answer" placeholder="Answer" required="" pattern="[A-Za-z]{1,80}">
							
							</div>
						</li>
						<div class="submit_btn">
						<form action="signup1.php" method="POST">
						<input type="submit" value="Submit" name="register">
					</div>
						
					</ul>
					</form>
					<form action="http://localhost/web1/indexlogin.php" method="post">
					
					</form>
					<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
					
			</div>
		</div>
		<div class="copyright">
			<p>© 2018 Registration Form| Design by <a href="www.w3layouts.com">Annu .C. James</a></p> 
		</div>
	</div>
</body>
</html>