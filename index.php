<?php include("header.php"); 
$db = new DB;


?>

			<!-- <h1>Stoc marfa</h1>
			<table width="750" border="1" class="table-striped">
				<tr class="success">
					<th scope="col">ID</th>
					<th scope="col">Nume</th>
					<th scope="col">Cantitate</th>
					<th scope="col">Pret</th>
					<th scope="col" style="width: 85px;">Admin</th>
				</tr>
				
			</table>
			<button type="button" class="btn"><img src="add.png" alt="add"></button>
		</div> -->


		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Nume</th>
		      <th scope="col">Cantitate</th>
		      <th scope="col">Pret($)</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		     <?php
		    	
		    	foreach($db->showData("materiale") as $value):
		     ?>

		    <tr>
		      <th scope="row"><?php echo $value["id"]; ?></th>
		      <td><?php echo $value["name"]; ?></td>
		      <td><?php echo $value["qty"]; ?></td>
		      <td><?php echo $value["price"]; ?></td>
		      <td><a href="update.php?id=<?php echo $value['id']; ?>" class="btn btn-secondary">Edit</a><a href='delete.php?id=<?php echo $value['id']; ?>' class="btn btn-danger">Delete</a></td>
		    </tr>

			<?php
				endforeach;

				
			 ?>

		  </tbody>
		</table>
<hr>


<?php 
//print_r($db->getDataById(22, 'materiale'));
//print_r($db->editPrice());
?>



<?php include("footer.php"); ?>

