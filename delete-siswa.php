<!-- delete siswa -->
<?php  
	include 'koneksi.php';

	$nisn = $_GET['nisn'];
	$delete = mysqli_query($sambung,"DELETE FROM siswa WHERE nisn = '$nisn'");
	if ($delete) {
		header('location:data_siswa.php');
	}
?>
