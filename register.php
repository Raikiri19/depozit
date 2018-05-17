<?php include("header.php"); ?>

		<form action="register.php" method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Please Input Your Email Adress">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword">Password</label>
				<input type="password" name="pass" id="pass1" class="form-control" placeholder="Please type a secure password">
			</div>

			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">Register</button>
			</div>
		</form>

<?php 

if(isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$pass = password_hash($pass, PASSWORD_DEFAULT);

	$db = new DB;
	$db->addUser($email, $pass);
	echo "<br />";
	echo "<div class='alert alert-primary' role='alert'>SUCCESS! User successfully registered</div>";
}

?>


<?php include("footer.php"); ?>

