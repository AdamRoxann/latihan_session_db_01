<?php
  //ceklogin
  include 'koneksi.php';

  if (isset($_POST['login'])) {
    // code...
    $username = $_POST ['username'];
    $password = md5($_POST ['password']);

  $register = $koneksi->prepare("SELECT * FROM  users WHERE username = '".$username."'");

  $register->execute();
  $hasil = $register->fetch(PDO::FETCH_OBJ);

  if (!empty($hasil)) {
    if ($hasil->password==$password) {
      $_SESSION['logged_in'] = true;
      $_SESSION['username'] = $username;
      $_SESSION['role'] = $hasil->role;

      header("location:index.php");
    }else {
      $_SESSION['message'] = "Username dan Password Tidak sesuai";
      $_SESSION["logged_in"] = false;

      header("location:login.php");
    }
    }else {
      $_SESSION['message'] = "Username dan Password Tidak sesuai";
      $_SESSION["logged_in"] = false;

      header("location:login.php");
  }
}

 ?>
