<?php include("header.php"); ?>
		<br />
		<br />
		
		<hr>

		<?php
			$db = new DB;

			$id = $_GET['id'];

			$db->delItem($id, "materiale");
			echo "<div class='alert alert-primary' role='alert'>
  Item successfully DELETED!
</div>";
			echo "<a href='index.php'><button class='btn btn-success'>Go Back</button></a>";

			
		 ?>

<br />
<br /> 
<hr>
<?php include("footer.php"); ?>