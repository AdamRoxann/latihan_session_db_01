<?php
  //register.php
  session_start();

  if (isset($_SESSION['message'])) {
    if ($_SESSION['message']!="") {
      echo "<p class='salah'>".$_SESSION['message']."</p>";
      $_SESSION['message'] = "";
    }
  }

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Register</title>
         <link rel="stylesheet" href="css/registercss.css">
       </head>
       <body>

          <form method="POST" action="cekregister.php" class="box">
              <h2 class="register">Register Here</h2>
                    <p class="username" >Username</p>
                    <input type="text" name="username" placeholder="Username" required>

                    <p class="password" >Password</p>
                    <input type="password" name="password" placeholder="Password" required>

                    <button type="submit" name="register" class="button">Register</button>
                </tr>
                <a href="login.php" class="have-account">Already Have an account?</a>
                <br>
                <a href="login.php" class="Sign-up">Sign In</a>
            </table>
     </body>
 </html>
