<?php
// include("./config/db.php");
include("./PHP/actions.php");

include 'includes/header.php'; ?>

<body>
  
  <?php include 'includes/navbar.php'; ?>

<?php if($_SESSION['email']): ?>

<form action="./PHP/actions.php" method="post" enctype="multipart/form-data">
<div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <h2 style="color: #315C93!important;">User Registration Form</h2><hr>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="lastname">Lastname:</label>
              <input type="password" class="form-control" id="lastname" placeholder="Your Lastname..." autocomplete="false" name="lastname">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="firstname">Firstname:</label>
              <input type="password" class="form-control" id="firstname" placeholder="Your Firstname..." autocomplete="false" name="firstname">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" class="form-control" id="password" placeholder="Your Password..." autocomplete="false" name="password">
        </div>

        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" placeholder="Your Username..." autocomplete="false" name="username">
        </div>
        
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Your Password..." autocomplete="false" name="password">
        </div>
        <div class="form-group">
          <label for="password">Confirm Password:</label>
          <input type="password" class="form-control" id="cpassword" placeholder="Retype Password..." autocomplete="false" name="cpassword">
        </div>
        <input class="btn btn-block" style="background-color: #315C93!important;" type="submit" value="Register" name="register"><hr>
        <p>Already Registered? <a href="">Login</a></p>
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
</form>
<?php else: ?>
<script LANGUAGE='JavaScript'>
  window.location.href = './';
</script>
<?php endif ?>
</body>
<?php include 'includes/footer.php'; ?>
