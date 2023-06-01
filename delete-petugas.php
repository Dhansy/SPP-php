<!-- delete petugas -->
<?php  
	include 'koneksi.php';

	$id_petugas = $_GET['id_petugas'];
	$delete = mysqli_query($sambung,"DELETE FROM petugas WHERE id_petugas = '$id_petugas'");
	if ($delete) {
		header('location:data_petugas.php');
	}

?>