<?php 
require 'confige.php';
include 'DAOsep.php';
include 'DAOsephandler.php';
$email = $_POST['email'];
$password = sha1($_POST['password']);
$valids = new DAOsephandler();
$sql = $valids->validating($email,$password);
session_start();
$_SESSION['id'] = $sql['id'];
 if($sql){
	 	header("location:frontpage.php");
	 }else{
	 	echo "<script>alert('Already Exist!!');window.location.href='adminfront.php'</script>";
	 }
 
	

 ?>