<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign UP</title>
		<link rel="icon" type="image/png" href="<?php echo base_url();?>images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css">
</head>
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url();?>images/imagefav.jpg" alt="IMG" width="200">
				</div>
        <div class="login100-form validate-form">
        <span class="login100-form-title">
						Jianyu Prison<br>
            Register Form
					</span>
          
<?php
 echo form_open('index.php/Main/signup_validation');
echo validation_errors();?>
<p><b>Full Name</p>
<div class="wrap-input100 input100" style="line-height: 2.5;
padding: 4px 0px 0px 68px;">
<?php
 echo form_input('fullname');
?>
<span class="focus-input100"></span>
	<span class="symbol-input100"><i class="fa fa-user" aria-hidden="true"></i>
</span>
    </div>
<p><b>Email</p>
<div class="wrap-input100 input100"style="line-height: 2.5;
padding: 4px 0px 0px 68px;">
<?php
 echo form_input('email', $this->input->post('email'));
?>
<span class="focus-input100"></span>
	<span class="symbol-input100"><i class="fa fa-envelope" aria-hidden="true"></i>
</span>
    </div>
<p><b>Password</P>
<div class="wrap-input100 input100"style="line-height: 2.5;
padding: 4px 0px 0px 68px;">
<?php
 echo form_password('password');
?>
<span class="focus-input100"></span>
	<span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i>
</span>
    </div>
 <p><b>Confirm Password</p>
 <div class="wrap-input100 input100"style="line-height: 2.5;
padding: 4px 0px 0px 68px;">
 <?php
 echo form_password('cpassword');
?>
<span class="focus-input100"></span>
	<span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i>
</span>
    </div>
<p>PhoneNumber</p>
<div class="wrap-input100 input100"style="line-height: 2.5;
padding: 4px 0px 0px 68px;">
<?php
 echo form_input('phonenumber');
 ?>
 <span class="focus-input100"></span>
	<span class="symbol-input100"><i class="fa fa-phone" aria-hidden="true"></i>
</span>
    </div>
 
 <select class="form-control selcls" name="occupation">
			<option>Select Occupation</option>
			<option>Registrar</option>
			<option>Supervisor</option>
			<option>Nurse</option>
			<option>Doctor</option>
		</select><br>
<select class="form-control selcls" name="gender">
			<option>Select Gender</option>
			<option>Male</option>
			<option>Female</option>
			<option>Other</option>
		</select><br>



          <div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Register
						</button>
					</div>
          <div class="text-center p-t-136">
						<a class="txt2" href='<?php echo base_url()."index.php/Main/index"?>'>
							Already registered?Login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
          <?php
 echo form_close();
 ?>
</div>
  </div>
  </div>
  </div>
</body>
</html>