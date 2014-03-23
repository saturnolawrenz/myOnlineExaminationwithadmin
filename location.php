
<?php 
include 'config.php';
include 'examDAO.php';
include 'examdaoHandler.php';
session_start();
$answer = $_SESSION['answer'];
$id = $_SESSION['id'];
print_r($id);
$result = new examdaoHandler();
$sql = $result->computeScore($answer);
$ans = $sql * 10;
$query =  $result->insertScore($ans, $id);
 ?>
 <html>
<head>
	<title></title>
</head>
<body id = "backback">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/saturno.css">
		<center><div id ="ansss" class = "well">Your Score is<h1><?=$ans?></h1></center>
		</div>
		<div id = "rnav6">
		<form action = 'registration.php' method = "POST">
		
<button class="submit" type="submit" style="margin-left:-5px;">Submit</button>
</div>
		</form>
	</body>
</html>