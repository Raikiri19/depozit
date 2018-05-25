<?php require("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>php registration page</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		
		<div class="alert alert-primary">
			<h1 class="alert-link">Welcome</h1>	
		</div>
		<a href="index.php" class="btn btn-outline-primary">HOME</a>
		<a href="register.php" class="btn btn-outline-primary">REGISTER</a>
		<a href="login.php" class="btn btn-outline-primary">LOGIN</a>
		<a href="insert.php" class="btn btn-outline-primary">INSERT</a>
		<a href="test.php" class="btn btn-outline-primary">USER PROFILE</a>
		<a href="logout.php" class="btn btn-outline-primary">LOG OUT</a>
		<a href="displayusers.php" class="btn btn-outline-primary">USERS</a>
		<?php if(isset($_SESSION["user_session"])) {

		 ?>
		<a href="displayusers.php" class="btn btn-outline-primary disabled">LOGGED AS: <?php echo $_SESSION['user_session_email']; ?></a>
		<?php 
		} else {

		}

		?>
		<br>
		<br>
		
		<div>