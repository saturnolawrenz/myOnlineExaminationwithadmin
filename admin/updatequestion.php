<?php 
include 'confige.php';
include 'DAOsep.php';
include 'DAOsephandler.php';
$id = $_POST['id'];

$sql = new DAOsephandler();
$query = $sql->updateUser($id);
if($query === true){
	 echo "<script>alert('Already Exist!!');window.location.href='user.php'</script>";
}else{
	 echo "<script>alert('NOTHING GONNA HAPPENED!!');window.location.href='user.php'</script>";
}
 ?>