<?php

error_reporting(E_ERROR | E_PARSE);
session_start();

require "php/caesar.php";

if(isset($_POST['verify'])){
  $token = $_POST['token'];
  $verifyToken = dekripsi(preg_replace("/[^A-Za-z]/", "", $_SESSION['password']), -5);

  if($token == $verifyToken){ ?>
    <script>
    alert("Verify success")
    window.location="verifySuccess.php"
    </script> <?php
  }else{
    $error = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verify</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    h1{
      position: absolute;
			left: 90px;
			top: 55px;
			color: white;
      font-size:50px;
    }
  </style>
</head>
<body class="img js-fullheight" style="background-image: url(images/BG1.jpg);">

  <!-- content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-5 mt-2 pt-4">
        
        <div class="card" >
          <img class="card-img-top bg-dark" style="width:100%; height:10rem; opacity:0.8;">
          <h1 class="card-img-top" style="color:white;">Verify token</h1>
          <div class="card-body">
            <form method="post">
              <div class="mb-3">
                <button class="btn btn-danger" disabled="disabled" style="width:100%;">ATTENTION</button>
              </div>
              <div class="mb-3">
                <span>
                  Enter the email address and token you got when registering an account. tokens are valid for a maximum of <span class="badge bg-danger">3</span> uses. after 3 times failed in the test then you have to confirm directly to the school to register.
                </span>
              </div>
              <div class="mb-3">
                <label class="form-label">Token test</label>
                <?php if(isset($error)){ ?>
                  <span><i style="color:red; float:right;">invalid token</i></span>
                <?php } ?>
                <input type="text" class="form-control" name="token">
              </div>
              <div class="row justify-content-center" style="float;center; ">
                <a href="index.php" class="btn btn-danger btn-block" >Cancel</a>
                <button name="verify" class="btn btn-success btn-block" >Verify</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /content -->
</body>
</html>