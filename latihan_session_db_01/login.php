<?php
  session_start();
if (isset($_SESSION['message'])) {
  if ($_SESSION['message']!="") {
    echo "<p class='peringatan'>".$_SESSION['message']."</p>";
    $_SESSION['message']="";
  }
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <form class="box" action="ceklogin.php" method="POST">
      <h2 class="Login">Login Here</h2>
          <input type="text" name="username" value="" placeholder="Username" required>
          <input type="password" name="password" value="" placeholder="Password" required>
          <div class="text">
          <p> Forgot <a href="register.php" class="link1"> Username / Password?</a></p>

          </div>
          <button type="submit" name="login" class="button">Login</button>

      <div class="link">
        <a href="register.php" class="have-account">Don't Have an account?</a>
        <br>
        <a href="register.php" class="Sign-up">SIGN UP NOW</a>
      </div>

    </form>

  </body>
</html>
