<?php include("header.php"); ?>

<?php
$db = new DB;

$db->logout();
echo "<div class='alert alert-primary' role='alert'>You logged out!</div>";

?>





<?php include("footer.php"); ?> 