<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign UP</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url()?>Prison/jquery331.js"></script>

	<style>
body {
  background: rgb(4, 56, 199);
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
body:before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  display: block;
  background: rgba(2, 24, 85);
  width: 100%;
  height: 100%;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 300px;
  margin: 0 auto 100px;
  padding: 30px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  text-align: center;
}
.form .thumbnail {
  background: #fff;
  width: 100px;
  height: 100px;
  margin: 0 auto 30px;
  padding: 0px;
  border-top-left-radius: 100%;
  border-top-right-radius: 100%;
  border-bottom-left-radius: 100%;
  border-bottom-right-radius: 100%;
  box-sizing: border-box;
}
.form .thumbnail img {
  display: block;
  width: 100%;
}
.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;
}

button {
  outline: none !important;
  border: none;
}

button:hover {
  cursor: pointer;
}
#btn {
  font-family: Ubuntu-Bold;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;
  display: flex;
  justify-content: center;
  align-items: center;
  padding:  0px;
  min-width: 200px;
  height: 42px;
  border-radius: 21px;
  background: -webkit-linear-gradient(left, #03036E, #0804e6, #03036E);
  position: relative;
  z-index: 1;
  transition: all 0.4s;
}

.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #EF3B3A;
  text-decoration: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: white;
}


</style>
</head>
<body>
<div class="container">
	<div class="info">
	 <h1 color="white"> Jianyu Prison </h1>
	 <h1 color="white">Login Form</h1>
	 </div>
	 <div class="form">
 <div class="thumbnail"><img src="<?php echo base_url();?>Prison/Images/imagefav.jpg" width="200px"/></div>
<?php
 echo form_open('index.php/Main/signup_validation');
echo validation_errors();
echo "<p>Full Name";
 echo form_input('fullname');
 echo "</p>";
 echo "<p>Email";
 echo form_input('email', $this->input->post('email'));
 echo "</p>";
 echo "<p>Password";
 echo form_password('password');
 echo "</p>";
  echo "<p>Confirm Password";
 echo form_password('cpassword');
 echo "</p>";
 echo "<p>";
 echo "<p>PhoneNumber";
 echo form_input('phonenumber');
 echo "</p>";?>
 
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

 <button type="submit" id="btn">Sign Up</button>
<?php
 echo form_close();
 ?>
 <p class="message">Already registered? </p><a href='<?php echo base_url()."index.php/Main/index"?>'>Login</a>
</body>
</html>