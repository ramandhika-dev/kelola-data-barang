<?php include "header.php"; ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
	.gram {
		margin-left: -25px;
		margin-top: 5px;
	}
</style>

<div class="container" style="margin-top:20px">
	<h3>Input Data Barang</h3>
	<hr>

	<form method="post" action="">
		<table>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kode</label>
				<div class="col-sm-10">
					<input type="text" name="kode" class="form-control" maxlength="8">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-10">
					<input type="text" name="nama" class="form-control" maxlength="50">
				</div>
			</div>
			</tr>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi</label>
				<div class="col-sm-10">
					<input type="text" name="deskripsi" class="form-control" value="">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Stok</label>
				<div class="col-sm-10">
					<input type="text" name="stok" class="form-control" value="">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm -2 col-form-label">Harga</label>
				<div class="col-sm-10">
					<input type="text" name="harga" class="form-control" value="">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Berat</label>
				<div class="col-sm-3">
					<input type="text" name="berat" class="form-control" value="">
				</div>
				<div class="col-sm-3">
					<p class="gram">Gram</p>
				</div>
			</div>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" class="btn btn-success" /></td>
			</tr>
		</table>
	</form>

	<!-- simpan data -->
	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		//variabel untuk menampung inputan dari form
		$kode 	= $_POST['kode'];
		$nama 	= $_POST['nama'];
		$deskripsi 	= $_POST['deskripsi'];
		$stok 	= $_POST['stok'];
		$harga = $_POST['harga'];
		$berat = $_POST['berat'];

		//proses simpan
		if ($kode == '' || $nama == '' || $stok == '') {
			echo "Form belum lengkap...";
		} else {
			$simpan = mysqli_query($konek, "insert into barang(kode,nama,deskripsi,stok,harga,berat)
					values('$kode','$nama','$deskripsi','$stok','$harga','$berat')");
			if (!$simpan) {
				echo "Penyimpanan data gagal..";
			}
			echo '<script>window.location.href = "index.php";</script>';
		}
	}
	?>