<?php include "header.php"; ?>

  	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<div class="container" style="margin-top:20px">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<div class="table-responsive">
	<style>
	.tombol  {
		position: absolute;
		right: 0;
		top: 65px;
		width: 200px;
	}
	</style>
	<title>Data Barang</title>

	<div class="container-fluid">
		<div class="row">

			<h2>Data Barang</h2>

            <div class="col-md-4 tombol">
				<a href="tambah.php"> <button type="button" class="btn btn-success">Tambah</button></a>
            </div>
        </div>
		<hr>
	</div>

	</div>
	<table class="table table-striped table-hover table-sm table-bordered">
	<thead class="bg-success">
	<tr>
		<th><center>Kode</center></th>
		<th><center>Nama</center></th>
		<th><center>Harga</center></th>
		<th><center>Aksi</center></th>
	</tr>
	</thead>

	<?php 
	$sql = mysqli_query($konek,"SELECT * FROM barang order by kode asc");
	while($d=mysqli_fetch_array($sql)){
		$harga1 = number_format($d['harga'], 2, ",", ".");
		echo "<tr> 
			<td><center>$d[kode]</center></td>
			<td><center>$d[nama]</center></td>
			<td><center>Rp. $harga1</center></td>
			<td>
				<center>
				<a href='edit.php?id=$d[kode]'>Edit</a> /
				<a href='hapus.php?id=$d[kode]'>Hapus</a>
				</center>
			</td>
		</tr>";
	}
	?>
</table>
 	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

