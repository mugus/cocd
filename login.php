
<?php
include("./config/db.php");
?>
<?php include 'includes/header.php';

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
      //Query to check username in admin table
  $sqlQuery = "SELECT * FROM admins WHERE username = :username";
  $statement = $db->prepare($sqlQuery);
  $statement->execute(
    array(
      ':username' => $username
      )
    );
      $res=$statement->fetch(PDO::FETCH_ASSOC);
      //Query to check username in users table
  $sql = "SELECT * FROM users WHERE username = :username";
  $stmt = $db->prepare($sql);
  $stmt->execute(
    array(
      ':username' => $username
      )
    );
    $row=$stmt->fetch(PDO::FETCH_ASSOC);

      //Query to check username in admin table
    if($statement->rowCount() > 0){
      if($password == $res['password']){
        $_SESSION['admin']=$username;
        header("location: /cocd/invitation");
      }else{
        echo "<script>alert('Password not match')</script>";
      }
    }
      //Query to check username in users table
      else if($stmt->rowCount() > 0){
          if(password_verify($password, $row['password'])){
						$user_id = $row['user_id'];
            $_SESSION['login'] = true;
            $_SESSION['user_id']=$user_id;
						// $_SESSION['role']=$role;
            echo "<script>alert('username found in users table')</script>";
				 }else{
        echo "<script>alert('Password not match')</script>";
         }
        }else{
          echo "<script>alert('Username not found')</script>";
        }
      }
      
  // echo "Login is working";

?>


<body> 
  <?php include 'includes/navbar.php'; ?>
<br>
<form action="" method="post">
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
      <hr class="phone_sep">
        <h2 style="color: #315C93!important;">Login Form</h2><hr>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" placeholder="Your Username..." autocomplete="false" name="username">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Your Password..." autocomplete="false" name="password">
        </div>
        <p>Forget Password? <a href="">Request New Password</a></p>
        <input class="btn btn-block" style="background-color: #315C93!important;" type="submit" value="submit" name="login"><hr>
        <p>No Account? <a href="/cocd/register">Request account</a></p>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</form>
 
<?php include 'includes/footer.php'; ?>
</body>

</html>