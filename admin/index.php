<?php
include './functions.php';
?> 

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="./css/login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
  <div class="container">
    <h1>Welcome To <?php getName() ?> Admin Panel</h1>
    <p>Ready to login?</p>
    <form action="login.php" method="POST">
      <center>
      <div class="form-group">
        <input placeholder="User Name" type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <input type="password" id="password" placeholder="Password" name="password" required>
      </div>
        <input class="login-bt" type="submit" value="Login to panel">
      </center>
    </form>
  </div>
</body>
</html>
