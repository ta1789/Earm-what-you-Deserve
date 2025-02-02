<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$address=$_POST['address'];
$mno=$_POST['mno'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(fullname,address,mno,city,gender,email,password) values('$fname','$address','$mno','$city','$gender','$email','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	//header('location:user-login.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Customer Registration</title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('assets/images/login-all-bg.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

#rg-male{
	color:blue;
}

.container{
height: 100%;
align-content: center;
}

.card{
/* height: 370px;/ */
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>
<script type="text/javascript">
	function valid()
	{
	const full_name = document.getElementById('full_name').value;
	var password=document.getElementById("password").value;
	var password_again=document.getElementById("password_again").value;
	
    const nameValue = full_name.trim();

	
	

	if (!nameValue || /[^a-zA-Z\s]/.test(nameValue)) {
       alert('Name should not be spaces or should not contain special characters');
       return false;
  }

  let gender = document.getElementsByName("gender");
        let found = false;
        for(let i of gender)
        {
             if(i.checked)
             {
                 found=true;
				 continue;
				 
                 
        }
	}
        if(!found)
        {
          alert("Select your Gender");
          return false;
        }
	
	if (!/[A-Z]/.test(password) || !/[a-z]/.test(password) || !/\d/.test(password) || !/[^\w\s]/.test(password)) {
				alert("Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character");
				return false;
			}

	 if(password!= password_again)
	{
	alert("Password and Confirm Password Field do not match  !!");
	document.registration.password_again.focus();
	return false;
	}
	return true;
	}
	function showPassword() {
  var passwordField = document.getElementById("password");
  var passwordFieldConf = document.getElementById("password_again");

  if (passwordField.type === "password" || passwordFieldConf.type==="password") {
    passwordField.type = "text";
	passwordFieldConf.type="text";
  } else {
    passwordField.type = "password";
	passwordFieldConf.type="password";
  }
}

	</script>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Customer registration</h3>
				
			</div>
			<div class="card-body">
				<form name="registration" id="registration"  method="post" onSubmit="return valid();">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        
						<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-home"></i></span>
						</div>
						<input type="text" class="form-control" name="address" placeholder="Address" required>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-city"></i></span>
						</div>
						<input type="text" class="form-control" name="city" placeholder="City" required>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-phone"></i></span>
						</div>
						<input type="text" class="form-control" name="mno" placeholder="Mobile No" required>
					</div>
					<div class="form-group">
						<label class="block">
							<font color="orange">Gender</font>
						</label>
						<div class="clip-radio radio-primary">
							<input type="radio" id="rg-female" name="gender" value="female" >
							<label for="rg-female">
								<font color="white">Female</font>
							</label>
							<input type="radio" id="rg-male" name="gender" value="male">
							<label for="rg-male">
								<font color="white">Male</font>
							</label>
						</div>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
						
						
					</div>
					
					
					
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" class="form-control"  id="password_again" name="password_again" placeholder="Password Again" required>
					</div>
					<input type="checkbox" onclick="showPassword()"><font color="white"> Show Password</font>
					<div class="form-group">

					</div>
					

					<div class="form-group">
						<input type="submit" name="submit" value="Signup" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center">
					<div class="form-actions">
						<p><font color="white">
							Already have an account?</font>
							<a href="user-login.php"><font color="white">
								Log-in</font>
							</a>
						</p>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
	
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

	</body>
</html>