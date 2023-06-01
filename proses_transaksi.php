<?php 
	session_start();			
		if(isset($_SESSION['status_login'])){
			include "koneksi.php";
			if(isset($_GET['act']) && $_GET['act']=='bayar'){
				if(isset($_GET['id'], $_GET['nisn'])) {
					$id_pembayaran = $_GET['id'];
					$nisn = $_GET['nisn'];

					// // Tanggal Bayar
					$tgl_bayar = date('Y-m-d');
					
					$admin = $_SESSION['id'];
					mysqli_query($sambung, "UPDATE pembayaran SET tgl_bayar='$tgl_bayar', 
																  ket='LUNAS',
																  id_petugas=$admin
															  WHERE id_pembayaran='$id_pembayaran'");
					
					header('location:transaksi_admin.php?nisn='.$nisn);
				} else {
					echo "Invalid parameters";
					
				}
			}
		}
?>
