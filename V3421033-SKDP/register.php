<?php


error_reporting(E_ERROR | E_PARSE);
session_start();

require "php/caesar.php";
require "php/db.php";

if(isset($_POST['register'])){
  $name = preg_replace("/[^A-Za-z\ ]/", "", $_POST['name']);
  $username = strtolower(preg_replace("/[^A-Za-z\ ]/", "", $_POST['username']));
  $email = $_POST['email'];
  $password = md5('asdfghkl' . $_POST['password']);
  $confirmPassword = md5('asdfghkl' . $_POST['confirmPassword']);

  if($password != $confirmPassword){
    $error=true;
  }else{
    $sql = "INSERT INTO uts (name, username, email, password)
    VALUES ('$name', '$username', '$email', '$password')";
  
    if ($conn->query($sql) === TRUE) { ?>
      <script>
      alert("Register success")
      window.location="login.php"
      </script>
      <?php
    }
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
<title>Registrasion</title>
</head>
  
<body class="img js-fullheight" style="background-image: url(images/bg.jpg); padding-top: 10vh;">
    <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container">
                <h4 class="text-center font-weight-bold bg-primary"> Registrasi Form</h4>
                <div class="card-body">
</form>
            <form method="post" class="">
              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Confirm password</label>
                <?php if(isset($error)){ ?>
                  <span><i style="color:red; float:right;">different password confirmation</i></span>
                <?php } ?>
                <input type="password" class="form-control" name="confirmPassword" required>
              </div>
              <div class="col">
              <a href="login.php" class="btn btn-danger btn-block">Cancel</a>
                <button name="register" type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <div class="form-footer mt-2">
                    <p> Sudah punya account? <a href="login.php">Login</a></p>
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