<?php
include "header.php";
include "navbar.php";
?>
<div class="card mt-2">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					<div class="card-body bg-info">
						Data Barang
						<h3>3</h3>
						<a href="data_barang.php" class="btn btn-outline-primary btn-sm">Detail</a>
					</div>
				</div> 
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-body bg-info">
						Data Pembelian
						<h3>3</h3>
						<a href="pembelian.php" class="btn btn-outline-primary btn-sm">Detail</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-body bg-info">
						Stok Barang
						<h3>3</h3>
						<a href="stok_barang.php" class="btn btn-outline-primary btn-sm">Detail</a>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="card-body bg-info">
						Data Pengguna
						<h3>3</h3>
						<a href="data_pengguna.php" class="btn btn-outline-primary btn-sm">Detail</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="card mt-2">
	<div class="card-body bg-warning">
		<p>Selamat datang dihalaman Administrator, silahkan anda bisa mengakses beberapa fitur</p>
	</div>
</div>
<?php
include "footer.php";
?>