<?php
//variabel koneksi
$konek = mysqli_connect("localhost", "root", "", "data");

if (!$konek) {
	echo "Koneksi Database Gagal...!!!";
}
