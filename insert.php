<?php include("header.php"); ?>
		
			<form method="POST" action="insert.php">
				
				<div class="form-group">
					<label for="numeMaterial">Nume</label>
					<input type="text" name="nume" class="form-control" placeholder="nume material" />
				</div>

				<div class="form-group">
					<label for="cantitateMaterial">Cantitate</label>
					<input type="number" name="cantitate" class="form-control" placeholder="cantitate material" />
				</div>

				<div class="form-group">
					<label for="pretMaterial">Pret</label>
					<input type="number" name="pret" class="form-control" placeholder="pret material" />
				</div>

				<button name="submit" class="btn btn-success">Adauga Material</button>
			</form>

			<?php 
				if (isset($_POST["submit"])) {
					$nume = $_POST["nume"];
					$cantitate = $_POST["cantitate"];
					$pret = $_POST["pret"];

					$db = new DB;
					$db->insertData($nume, $cantitate, $pret);
					echo "<br />";
					echo "<div class='alert alert-primary' role='alert'>SUCCESS! New item added in database.</div>";
				}
			?>
<?php include("footer.php"); ?>

