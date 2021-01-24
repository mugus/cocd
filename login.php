
<?php
// include("./config/db.php");
include("./PHP/actions.php");
?>

<?php include 'includes/header.php'; ?>

<body>
  
  <?php include 'includes/navbar.php'; ?>
<br>
<form action="./PHP/actions.php" method="post">
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
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
 
</body>
<?php include 'includes/footer.php'; ?>