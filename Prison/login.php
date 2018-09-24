<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
</head>
<body>
<div class="body-content">
  <div class="module">

    <h1 style="color: #0487B3"> <b> JIANYU PRISON</b></h1>
    <h2 style="color: #07B9FA"> <b>Login</b></h2>
    <form class="form" action="login.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" required />
      <input type="submit" value="Login" name="login" class="btn btn-block btn-primary" />
      <p class="message">Dont have an account? <a href="register.php" style="color: white">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>

