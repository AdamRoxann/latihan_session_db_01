<?php
  session_start();

  if (!isset($_POST['login'])
      and !isset($_POST['register'])) {
        if (!isset($_SESSION['logged_in'])) {
          header("location:login.php");
        }else {
          if ($_SESSION['logged_in']==false) {
            header("location:login.php");
          }
        }
  }

	 $engi = "mysql";
	 $host = "localhost";
	 $dbse = "latihan_login";
	 $user = "root";
	 $pass = "";
	 $koneksi = new PDO($engi.':dbname='.$dbse.";host=".$host, $user,$pass);

?>
