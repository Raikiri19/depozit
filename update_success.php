<?php include('header.php'); ?>
	
<br />
<hr>

<div class='alert alert-primary' role='alert'>SUCCESS! The row has changed as you expected. No errors occured during this process</div>

<?php
$db = new DB;
$db->redirect("index.php");
 ?>

<?php include('footer.php'); ?>