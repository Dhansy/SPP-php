<?php include'header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Transaksi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/transaksi.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="main col-md-8">
        <form method="GET">
          <div class="form-group row mt-2">
            <input type="text" autocomplete="off" name="nisn" placeholder="Masukan NISN" class="form-control-plaintext col-md-7 offset-1 ">
            <button class="btn submit col-md-3 ml-5" name="cari" type="submit">Cari</button>
          </div>
        </form>
      </div>
    </div>
    <?php
      include'koneksi.php';
        if(isset($_GET['nisn'])&& $_GET['nisn']!=''){
          $data_siswa = mysqli_query($sambung,"select * from siswa where nisn = '$_GET[nisn]'");
          $data = mysqli_fetch_array($data_siswa);
          $nisn = $data['nisn'];
          $no=0;
          $no++;
    ?>

      <h2 class="text-center mt-4 mb-3">Tagihan SPP <?php echo $data['nama']; ?></h2>
      <div class="row">
        <div class="col-sm-8 offset-2">
          <table id="transaksi" class="table table-bordered table-sm table-hover text-center shadow">
            <thead id="thead">
              <tr>
              <th>No</th>
              <th>Bulan</th>
              <th>Tgl. Bayar</th>
              <th>Nominal</th>
              <th>Keterangan</th>
              
              <th>Bayar</th>
              </tr>
            </thead>
            <tbody id="tbody">
            <?php
            $sql = mysqli_query($sambung, "SELECT * FROM pembayaran WHERE nisn='$data[nisn]' ORDER BY awaltempo ASC");
            $no=1;
            while($data=mysqli_fetch_array($sql)){
              
              echo "<tr>
                <td>$no</td>
                <td>$data[tahun]</td>
                <td>$data[tgl_bayar]</td>
                <td>$data[nominal]</td>
                <td>$data[ket]</td>
                
                
                <td align='center'>";
                  if($data['ket']==''){
                    echo "<a href='proses_transaksi.php?nisn=$nisn&act=bayar&id=$data[id_pembayaran]'>Bayar</a>";
                  }else{
                    echo "-";
                  }
                echo "</td>
              </tr>";
              $no++;
            }
            ?>


        <?php
        } 
      ?>
            </tbody>
          </table>
        </div>
      </div>

    
  </div>
  <div class="container">
  <a href="dashboard_petugas.php" id="cancel" class="btn btn-danger rounded-pill col-md-2" type="submit" name="cancel">Cancel</a>
  </div>
</body>
</html>

