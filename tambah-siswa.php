<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Siswa</title>
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
        <h2 class="text-center mt-4">Tambah Data Siswa</h2>
        <form method="POST">
          <!-- nisn -->
          <div class="form-group row">
            <div class="col-md-4 offset-1 mt-1">
              <label>NISN</label>
            </div>
            <div class="col-md-4">
              <input type="number" name="nisn" class="form-control rounded-pill">
            </div>
          </div>
            <!-- nis -->
            <div class="form-group row">
            <div class="col-md-4 offset-1 mt-1">
              <label>NIS</label>
            </div>
            <div class="col-md-4">
              <input type="number" name="nis" class="form-control rounded-pill">
            </div>
            </div>
            <!-- nama siswa -->
            <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Nama siswa</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="nama" class="form-control rounded-pill">
            </div>
            </div>
            <!-- kelas -->
            <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Kelas</label>
            </div>
            <div class="col-md-4">
            <select name="kelas" id="" class="form-control rounded-pill">
            <option value="-">-</option>
            <?php 
            include "koneksi.php";
            $qry_kelas=mysqli_query($sambung,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
            echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';   
            }
            ?>
              </select>
            </div>
            </div>
            <!-- nominal -->
            <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Nominal</label>
            </div>
            <div class="col-md-4">
              <input type="number" name="nominal" class="form-control rounded-pill" >
            </div>
            </div>
            <!-- alamat -->
            <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Alamat</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="alamat" class="form-control rounded-pill">
            </div>
            </div>
            <!-- jatuh tempo -->
            <div class="form-group row">
            <div class="col-md-4 offset-1 mt-1">
              <label>Jatuh Tempo<label>
            </div>
            <div class="col-md-4">
              <input type="date" name="jatuhtempo" class="form-control rounded-pill"  >
            </div>
          </div>
            <!-- password -->
            <div class="form-group row mt-3">
            <div class="col-md-4 offset-1 mt-1 ">
              <label>Password</label>
            </div>
            <div class="col-md-4">
              <input type="text" name="password" class="form-control rounded-pill">
            </div>
            </div>

            
            

            <div class="row">
            <div class="col-md-12 text-center mt-5  ">
            <a href="data_siswa.php" id="cancel" class="btn btn-danger rounded-pill col-md-3" type="submit" name="cancel">Cancel</a>
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
// if($_POST){
//     $nisn=$_POST['nisn'];
//     $nis=$_POST['nis'];
//     $nama=$_POST['nama'];
//     $kelas=$_POST['kelas'];
//     $alamat=$_POST['alamat'];
//     $password=$_POST['password'];

//     if(empty($nisn)){
//         echo"<script>alert('NISN  tidak boleh kosong');location.href='tambah-siswa.php';</script>";
//     }elseif(empty($nis)){
//       echo"<script>alert('NIS tidak boleh kosong');location.href='tambah-siswa.php';</script>";
//     }elseif(empty($nama)){
//         echo"<script>alert('Nama  tidak boleh kosong');location.href='tambah-siswa.php';</script>";
//     }elseif(empty($kelas)){
//         echo"<script>alert('kelas  tidak boleh kosong');location.href='tambah-siswa.php';</script>";
//     }elseif(empty($alamat)){
//       echo"<script>alert('alamat tidak boleh kosong');location.href='tambah-siswa.php';</script>";
//     }elseif(empty($password)){
//       echo"<script>alert('password tidak boleh kosong');location.href='tambah-siswa.php';</script>";
//     }else{
//         include'koneksi.php';
//         $insert=mysqli_query($sambung,"insert into siswa (nisn,nis,nama,id_kelas,alamat,password) value ('".$nisn."','".$nis."','".$nama."','".$kelas."','".$alamat."','".md5($password)."')");
//         echo mysqli_error($sambung);
//     if($insert){
//         echo"<script>alert('Berhasil menambahkan siswa');location.href='data_siswa.php';</script>";
//     }else{
//         echo"<script>alert('Gagal menambahkan siswa');location.href='data_siswa.php';</script>";
//     }
//   }
// }
// ?>
<?php
      if($_POST){
      
      //variabel untuk menampung inputan dari form
      $nisn=$_POST['nisn'];
      $nis  = $_POST['nis'];
      $nama   = $_POST['nama'];
      $kelas  = $_POST['kelas'];
      $alamat  = $_POST['alamat'];
      $password  = $_POST['password'];
      $awaltempo = $_POST['jatuhtempo'];
      $awaltempo = $_POST['jatuhtempo'];
      $nominal = $_POST['nominal'];

      // Membuat Array untuk menampung bulan bahasa indonesia
      $bulan = array(
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
      );


      //proses simpan
      if($nisn=='' || $nis=='' || $nama=='' || $kelas=='' || $alamat=='' || $password=='' ){
        echo "Form belum lengkap...";
      }else{
        $simpan = mysqli_query($sambung, "insert into siswa(nisn,nis,nama,id_kelas,alamat,password)
            values('$nisn','$nis','$nama','$kelas','$alamat','".md5($password)."')");
        if(!$simpan){
          echo "Penyimpanan data gagal..";
        }else{

          for($i=0; $i<12; $i++){
            //membuat tanggal jatuh tempo nya setiap tanggal 10
            $jatuhtempo = date("Y-m-d", strtotime("+$i month", strtotime($awaltempo)));

            $tahun = $bulan[date('m', strtotime($jatuhtempo))]." ".date('Y',strtotime($jatuhtempo));
          
          
            mysqli_query($sambung, "INSERT INTO pembayaran(nisn,awaltempo,tahun,nominal)
                  values('$nisn','$jatuhtempo','$tahun','$nominal')");
          }
                    echo"<script>alert('Berhasil menambahkan siswa');location.href='data_siswa.php';</script>";
          // echo $tahun; 
        }
      }

    }
?> 