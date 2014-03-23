<?php
include 'confige.php';
include 'DAOsephandler.php';
include 'DAOsep.php';
$id = $_GET['id'];
$row = new DAOsephandler();
$query = $row->deleteQuestion($id);
echo "<script>alert('Succesfully Deleted!!');window.location.href='question.php'</script>";
?>
