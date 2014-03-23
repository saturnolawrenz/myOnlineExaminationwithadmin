<?php
include 'confige.php';
include 'DAOsephandler.php';
include 'DAOsep.php';
$id=$_GET['id'];
$row = new DAOsephandler();
$query = $row->updateUser($id);
?>

<html>
<head>
	<title></title>
</head>
<body><body id = "back2"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    	<link rel="stylesheet" type="text/css" href="css/saturno2.css">

	<center><TABLE BORDER=1 CELLSPACING=3 CELLPADDING=10> 
			<div id = "nav4" class = "well">
    		<center>
    			<font color = "white">
    		<h1><font face = "Trajan pro">USER</font></h1>
    		
    		<center>
    			<font color = "white">
    		<h1>
    		
    		</font>
    		</center>						
				<tr>
					<form action = "updateQuestions.php" method = "POST">
					<input type = "hidden" name = 'id' value = '<?=$query['id']?>'>
					<tr><td>Question<input type = "text" name = 'question' value = '<?=$query['question']?>'></td></tr>
					<tr><td>A<input type = "text" name = 'a' value = '<?=$query['choice_a']?>'></td></tr>
					<tr><td>B<input type = "text" name = 'b' value = '<?=$query['choice_b']?>'></td></tr>
					<tr><td>C<input type = "text" name = 'c' value = '<?=$query['choice_c']?>'></td></tr>
					<tr><td>D<input type = "text" name = 'd' value = '<?=$query['choice_d']?>'></td></tr>
					<tr><td>
						<select name = "answer">
							<option value = '<?=$query['answer']?>'><?=$query['answer']?></option>
							<option value = 'a'>a</option>
							<option value = 'b'>b</option>
							<option value = 'c'>c</option>
							<option value = 'd'>d</option>

						</select>
					</td>
					</tr>
					<tr><td><button>save</button></td></tr>
				</form>
				<td>
				<a href="question.php">
					<button>discard</button></td></a>
				</tr>
		</center>
</input>
</body>
</html>