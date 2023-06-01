<!-- delete petugas -->
<?php  
	include 'koneksi.php';

	$id_spp = $_GET['id_spp'];
	$delete = mysqli_query($sambung,"DELETE FROM spp WHERE id_spp = '$id_spp'");
	if ($delete) {
		header('location:data_spp.php');
	}

?>