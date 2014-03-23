<?php
include 'confige.php';
include 'DAOsephandler.php';
include 'DAOsep.php';
$id = $_GET['id'];
$row = new DAOsephandler();
$query = $row->delete($id);
echo "<script>alert('Succesfully Deleted!!');window.location.href='user.php'</script>";
?>
