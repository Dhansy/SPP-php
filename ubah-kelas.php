<?php include 'header.php'; ?>
<?php 
include 'koneksi.php';
  $id_kelas = $_GET['id_kelas'];
  $tampil = mysqli_query($sambung,"SELECT * FROM kelas WHERE id_kelas = $id_kelas");
  while ($data = mysqli_fetch_array($tampil)) {
    $nama=$data['nama_kelas'];
    $jurusan=$data['jurusan'];
    $angkatan=$data['angkatan'];

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
          <!-- nama Kelas -->
          <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Nama Kelas</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="nama" class="form-control rounded-pill" value="<?php echo $nama ?>">
            </div>
            </div>
            <!-- role -->
            <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Jurusan</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="jurusan" class="form-control rounded-pill" value="<?php echo $jurusan ?>">
            </div>
            </div>
            <!-- username -->
          <div class="form-group row">
            <div class="col-md-4 offset-1 mt-1">
              <label>angkatan</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="angkatan" class="form-control rounded-pill" value="<?php echo $angkatan ?>">
            </div>
          </div>
            
            <div class="row">
            <div class="col-md-12 text-center mt-5  ">
            <a href="data_kelas.php" id="cancel" class="btn btn-danger rounded-pill col-md-3" type="submit" name="cancel">Cancel</a>
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
    $nama=$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $angkatan=$_POST['angkatan'];

        
        $update=mysqli_query($sambung,"update kelas set nama_kelas='$nama', jurusan='$jurusan', angkatan='$angkatan' where id_kelas='$id_kelas'");
    if($update){
        echo"<script>alert('Berhasil mengubah data kelas');location.href='data_kelas.php';</script>";
    }else{
        echo"<script>alert('Gagal mengubah data kelas');location.href='data_kelas.php';</script>";
    }
  }
?>