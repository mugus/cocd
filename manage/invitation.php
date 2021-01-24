<?php
include("./config/db.php");

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

include 'includes/header.php'; ?>

<body>
  
  <?php include 'includes/navbar.php'; ?>

    <form action="./PHP/actions.php" method="post">
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <h2 style="color: #315C93!important;">Admin Invitation Box</h2>
            <p>Invite Mentor and Case Manager in this form</p>
            <hr><br>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Add Email..." autocomplete="false" name="email">
            </div>
            <div class="form-group">
              <label for="role">Roles:</label>
              <select name="role" class="form-control" id="password">
                <option value="">Select role</option>
                <option value="1">Case Manager</option>
                <option value="0">Mentor</option>
              </select>
            </div><hr><br>
            <input class="btn btn-block" style="background-color: #315C93!important;" type="submit" value="Send" name="invitation">
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </form>

<?php include 'includes/footer.php'; ?>