<?php include 'header.php'; ?>
<?php 
include 'koneksi.php';
  $id = $_GET['id_petugas'];
  $tampil = mysqli_query($sambung,"SELECT * FROM petugas WHERE id_petugas = $id");
  while ($data = mysqli_fetch_array($tampil)) {
    $nama=$data['nama_petugas'];
    $peran=$data['level'];
    $username=$data['username'];

  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ubah Petugas</title>
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
        <h2 class="text-center mt-4">Ubah Data Petugas</h2>
        <form method="POST">
          <!-- nama petugas -->
          <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Nama Petugas</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="nama" class="form-control rounded-pill" value="<?php echo $nama ?>">
            </div>
            </div>
            <!-- role -->
            <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Peran</label>
            </div>
            <div class="col-md-4">
              <select name="peran" id="" class="form-control rounded-pill">
                  <option value="<?php echo $peran ?>"><?php echo $peran ?></option>
                  <option value="petugas">Petugas</option>
                  <option value="admin">Admin</option>
              </select>
            </div>
            </div>
            <!-- username -->
          <div class="form-group row">
            <div class="col-md-4 offset-1 mt-1">
              <label>Username</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="username" class="form-control rounded-pill" value="<?php echo $username ?>">
            </div>
          </div>
            
            <div class="row">
            <div class="col-md-12 text-center mt-5  ">
            <a href="data_petugas.php" id="tambah" class="btn btn-danger rounded-pill col-md-3" type="submit" name="simpan">Cancel</a>
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
    $peran=$_POST['peran'];
    $username=$_POST['username'];

        
        $update=mysqli_query($sambung,"update petugas set nama_petugas='$nama', level='$peran', username='$username' where id_petugas='$id'");
    if($update){
        echo"<script>alert('Berhasil mengubah petugas');location.href='data_petugas.php';</script>";
    }else{
        echo"<script>alert('Gagal mengubah petugas');location.href='data_petugas.php';</script>";
    }
  }
?>