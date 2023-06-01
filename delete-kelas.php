<!-- delete petugas -->
<?php  
	include 'koneksi.php';

	$id_kelas = $_GET['id_kelas'];
	$delete = mysqli_query($sambung,"DELETE FROM kelas WHERE id_kelas = '$id_kelas'");
	if ($delete) {
		header('location:data_kelas.php');
	}

?>