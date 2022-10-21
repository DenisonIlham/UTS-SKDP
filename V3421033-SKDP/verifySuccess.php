<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loading...</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    h1{
      position: absolute;
			left: 50px;
			top: 50px;
			color: white;
      font-size:37px;
    }
  </style>
</head>
<body class="img js-fullheight" style="background-image: url(images/BG1.jpg);">

  <!-- content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-5 mt-5 pt-5">
        
        <div class="card" >
          <img class="card-img-top bg-dark" style="width:100%; height:10rem; opacity:0.8;">
          <h1>Selamat Mengerjakan</h1>
          <div class="card-body">
            <form>
              <div class="mb-3">
                <button class="btn btn-danger" disabled="disabled" style="width:100%;">ATTENTION</button>
              </div>
              <div class="mb-3">
                <span>
                terdapat 100 soal yang terdiri dari mata pelajaran bahasa indonesia, bahasa inggris, matematika, dan mata pelajaran tujuan ( ipa / ips).
                </span>
                Waktu Pengerjaan : <button disabled="disabled" class="badge bg-danger">120 minutes</button>
              </div>
              <div class="row justify-content-center" style="float;center; ">
                <a href="alert.php" class="btn btn-success btn-block" style="color:white;">Kerjakan</a>
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