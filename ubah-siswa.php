<?php include 'header.php'; ?>
<?php 
include 'koneksi.php';
  $nisn = $_GET['nisn'];
  $tampil = mysqli_query($sambung,"SELECT * FROM siswa JOIN kelas ON siswa.id_kelas=kelas.id_kelas WHERE nisn = $nisn");

  while ($data = mysqli_fetch_array($tampil)) {
    $nisn=$data['nisn'];
    $nis=$data['nis'];
    $nama=$data['nama'];
    $id_kelas=$data['id_kelas'];
    $kelas=$data['nama_kelas'];
    $jurusan=$data['jurusan'];
    $angkatan=$data['angkatan'];
    $alamat=$data['alamat'];

  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ubah Siswa</title>
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
        <h2 class="text-center mt-4">Ubah Data Siswa</h2>
        <form method="POST">
          <!-- nisn -->
          <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>NISN</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="nisn" class="form-control rounded-pill" value="<?php echo $nisn ?>" readonly>
            </div>
            </div>
            <!-- nis -->
          <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>NIS</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="nis" class="form-control rounded-pill" value="<?php echo $nis ?>">
            </div>
            </div>
            <!-- nama siswa -->
          <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Nama Siswa</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="nama" class="form-control rounded-pill" value="<?php echo $nama ?>">
            </div>
            </div>
            <!-- id kelas -->
            <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>ID Kelas</label>
            </div>
            <div class="col-md-4">
            <select name="id_kelas" id="" class="form-control rounded-pill">
            <?php
                  $sqlKelas = mysqli_query($sambung, "select * from kelas order by id_kelas ASC");
                  while($k=mysqli_fetch_array($sqlKelas)){

                    if($k['kelas'] == $kelasSiswa){
                      $selected = "selected";
                    }else{
                      $selected ="";
                    }

                    ?>
                    <option value="<?php echo $k['id_kelas']; ?>" <?php echo $selected; ?>><?php echo $k['id_kelas']; ?></option>
                    <?php
                  }
                ?>            
            </select>
            </div>
            </div>
            <!-- kelas -->
            <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Kelas</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="kelas" class="form-control rounded-pill" value="<?php echo $kelas ?>" readonly>
            </div>
            </div>
            <!-- jurusan -->
            <div class="form-group row mt-3">
              <div class="col-md-4 offset-1 mt-1">
                <label>jurusan</label>
              </div>
              <div class="col-md-4">
              <input type="text" name="jurusan" class="form-control rounded-pill" value="<?php echo $jurusan ?>" readonly>
            </div>
            </div>
            <!-- angkatan -->
            <div class="form-group row mt-3">
              <div class="col-md-4 offset-1 mt-1">
                <label>angkatan</label>
              </div>
              <div class="col-md-4">
              <input type="text" name="angkatan" class="form-control rounded-pill" value="<?php echo $angkatan ?>" readonly>
            </div>
            </div>
            <!-- alamat -->
          <div class="form-group row">
            <div class="col-md-4 offset-1 mt-1">
              <label>alamat</label>
            </div>
            <div class="col-md-4">
              <input type="textarea" name="alamat" class="form-control rounded-pill" value="<?php echo $alamat ?>">
            </div>
          </div>
          <div class="form-group col-md-12 text-center mt-5  ">
            <a href="data_siswa.php" id="cancel" class="btn btn-danger rounded-pill col-md-3" type="submit" name="cancel">Cancel</a>
              <button class="submit" type="submit" name="simpan">Simpan</button>
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
  $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $kelas=$_POST['id_kelas'];
    $alamat=$_POST['alamat'];
        
        include'koneksi.php';
        $update=mysqli_query($sambung,"update siswa set nis='$nis', nama='$nama', id_kelas='$kelas', alamat='$alamat' where nisn='$nisn'");
    if($update){
      echo mysqli_error($sambung);
        echo"<script>alert('Berhasil mengubah siswa');location.href='data_siswa.php';</script>";
    }else{
      echo"<script>alert('Gagal mengubah data SPP');location.href='data_siswa.php';</script>";
  }
  }
?>