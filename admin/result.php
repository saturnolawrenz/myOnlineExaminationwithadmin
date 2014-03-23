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
	<center><TABLE BORDER=1 CELLSPACING=3 CELLPADDING=10> 
			<div id = "nav4" class = "well">
    		<center>
    			<font color = "white">
    		<h1><font face = "Trajan pro">RESULT</font></h1>
    		
    		<center>
    			<font color = "white">
    		<h1>
    		
    		</font>
    		</center>						
				<center><tr>
					<td>fname</td>
					<td>lname</td>
					<td>email</td>
					<td>score</td>
					</center>
				</tr>
			<?php foreach ($query as $sql):?>
				<tr>
					<td><?=$sql['fname']?></td>
					<td><?=$sql['lname']?></td>
					<td><?=$sql['email']?></td>
					<td><?=$sql['score']?></td>

						
					</td>

				</center></tr>	

			<?php endforeach; ?>

			</table>
		</div>
	</body>
</html>
		