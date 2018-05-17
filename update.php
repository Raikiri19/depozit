<?php include("header.php"); ?>
			<?php 
			$db = new Db;
			?>

		
				
				<?php 
					$id = $_GET["id"];
				?>
			<form method="POST" action="update.php">
				
				<div class="form-group">

				<?php foreach($db->getDataById($id, "materiale") as $value):

				?>
					<label for="numeMaterial"> Modifica Numele</label>
					<input type="text" name="nume" class="form-control" value="<?php echo $value['name']; ?>" />
				</div>

				<div class="form-group">
					<label for="cantitateMaterial">Modifica Cantitatea</label>
					<input type="number" name="cantitate" class="form-control" value="<?php echo $value['qty']; ?>" />
				</div>

				<div class="form-group">
					<label for="pretMaterial">Modifica Pretul</label>
					<input type="number" name="pret" class="form-control" value="<?php echo $value['price']; ?>" />
				</div>

				<div class="form-group">
					
					<input type="hidden" name="id" class="form-control" value="<?php echo $value['id']; ?>" />
				</div>



			<?php endforeach; ?>

				<button name="submit" class="btn btn-success">Update</button>
			</form>
		</div>
<?php 
if(isset($_POST["submit"])) {
	$nume = $_POST['nume'];
	$cantitate = $_POST['cantitate'];
	$pret = $_POST['pret'];
	$id = $_POST['id'];


$sql = "UPDATE materiale SET name = '$nume', qty = '$cantitate', price = '$pret' WHERE id = '$id'";
$db->exeQuery($sql);

header('Location: update_success.php');




	// echo $nume;
	// echo "<br />";
	// echo $cantitate;
	// echo "<br />";
	// echo $pret;
}

include("footer.php"); ?>

