<?php
include 'confige.php';
include 'DAOsephandler.php';
include 'DAOsep.php';
$id=$_GET['id'];
$row = new DAOsephandler();
$query = $row->update($id);
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
					<form action = "update.php" method = "POST">
					<input type = "hidden" name = 'id' value = '<?=$query['id']?>'>
					<td>firstname<input type = "text" name = 'fname' value = '<?=$query['fname']?>'></td>
					<td>lastname<input type = "text" name = 'lname' value = '<?=$query['lname']?>'></td>
					<td>email<input type = "email" name = 'email' value = '<?=$query['email']?>'></td>
					<td>password<input type = "password" name = 'password' value = '<?=$query['password']?>'></td>
					<td><button>save</button></td>
				</form>
				<td>
				<a href="user.php">
					<button>discard</button></td></a>
				</tr>
		</center>
</input>
</body>
</html>