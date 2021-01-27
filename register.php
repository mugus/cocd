<?php
include 'includes/header.php';
include("./config/db.php");
//User Registration

if(isset($_POST['register'])){

  $username = $_POST['username'];
  $phone = $_POST['phone'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $pass = $_POST['password'];
  $password = password_hash($pass, PASSWORD_DEFAULT);
  $email = $_SESSION['email'];
	$sql = "UPDATE users SET firstname=:firstname,lastname=:lastname, phone=:phone,username=:username,password=:password WHERE email=:email";
    $stmt = $db->prepare($sql);
    $stmt->execute(array(
      ':username'=> $username,
      ':phone'=> $phone,
      ':firstname'=> $firstname,
      ':lastname'=> $lastname,
      ':password'=> $password,
      ':email'=> $email
    ));
    if($stmt->rowCount()){
      session_destroy();
      header("Location: ./login");
    }else{
      echo "<script>window.alert('Sorry! Try again');</script>";
    }
  
}
$email = $_SESSION['email'];

$sqlQuery = "SELECT * FROM users WHERE email = :email";
$statement = $db->prepare($sqlQuery);
$statement->execute(
  array(
      ':email' => $email,
  )
);			
$row=$statement->fetch(PDO::FETCH_ASSOC);
if($row['role']==0){
  $userRole = "Mentor";
}elseif($row['role']==1){
  $userRole = "Case Manager";
}
 ?>

<body>
  
  <?php include 'includes/navbar.php'; ?>

<?php if($_SESSION['email']): ?>


  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
      <hr class="phone_sep">
        <h2 style="color: #315C93!important;">User Registration Form</h2>
        <div class="alert alert-warning alert-dismissable alert-sm">
          <p>
            <small>Invited as <?= $userRole; ?></small>
            <a href='publicvoid0' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          </p>
        </div><hr>
        <form action="" method="post" >
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="lastname">Lastname:</label>
              <input type="text" class="form-control" id="lastname" placeholder="Your Lastname..." autocomplete="false" name="lastname">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="firstname">Firstname:</label>
              <input type="text" class="form-control" id="firstname" placeholder="Your Firstname..." autocomplete="false" name="firstname">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" class="form-control" id="phone" placeholder="Your Password..." autocomplete="false" name="phone">
        </div>

        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" placeholder="Your Username..." autocomplete="false" name="username">
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" placeholder="Your Password..." autocomplete="false" name="password">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="cpassword">Confirm Password:</label>
              <input type="cpassword" class="form-control" id="cpassword" placeholder="Retype Password..." autocomplete="false" name="cpassword">
            </div>
          </div>
        </div>
        <input class="btn btn-block" style="background-color: #315C93!important;" type="submit" value="Register" name="register"><hr>
        <p>Already Registered? <a href="">Login</a></p>
</form>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
  <!-- <input type="file" name="image"> -->
  <!-- <input type="email" name="email" id="">
  <select name="role" id="">
    <option value="">select role</option>
    <option value="1">Case Manager</option>
    <option value="0">Mentor</option>
  </select> -->

 <!-- <input type="text" name="firstname" id="">
 <input type="text" name="lastname" id="">
 <input type="text" name="phone" id="">
 <input type="text" name="username" id="">
 <input type="password" name="password" id=""> -->


<!-- <input type="submit" value="submit" name="register"> -->
<?php else: ?>
<script LANGUAGE='JavaScript'>
  window.location.href = './';
</script>
<?php endif ?>
<?php include 'includes/footer.php'; ?>
</body>

</html>
