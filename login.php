<?php include("header.php"); 

$db = new DB;

if($db->is_logged_in() != "") {
	$db->redirect('home.php');
}

if(isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	if($db->logIn($email, $pass)) {
		$db->redirect('index.php');
		echo "success";
	} else {
		echo "Eroare";
	}
}

?>


		
		<form action="login.php" method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword">Password</label>
				<input type="password" name="pass" id="pass1" class="form-control" placeholder="Enter your password">
			</div>

			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
			</div>
		</form>
<?php include("footer.php"); ?>

