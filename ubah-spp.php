<?php include 'header.php'; ?>
<?php 
include 'koneksi.php';
  $id_spp = $_GET['id_spp'];
  $tampil = mysqli_query($sambung,"SELECT * FROM spp WHERE id_spp = $id_spp");
  while ($data = mysqli_fetch_array($tampil)) {
    $angkatan=$data['angkatan'];
    $tahun=$data['tahun'];
    $nominal=$data['nominal'];

  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ubah Kelas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/tambah_petugas.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="main col-md-6 offset-3">
        <h2 class="text-center mt-4">Ubah Data Kelas</h2>
        <form method="POST">
          <!-- angkatan -->
          <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Angkatan</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="angkatan" class="form-control rounded-pill" value="<?php echo $angkatan ?>">
            </div>
            </div>
            <!-- role -->
            <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>tahun</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="tahun" class="form-control rounded-pill" value="<?php echo $tahun ?>">
            </div>
            </div>
            <!-- username -->
          <div class="form-group row">
            <div class="col-md-4 offset-1 mt-1">
              <label>nominal</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="nominal" class="form-control rounded-pill" value="<?php echo $nominal ?>">
            </div>
          </div>
            
            <div class="row">
            <div class="col-md-12 text-center mt-5  ">
            <a href="data_spp.php" id="cancel" class="btn btn-danger rounded-pill col-md-3" type="submit" name="cancel">Cancel</a>
              <button class="submit" type="submit" name="simpan">Simpan</button>
            </div>
          </div>
          
            
              </div>         
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
include'koneksi.php';
if($_POST){
    $angkatan=$_POST['angkatan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];

        
        $update=mysqli_query($sambung,"update spp set angkatan='$angkatan', tahun='$tahun', nominal='$nominal' where id_spp='$id_spp'");
    if($update){
        echo"<script>alert('Berhasil mengubah data SPP');location.href='data_spp.php';</script>";
    }else{
        echo"<script>alert('Gagal mengubah data SPP');location.href='data_spp.php';</script>";
    }
  }
?>