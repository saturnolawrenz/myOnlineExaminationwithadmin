<?php 
include 'confige.php';
include 'DAOsep.php';
include 'DAOsephandler.php';
$id = $_POST['id'];
$question = $_POST['question'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$answer = $_POST['answer'];
$sql = new DAOsephandler();
$query = $sql->updateQuestions($id,$question,$a,$b,$c,$d,$answer);
if($query === true){
	 echo "<script>alert('Succesfully Updated!!');window.location.href='question.php'</script>";
}else{
	 echo "<script>alert('NOTHING GONNA HAPPENED!!');window.location.href='question.php'</script>";
}
 ?>