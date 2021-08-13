<?php include "header.php"; ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
 .gram {
	 margin-left: -25px;
	 margin-top: 5px;
 }
</style>

<?php
$sqlEdit = mysqli_query($konek, "SELECT * FROM barang WHERE kode='$_GET[id]'");
$e=mysqli_fetch_array($sqlEdit);
?>

<div class="container" style="margin-top:20px">
<h3>Update Data Barang</h3>

<hr>

<form method="post" action="">
	<input type="hidden" name='kode' value="<?php echo $e['kode']; ?>" />
	<table>
		<div class="form-group row">
		<label class="col-sm-2 col-form-label">Kode</label>
			<div class="col-sm-10">
				<input type="text" name="kode" class="form-control" size="4" value="<?php echo $e['kode']; ?>">
			</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-2 col-form-label">Nama</label>
			<div class="col-sm-10">
				<input type="text" name="nama" class="form-control" value="<?php echo $e['nama']; ?>" maxlength="50" required>
			</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-2 col-form-label">Deskripsi</label>
			<div class="col-sm-10">
				<input type="text" name="deskripsi" class="form-control" value="<?php echo $e['deskripsi']; ?>">
			</div>
		</div>

		<div class="form-group row">
		<label class="col-sm-2 col-form-label">Stok</label>
			<div class="col-sm-10">
				<input type="text" name="stok" class="form-control" value="<?php echo $e['stok']; ?>">
			</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-2 col-form-label">Harga</label>
			<div class="col-sm-10">
				<input type="text" name="harga" class="form-control" value="<?php echo $e['harga']; ?>">
			</div>
		</div>
		<div class="form-group row">
		<label class="col-sm-2 col-form-label">Berat</label>
			<div class="col-sm-3">
				<input type="text" name="berat" class="form-control" value="<?php echo $e['berat']; ?>">
			</div>
			<div class="col-sm-3">
				<p class="gram">Gram</p>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" value="Update" class="btn btn-success" />
				</div>
		</div>
	</table>
</form>

<!-- proses edit data -->
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

	//variabel untuk menampung inputan dari form
	$kode 	= $_POST['kode'];
	$nama 	= $_POST['nama'];
	$deskripsi 	= $_POST['deskripsi'];
	$stok 	= $_POST['stok'];
	$harga 	= $_POST['harga'];
	$berat 	= $_POST['berat'];

	if($kode=='' || $nama =='' || $stok==''){
		echo "Form Kosong";
	}else{
		$update = mysqli_query($konek, "UPDATE barang SET kode='$kode',
											nama='$nama',
											deskripsi='$deskripsi',
											stok='$stok',
											harga='$harga',
											berat='$berat'
										WHERE kode='$kode'");

		if(!$update){
			echo "Update data gagal...";

		}else{
			echo '<script>window.location.href = "index.php";</script>';
		}
	}
}
?>
