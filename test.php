<?php include("header.php"); ?>


<?php 
$db = new DB;


if(isset($_SESSION['user_session'])) {

?>


<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">User Profile</h5>
        <p class="card-text">First Name: <?php echo $_SESSION['user_session_fname']; ?></p>
        <p class="card-text">Last Name: <?php echo $_SESSION['user_session_lname']; ?></p>
        <p class="card-text">Age: <?php echo $_SESSION['user_session_age']; ?></p>
        <p class="card-text">Job: <?php echo $_SESSION['user_session_job']; ?></p>
        <p class="card-text">Phone: <?php echo $_SESSION['user_session_phone']; ?></p>
        <p class="card-text">Adress: <?php echo $_SESSION['user_session_adress']; ?></p>
        <a href="#" class="btn btn-primary">Edit Profile</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Utilities</h5>
        <p class="card-text">Change email adress</p>
        <p class="card-text">Change password</p>
        <a href="#" class="btn btn-primary">Account Settings</a>
      </div>
    </div>
  </div>
</div>











<?php 
} else {
	$db->redirect("login.php");
}


include("footer.php"); ?>