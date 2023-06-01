<?php include 'header_admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data SPP</title>
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
	<h2 class="text-center mt-2">Data SPP</h2>
	<div class="container">
		<div class="clearfixs">
			<div class="float-right">
				<a href="tambah-spp.php" id="tambah" class="btn btn-primary ">Tambah Data</a>
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
					<th>Angkatan</th>
					<th>Tahun</th>
					<th>Nominal</th>
					<th>Aksi</th>
					</tr>
				</thead>
				<tbody id="tbody">
				<?php
				include 'koneksi.php';

					$tampil_spp=mysqli_query($sambung,"select * from spp ");
					$no=0;
				while($data_spp=mysqli_fetch_array($tampil_spp)){
				$no++?>

					<tr>
						<td><?=$no?></td>
						<td><?=$data_spp['angkatan']?></td>
						<td><?=$data_spp['tahun']?></td>
						<td><?=$data_spp['nominal']?></td>
						<td>
							<a href="ubah-spp.php?id_spp=<?=$data_spp['id_spp']?>"  type="button" class="btn btn-primary">ubah</a>
							<a href="delete-spp.php?id_spp=<?=$data_spp['id_spp']?>" onclick="return confirm('Ingin menghapus data ini?')"><input type="button" class="btn btn-primary" value="Hapus"></a>
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
