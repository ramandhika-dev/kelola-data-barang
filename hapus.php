<?php
	include "koneksi.php";
	$hapus = mysqli_query($konek, "DELETE FROM barang WHERE kode='$_GET[id]'");
	
	if($hapus){
		header('location:index.php');
	}else{
		echo "Hapus data gagal...,
			<a href='index.php'><<< Kembali</a>";
	}
?>