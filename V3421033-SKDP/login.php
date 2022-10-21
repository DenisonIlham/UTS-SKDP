<?php

error_reporting(E_ERROR | E_PARSE);
session_start();

include("php/db.php");
include "php/caesar.php";

if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = md5('asdfghkl' . $_POST['password']);

  $sql = ("SELECT * FROM uts WHERE email='$email' AND password='$password'");

  if ($conn->query($sql)->num_rows > 0) {
    $sql = "SELECT * FROM uts WHERE email='$email'";
    $result = $conn->query($sql)->fetch_assoc();
    session_start();

    $_SESSION['rule']=$result['rule'];
    $_SESSION['password']=$result['password'];
    $_SESSION['username']=$result['username']; ?>

    <script>
    alert("Login success")
    window.location="index.php"
    </script> <?php
  }else{
    $error = true;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
<!-- costum css -->
<link rel="stylesheet" href="style.css">
<title>Login</title>
</head>
  
<body class="img js-fullheight" style="background-image: url(images/bg.jpg); padding-top: 10vh;">
    <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container" action="register.php" method="post">
                <h4 class="text-center font-weight-bold"> LOG IN </h4>
                <div class="card-body">
</form>
<form method="post">
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <?php if(isset($error)){ ?>
                  <span><i style="color:red; float:right;">email or password wrong</i></span>
                <?php } ?>
                <input type="email" class="form-control" name="email">
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
              </div>
              <div class="col">
                <a href="index.php" class="btn btn-danger btn-block">Cancel</a>
                <button name="login" class="btn btn-primary btn-block">Login</button>
                <div class="form-footer mt-2">
                    <p> Belum punya akun ? <a href="register.php">register</a></p>
                </div>
              </div>
            </form>
        </section>
        </section>
    </section>
 
    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, danyang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>