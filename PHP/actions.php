<?php
include("./config/db.php");
session_start();
// admin Invitation

if(isset($_POST['invitation'])){
  $email = $_POST['email'];
  $role = $_POST['role'];
  $code = rand(1000, 200000000);

  try{
    $sql = "INSERT INTO users_verify (email, role, code) 
						VALUES (:email, :role, :code)";
		$stmt = $db->prepare($sql);;
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':role', $role);
		$stmt->bindParam(':code', $code);
    $stmt->execute();
    // Check if invitation is for mentor or case manager
    if($role == 1){
      $userRole = "Case Manager";
    }elseif($role == 0){
      $userRole = "Mentor";
    }
    if($stmt->rowCount()==1){     
			$id = $db->lastInsertId();
      $to=$email;
      $time = time();
			$subject="Confirm your email";
			$from = 'COCD Admin';
      $message = "<h3>You have approved by COCD refugee portal administrator to be one of their $userRole team</h3>";
      $message .= '<p>
                    Hopefully, this email finds you well<br>
                    Confirm this email to get valid account as COCD '.$userRole.'!<br>
                    You will be reddirected to our registration form <br>
									</p>';
			$message .= '<a class="btn btn-primary btn-sm" href="'.$_SERVER['HTTP_HOST'].'/cocd/PHP/verify.php?id='.$id.'&code='.$code.'&email='.$email.'&time='.$time.'&time='.$role.'">click here to accept</a> ';
      $message .= '<p>
                      <br><br><br><br>
                      <small> If you are already Case Manager or Mentor ignore this email(delete from your inbox) </small>
                      <br><small>COCD Administrations</small>
                    <p>';
      $headers = "From:".$from;
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
      mail($to,$subject,$message,$headers);
      

      // $alert_class = "class='alert alert-success alert-dismissable alert-sm'";
			// $result = "<small>Invitation Sent</small>";
			header("location: /cocd/index");
		}else{
			$alert_class = "class='alert alert-danger alert-dismissable alert-sm'";
      $result = "<small>Email Already invited</small>";
    }
  }catch(PDOException $ex){
    $result = "<p>Error occured: ".$ex->getMessage()."</p>";
  }
}



//User Registration

  if(isset($_POST['register'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_SESSION['email'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $password = password_hash($pass, PASSWORD_DEFAULT);

    try{

      $sql = "UPDATE users SET 
                              firstname=`$firstname`, 
                              lastname=`$lastname`,
                              phone=`$phone`,
                              username=`$username`,
                              password=`$password`
                          WHERE 
                            email=`$email`";
      $stmt = $db->prepare($sql);
      // $stmt->bindParam(':firstname', $firstname);
      // $stmt->bindParam(':lastname', $lastname);
      // $stmt->bindParam(':username', $username);
      // $stmt->bindParam(':phone', $phone);
      // $stmt->bindParam(':password', $password);
      $stmt->execute();
      if($stmt->rowCount()==1){
      // header("location: /login");
    echo "<script>alert('working')</script>";
      }else{
        echo "<script>alert('Not working')</script>";
      }
    }catch(PDOException $ex){
      $result = "<p>Error occured: ".$ex->getMessage()."</p>";
  }
    
  }

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