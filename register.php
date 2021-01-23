<?php
include("./config/db.php");
session_start();

if($_SESSION['email']){
  echo $_SESSION['email'];
}else{
  echo "<script>alert('Check your invitation and try again')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/bootstrap.min.css">
  <title>Register</title>
</head>
<body>
<p>This is register page</p>
<?php if(isset($result)){ echo "<div ".$alert_class.">$result<a href='publicvoid0' class='close' data-dismiss='alert' aria-label='close'>&times;</a></div>"; } ?>

<form action="./PHP/actions.php" method="post" enctype="multipart/form-data">
  <!-- <input type="file" name="image"> -->
  <input type="email" name="email" id="">
  <select name="role" id="">
    <option value="">select role</option>
    <option value="1">Case Manager</option>
    <option value="0">Mentor</option>
  </select>

 <!-- <input type="text" name="firstname" id="">
 <input type="text" name="lastname" id="">
 <input type="text" name="phone" id="">
 <input type="text" name="username" id="">
 <input type="password" name="password" id=""> -->


<input type="submit" value="submit" name="invitation">
</form>
  <a href="./">Index</a>



<script src="./assets/bootstrap.min.js"></script>
<script src="./assets/jquery.min.js"></script>
</body>
</html>
