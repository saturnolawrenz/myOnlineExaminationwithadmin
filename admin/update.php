<?php 
include 'confige.php';
include 'DAOsep.php';
include 'DAOsephandler.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];

$sql = new DAOsephandler();
$query = $sql->updateQuestion($fname,$lname,$email,$password,$id);
if($query === true){
	 echo "<script>alert('Already Exist!!');window.location.href='user.php'</script>";
}else{
	 echo "<script>alert('NOTHING GONNA HAPPENED!!');window.location.href='user.php'</script>";
}
 ?>