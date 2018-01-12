<?php
session_start();

if (isset($_SESSION['login'])) {
	include 'koneksi.php';
	
	$id = isset($_GET['ID']) ? $_GET['ID'] : '';
	
	if(!empty($id)) {
		
		mysqli_query($connect, "DELETE FROM santri WHERE id = '$id'");
		
		header("location:../santri.php");
		
	} else {
		
		echo "ID Kosong bosque";
		
	}
	
} else {
	
	echo "<a href='index.php'>Login</a> Dulu Bosqu";	
	
}
?>