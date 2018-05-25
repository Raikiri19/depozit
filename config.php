<?php

// 	public function showData($table) {
// 		$sql = "SELECT * FROM $table";
// 		$stmt = $this->dbh->query($sql);
			
// 		while ($a = $stmt->fetch(PDO::FETCH_ASSOC)) {
// 			//$glet = $a["glet"];
// 			//$ciment = $a["ciment"];
// 			//$ipsos = $a["ipsos"];
// 			//$cuie = $a["cuie"];
// 			$data[]=$a;

		
// 		}
// 		return $data;
// 	}


// 	public function selectId($id, $table) {
// 		$sql = "SELECT * FROM $table WHERE id = $id";
// 		$stmt = $this->dbh->prepare($sql);
// 		$stmt->execute();
// 		$data = $stmt->fetch(PDO::FETCH_ASSOC);
// 		return $data;
// 	}

// 	public function update($id, $glet, $ciment, $ipsos, $cuie) {

// 	}

// 	public function del($id) {
// 		$sql = "DELETE FROM materiale2 WHERE id = '$id'";
// 		$stmt = $this->dbh->prepare($sql);
// 		$stmt->execute();
// 	}

// 	public function addMaterial($nume, $cantitate, $pret) {
		
// 	} 
// }

session_start();

class DB {
	private $host = "mysql:host=localhost;dbname=depozit";
	private $user = "root";
	private $password = "";
	private $dbh;

	public function __construct() {
		try {
			$this->dbh = new PDO($this->host, $this->user, $this->password);
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			die("Error: " .$e->getMessage() . "<br />");
		}
	}

	public function insertData($nume, $cantitate, $pret) {
		$sql = "INSERT INTO materiale (name, qty, price) VALUES ('$nume', '$cantitate', '$pret')";
		$stmt = $this->dbh->prepare($sql);
		$stmt->execute();
	}

	public function showData($table) {
		$sql = "SELECT * FROM $table";
		$stmt = $this->dbh->query($sql);
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$data[]=$row;
		}
		return $data;
	}

	public function editPrice($name, $qty, $price, $id) {
		$sql = "UPDATE materiale SET name = '$name', qty = '$cantitate', price = '$pret' WHERE id = '$id'";
		$stmt = $this->dbh->query($sql);
		return true;
	}

	public function getDataById($id, $table) {
		$sql = "SELECT * FROM $table WHERE id = '$id'";
		$stmt = $this->dbh->query($sql);
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$data[]=$row;
		}
		return $data;
	}

	public function delItem($id, $table) {
		$sql = "DELETE FROM $table WHERE id = '$id'";
		$stmt = $this->dbh->prepare($sql);
		$stmt->execute();
	}

	public function exeQuery($sql) {
		$this->dbh->query($sql);
		return true;
	}

	public function anotherQ($sql) {
		$this->dbh->prepare($sql);
		return true;
	}


	public function addUser($email, $pass) {
		$sql = "INSERT INTO users(email, pass) VALUES('$email', '$pass')";
		$stmt = $this->dbh->prepare($sql);
		$stmt->execute();
	}

	public function logIn($email, $pass) {
		$sql = "SELECT * FROM users WHERE email = '$email' OR pass = '$pass' LIMIT 1";
		$stmt = $this->dbh->prepare($sql);
		$stmt->execute();
		$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
		if($stmt->rowCount() > 0) {
			// print_r($stmt->rowCount() . "<br />" . $userRow['pass'] . "<br />");
			if(password_verify($pass, $userRow['pass'])) {
				$_SESSION['user_session'] = $userRow['id'];
				$_SESSION['user_session_email'] = $userRow['email'];
				$_SESSION['user_session_rang'] = $userRow['rang'];
				$_SESSION['user_session_age'] = $userRow['age'];
				$_SESSION['user_session_name'] = $userRow['name'];
				$_SESSION['user_session_pass'] = $userRow['pass'];
				$_SESSION['user_session_fname'] = $userRow['fname'];
				$_SESSION['user_session_lname'] = $userRow['lname'];
				$_SESSION['user_session_job'] = $userRow['job'];
				$_SESSION['user_session_adress'] = $userRow['adress'];
				$_SESSION['user_session_phone'] = $userRow['phone'];
				// print_r($_SESSION['user_session']);
				return true;
				$stmt->close();
			} else {
				return false;
			}
		}
	}

	public function is_logged_in() {
		if(isset($_SESSION['user_session'])) {
         return true;
      }
	}

	public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }

   public function redirect($url) {
   		header("Location: $url");
   }

   public function displayUsers($table) {
   		$sql = "SELECT * FROM $table";
   		$stmt = $this->dbh->query($sql);
   		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   			$data[] = $row;
   		}
   		return $data;
   		
   }

   public function getUserById($id) {
   		$sql = "SELECT * FROM users WHERE id = '$id'";
   		$stmt = $this->dbh->query($sql);
   		while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
   			$data[] = $row;
   		}
   		return $data;
   }

}


