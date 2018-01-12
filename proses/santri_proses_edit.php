<?php
	session_start();
	
	if (isset($_SESSION['login'])) {
		include 'koneksi.php';
		
		$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
		$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
		$tempat = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
		$tanggal = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
		$id = isset($_POST['id']) ? $_POST['id'] : '';
		
		$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
		
		$tanggal_input = date('Y-m-d H:i:s');
		$user_id = $_SESSION['user_id'];
		
		if (!empty($nama) && !empty($alamat) && !empty($tempat) && !empty($tanggal) && !empty($jenis)) {
			
			mysqli_query($connect, "UPDATE santri SET nama = '$nama', tempat_lahir = '$tempat', tanggal_lahir = '$tanggal', alamat = '$alamat', jenis_kelamin = '$jenis' WHERE id = '$id' ");
			header("location:../santri.php");
			
		} else {
			echo "Silahkan lengkapi data <a href='../santri_edit.php'>Santri</a>";
		}
		
	} else {
		echo "<a href='index.php'>Login</a> dulu bosqu";
	}
?>