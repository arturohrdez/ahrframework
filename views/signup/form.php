<?php 
$title = "User Signup";
include_once('./views/includes/head.php');
include_once('./views/includes/header.php');
?>

<div style="padding-top: 15px; padding-bottom: 15px;">
	<form id="formSignup" action="" method="post">
		<input type="text" id="username" name="username" minlength="5" maxlength="15" autocomplete="false" required>
		<input type="password" id="username" name="password" minlength="6" autocomplete="false" required>
		<button type="submit">Sign up</button>
	</form>
</div>

<?php 
include_once('./views/includes/footer.php');
?>