
<?php
include("./config/db.php");
include("./PHP/actions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
<p>This is Login page</p>

<form action="./PHP/actions.php" method="post">
<input type="submit" value="submit" name="login">
</form>
  <a href="./">Index</a>
</body>
</html>