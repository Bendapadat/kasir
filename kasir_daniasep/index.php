<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI KASIR</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class="container col-3">
		<div class="content">
			<div class="card mt-5">
				<div class="row">
					<div class="col-14">
						<div class="card-header text-center">
							<h2 class="text">Login</h2>
							<img src="assets/login.peng" width="220">
						</div>
						<!--<p class="text-center mt-5">Silahkan Masukan Username dan Password</p>-->
						<?php 
						if(isset($_GET['pesan'])){
							if($_GET['pesan']=="gagal"){
								echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
							}
						}
						?>
						<form method="post" action="cek_login.php">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username" autocomplete="off">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password" autocomplete="off">
							</div>
							<div class="form-group mt-3">
								<button class="btn btn-primary btn-block" type="submit">Login</button>
							</div>
						</form>															
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>