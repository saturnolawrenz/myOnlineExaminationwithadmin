<?php  
require_once 'confige.php';
include 'DAOsep.php';
include 'DAOsephandler.php';

$row = new DAOsephandler();
$query = $row->users();
?>
	<head>
	<title></title>
</head><body id = "back2"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    	<link rel="stylesheet" type="text/css" href="css/saturno2.css">
	<TABLE BORDER=1 CELLSPACING=3 CELLPADDING=10> 
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
					<td>fname</td>
					<td>lname</td>
					<td>email</td>
					<td>score</td>
					<td>action</td>
				</tr>
			<?php foreach ($query as $sql):?>
				<tr>
					<td><?=$sql['fname']?></td>
					<td><?=$sql['lname']?></td>
					<td><?=$sql['email']?></td>
					<td><?=$sql['score']?></td>
					<td>
						<a href="edit.php?id=<?=$sql['id']?>"><button>Update</button></a>
						<a href="delete.php?id=<?=$sql['id']?>"><button onclick = "return confirm('do you really want to delete this?')">Delete</button></a>
					</td>

				</tr>	

			<?php endforeach; ?>

			</table>
		</div>
	</body>
</html>
		