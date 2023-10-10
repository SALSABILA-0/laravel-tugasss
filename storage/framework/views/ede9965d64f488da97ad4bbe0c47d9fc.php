<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Login & Logout PHP</title>
</head>
<body>
	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4 mt-5">

				<?php
				if(isset($_SESSION['error'])) {
				?>
				<div class="alert alert-warning" role="alert">
				  <?php echo $_SESSION['error']?>
				</div>
				<?php
				}
				?>


				<div class="card ">
					<div class="card-title text-center">
						<h1>Login Form</h1>
					</div>
					<div class="card-body">
						<form action="process.php" method="post">
							<div class="form-group">
								<label for="username">Nama</label>
								<input type="text" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" placeholder="Nama">

							</div>
							<div class="form-group">
								<label for="username">username</label>
								<input type="username" name="username" class="form-control" id="username" placeholder="username">
							</div>

                            <div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password" placeholder="Password">
							</div>


							<button type="submit" class="btn btn-primary">Submit</button>

                            <a href="#" id="signup">Tidak punya akun? <a href="register.php">Sign Up Now</a><br>    
						</form>

					</div>
				</div>
			</div>

		</div>

	</div>
</body>

<?php /**PATH C:\xampp\htdocs\example-app\resources\views/login2.blade.php ENDPATH**/ ?>