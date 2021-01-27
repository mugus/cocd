<?php
include("./config/db.php");
session_start();






// Login

  if(isset($_POST['login'])){
    echo "Login is working";
  }

  // Search
  if(isset($_POST['search'])){
    echo "Search is working";
  }













  ?>
  <!-- // Update with image

      // Get image name
      $image = $_FILES['image']['name'];

      // image file directory
      $target = "../images/".basename($image);
  
      $allowed = array('png', 'jpg', 'jpeg');
      $ext = pathinfo($image, PATHINFO_EXTENSION);
      if (!in_array($ext, $allowed)) {
        echo "<script>alert('Valid image formats are .png, .jpeg or .jpg! Try again')</script>";
      }else{
        // Check if image exist in db
        if(file_exists("../images/".$image)){
          echo "<script>alert('File exist')</script>";
        }else{
          echo "<script>alert('File not exist')</script>";
        }
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          // $sql = "INSERT INTO users (image) VALUES ('$image')";
          $sql = "UPDATE users SET image='$image' WHERE user_id=1";
          // execute query
          $stmt = $db->prepare($sql);
          $stmt->execute();
          echo "<script>alert('Image uploaded successfully')</script>";
        }else{
          echo "<script>alert('Failed to upload image')</script>";
        }
      } -->