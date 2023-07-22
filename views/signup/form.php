<?php 
$title = "User Signup";
include_once('./views/includes/head.php');
include_once('./views/includes/header.php');
?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-5 col-sm-12 pt-5">
			<form id="formSignup" action="" method="post">
				<div class="mb-3">
					<label for="username" class="form-label">Email Address</label>
					<input type="email" class="form-control" id="username" name="username" minlength="5" autocomplete="false" required>
				</div>
				<div class="mb-3">
					<label for="password" class="form-label">Password</label>
					<input type="password" class="form-control" id="password" name="password" minlength="6" autocomplete="false" required>
				</div>
				<div class="mb-3 text-center">
					<button type="submit" class="btn btn-primary">Registrarse</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php 
include_once('./views/includes/footer.php');
?>