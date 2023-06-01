<?php include 'header.php'; ?>
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
	<h2 class="text-center mt-2">Data Pribadi Siswa </h2>
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
					<th>Nis</th>
                    <th>Nama</th>
					<th>Kelas</th>
					<th>Jurusan</th>
					<th>Angkatan</th>
					</tr>
				</thead>
				<tbody id="tbody">
				<?php
				include 'koneksi.php';

				$nisn = $_SESSION['nisn']; // Assuming the NISN is stored in the session after login

				$query = "SELECT siswa.nisn, siswa.nis, siswa.nama, kelas.nama_kelas, kelas.jurusan, kelas.angkatan
						  FROM siswa 
						  JOIN kelas ON kelas.id_kelas = siswa.id_kelas
						  WHERE siswa.nisn = '$nisn'";
					
				$result = mysqli_query($sambung, $query);
				
				if(mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					?>
					<tr>
						<td>1</td>
						<td><?= $row['nisn'] ?></td>
						<td><?= $row['nis'] ?></td>
						<td><?= $row['nama'] ?></td>
						<td><?= $row['nama_kelas'] ?></td>
						<td><?= $row['jurusan'] ?></td>
						<td><?= $row['angkatan'] ?></td>
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
