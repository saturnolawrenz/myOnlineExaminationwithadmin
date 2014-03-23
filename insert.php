<?php 
include  'config.php';
include 'DAOsep.php';
include 'DAOsephandler.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = sha1($_POST['password']);
	$insert = new DAOsephandler();
	$result = $insert->insertData($fname,$lname,$email,$password);
	 if($result === true){
	 	header("location:registration.php");
	 }else{
	 	echo "<script>alert('Already Exist!!');window.location.href='registration.php'</script>";
	 }
 ?>

