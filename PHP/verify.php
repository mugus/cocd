<?php 
include("../config/db.php");
session_start();
if(isset($_GET['id']) && isset($_GET['code']) && isset($_GET['email']) && isset($_GET['time'])){
	$id=$_GET['id'];
  $code=$_GET['code'];
  $email=$_GET['email'];
	$role=$_GET['role'];
  
	$sql = "INSERT INTO users (email, role) VALUES (:email, :role)";
  $ver = $db->prepare($sql);
  // $ver->bindParam(':email', $email);
  // $ver->bindParam(':role', $role);
  $ver->execute([ 'email'=>$email,'role'=>$role]);
  
  $_SESSION['email']=$email;

		if($ver->rowCount()==1){
			$delete="DELETE FROM users_verify WHERE id=$id AND code=$code";
			$del = $db->query($delete);
			$del->execute();
			header("location: /cocd/register");
			echo "<script>alert('Account activated');</script>";
		}else{
		echo "<script>alert('System Error');</script>";
		}	
	}


?>