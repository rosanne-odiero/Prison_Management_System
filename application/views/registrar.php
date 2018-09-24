<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registrar Page</title>
	 <script type="text/javascript" src="jquery331.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
</head>
<body>

<h1> Registrar </h1>

<?php
 echo form_open('index.php/Main/signup_validation');
 
echo validation_errors();
echo "<p>Full Name";
 echo form_input('fullname');
 echo "</p>";
 echo "<p>Email";
 echo form_input('email', $this->input->post('email'));
 echo "</p>";
 echo "<p>NationalID";
 echo form_input('password');
 echo "</p>";
  echo "<p>Charges filed";
 echo form_input('charges');
 echo "</p>";
 echo "<p>";
 echo "<p>PhoneNumber";
 echo form_input('phonenumber');
 echo "</p>";?>
 <p>ArrivalDate</p>


 <button type="submit" id="btn">Sign Up</button>
<?php
 echo form_close();
 ?>
<a href ='<?php echo base_url()."index.php/Main/logout"?>'>Logout</a>
</body>
</html>