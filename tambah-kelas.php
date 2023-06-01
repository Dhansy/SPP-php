<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Kelas</title>
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
        <h2 class="text-center mt-4">Tambah Data Kelas</h2>
        <form method="POST">
          <!-- nama kelas -->
          <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Nama Kelas</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="nama" class="form-control rounded-pill">
            </div>
            </div>
            <!-- Jurusan -->
            <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Jurusan</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="jurusan" class="form-control rounded-pill">
            </div>
            </div>
            <!-- Angkatan -->
          <div class="form-group row">
            <div class="col-md-4 offset-1 mt-1">
              <label>Angkatan</label>
            </div>
            <div class="col-md-4">
              <input type="number" name="angkatan" class="form-control rounded-pill">
            </div>
          </div>
          
            
            

            <div class="row">
            <div class="col-md-12 text-center mt-5  ">
            <a href="data_kelas.php" id="tambah" class="btn btn-danger rounded-pill col-md-3" type="submit" name="simpan">Cancel</a>
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
if($_POST){
    $nama=$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $angkatan=$_POST['angkatan'];

    if(empty($nama)){
        echo"<script>alert('Nama kelas tidak boleh kosong');location.href='data_kelas.php';</script>";
    }elseif(empty($jurusan)){
      echo"<script>alert('jurusan tidak boleh kosong');location.href='data_kelas.php';</script>";
    }elseif(empty($angkatan)){
        echo"<script>alert('angkatan siswa tidak boleh kosong');location.href='data_kelas.php';</script>";
    }else{
        include'koneksi.php';
        $insert=mysqli_query($sambung,"insert into kelas (nama_kelas,jurusan,angkatan) value ('".$nama."','".$jurusan."','".$angkatan."')");
    if($insert){
        echo"<script>alert('Berhasil menambahkan kelas');location.href='data_kelas.php';</script>";
    }else{
        echo"<script>alert('Gagal menambahkan kelas');location.href='data_kelas.php';</script>";
    }
  }
}
?>