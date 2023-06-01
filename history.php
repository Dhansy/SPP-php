<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>History Pembayaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/table-data.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h2 class="text-center mt-2">Histori Pembayaran</h2>
	<div class="container">
		<div class="clearfixs">
			<div class="float-left">
				<a href="dashboard_siswa.php" id="tambah" class="btn btn-primary shadow">Kembali</a>
			</div>
		</div>
		<div class="text-center mt-2">
			<table class="table table-bordered shadow" border="1">
				<thead id="thead">
					<tr>
					<th>No</th>
					<th>Nisn</th>
                    <th>Nama SIswa</th>
					<th>Kelas</th>
					<th>Jurusan</th>
					<th>Bulan</th>
					<th>Keterangan</th>
					</tr>
				</thead>
				<tbody id="tbody">
				<?php
				include 'koneksi.php';

				$nisn = $_SESSION['nisn'];

				$query = "SELECT siswa.nisn, siswa.nama, kelas.nama_kelas, kelas.jurusan , pembayaran.tahun, pembayaran.ket
				FROM pembayaran
				INNER JOIN siswa ON siswa.nisn = pembayaran.nisn
				INNER JOIN kelas ON kelas.id_kelas = siswa.id_kelas
				WHERE pembayaran.ket = 'lunas' AND siswa.nisn= '$nisn'";
				
	  $result = mysqli_query($sambung, $query);
	  $no = 0;
	  while($row = mysqli_fetch_array($result)){
					
				$no++?>

					<tr>
						<td><?=$no?></td>
						<td><?=$row['nisn']?></td>
						<td><?=$row['nama']?></td>
						<td><?=$row['nama_kelas']?></td>
						<td><?=$row['jurusan']?></td>
						<td><?=$row['tahun']?></td>
						<td><?=$row['ket']?></td>
					</tr>
					

					<?php
				}
			?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
