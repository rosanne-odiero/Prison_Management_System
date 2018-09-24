<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
</head>
<body>
<div class="body-content">
  <div class="module">

  <h1 style="color: #0487B3"> <b> JIANYU PRISON</b></h1>
    <h2 style="color: #07B9FA"> <b>Create an Account</b></h2>
    <form class="form" action="register.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <input type="text" placeholder="First Name" name="firstname" required />
      <input type="text" placeholder="Last Name" name="lastname" required />
      <input type="text" placeholder="NationalID Number" name="idnumber" required />
      <select name="occupation" required>
      <option>Select Occupation</option>
      <option>Registrar</option>
      <option>Supervisor</option>
      <option>Nurse</option>
      <option>Doctor</option>
    </select>
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="Phone Number" name="phonenumber" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="profile"><label>Select your profile Picture: </label><input type="file" name="profile" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      <p class="message">Already registered? <a href="Login.php" style="color: white">Sign In</a></p>
    </form>
  </div>
</div>
</body>
</html>

