<?php include 'header_admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Siswa</title>
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
	<h2 class="text-center mt-2">Data Siswa</h2>
	<div class="container">
		<div class="clearfixs">
			<div class="float-right">
				<a href="tambah-siswa.php" id="tambah" class="btn btn-primary shadow">Tambah Data</a>
			</div>
			<div class="float-left">
				<a href="dashboard_admin.php" id="tambah" class="btn btn-primary shadow">Kembali</a>
			</div>
		</div>
		<div class="text-center mt-2">
			<table class="table table-bordered shadow" border="1">
				<thead id="thead">
					<tr>
					<th>No</th>
					<th>Nisn</th>
					<th>Nis</th>
                    <th>Nama</th>
					<th>Kelas</th>
					<th>Jurusan</th>
					<th>Angkatan</th>
					<th>Aksi</th>
					</tr>
				</thead>
				<tbody id="tbody">
				<?php
				include 'koneksi.php';

					$tampil_siswa=mysqli_query($sambung,"select * from siswa JOIN kelas on kelas.id_kelas = siswa.id_kelas order by angkatan DESC");
					$no=0;
				while($data_siswa=mysqli_fetch_array($tampil_siswa)){
				$no++?>

					<tr>
						<td><?=$no?></td>
						<td><?=$data_siswa['nisn']?></td>
						<td><?=$data_siswa['nis']?></td>
						<td><?=$data_siswa['nama']?></td>
						<td><?=$data_siswa['nama_kelas']?></td>
						<td><?=$data_siswa['jurusan']?></td>
						<td><?=$data_siswa['angkatan']?></td>
						<td>
							<a href="ubah-siswa.php?nisn=<?=$data_siswa['nisn']?>" ><input type="button" class="btn btn-primary" value="ubah"></a>
							<a href="delete-siswa.php?nisn=<?=$data_siswa['nisn']?>" onclick="return confirm('Ingin menghapus data ini?')"><input type="button" class="btn btn-primary" value="Hapus"></a>
						</td>
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
