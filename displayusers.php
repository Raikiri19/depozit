<?php include("header.php"); ?>

<?php 
$db = new DB;

foreach($db->displayUsers('users') as $value) {
	echo $value['email'] . "<br />";
}

?>



<?php include("footer.php"); ?>
