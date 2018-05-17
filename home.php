<?php include("header.php"); 
error_reporting(E_ALL);
ini_set('display_errors', 1);


$db = new DB;




$id = $_SESSION['user_session'];

foreach($db->getUserById($id) as $value) {
	$email = $value['email'];
}








?>

 <?php echo "Welcome: " . $email;  ?>

<?php include("footer.php"); ?>