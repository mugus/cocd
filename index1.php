
<?php

include("./config/db.php");
// include("./PHP/actions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>
<form action="./PHP/actions.php" method="post">
<input type="submit" value="submit" name="search">
</form>
  <a href="./login">Login</a>
  <a href="./register">Register</a>
</body>
</html>