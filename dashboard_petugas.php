<?php include'header_admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Petugas dasboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="header">
    <h1 id="title" class="text-center mt-5 display-4">Welcome</h1>
    <p id="sub-title" class="text-center display-4"><?=$_SESSION['nama_petugas']?> as petugas</p>
  </div>

  <div class="row mt-5">
    <div class="col-sm-8 offset-2">
      <div class="row">
        <div class="col-md-6">
          <div class="card shadow">
            <img src="img/transaction.png" width="80px" class="mx-auto mt-3 mb-2">
            <a href="transaksi_petugas.php" class="stretched-link"><h4 class="text-center mt-1">Transaksi</h4></a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card shadow">
            <img src="img/report.png" width="80px" class="mx-auto mt-3 mb-2">
            <a href="laporan_petugas.php" class="stretched-link"><h4 class="text-center mt-1">Laporan</h4></a>
          </div>
        </div>
      </div>
      <div class="clearfixs">
        <div class="float-right">
          <a href="logout.php" class="btn mt-4"><i class="fa fa-sign-out"> Sign Out</i></a>
        </div>
      </div>
    </div>  
  </div>  
</div>
</body>
</html>
