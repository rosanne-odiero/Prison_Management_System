<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Login Page</title>
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
            Login Form
					</span>
          
<?php
echo form_open('index.php/Main/login_validation');
echo validation_errors();
?>
<p><b>Email</p>
<div class="wrap-input100 input100">
<?php 
echo form_input('email',$this->input->post('email'));
 echo "</p>";
 ?><span class="focus-input100"></span>
	<span class="symbol-input100">
	<i class="fa fa-envelope" aria-hidden="true"></i>
		</span>
    </div>
			<p><b>Password</p>
 <div class="wrap-input100 input100 ">
 
<?php
 echo form_password('password');
 echo "</p>";?>
 
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
          <div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href='<?php echo base_url()."index.php/Main/signup"?>'>
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
          <?php echo form_close();?>
 </div>
  </div>
  </div>
  </div>
</body>
</html>