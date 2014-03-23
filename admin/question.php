<?php 
include 'confige.php';
include 'DAOsephandler.php';
include 'DAOsep.php';

$query = new DAOsephandler();
$result = $query->Question();
 ?>
<html>
<script src = "jquery.1.10.2.js"></script>
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    	<link rel="stylesheet" type="text/css" href="css/saturno.css">

	<head>
	<title></title>
</head>
<body id = "backnavi">
	<div id = "nav1" class = "well" >
    		<center>
    			<font color = "white">
    		<h1> <a href="AddQuestion.php"><button>Add Question</button></a>
	<font face = "Trajan pro" color = "white">ONLINE EXAMINATION</font></h1>
    		
    		</font>
    		</center>
    	</div>

		<?php foreach ($result as $sql):?>
				<div id = "rnav2" class = "well"></br>
			<center><B>QUESTIONS</B><span><?=$sql['question']?></span></center>
				<div class = "offset5">
					<label style  = "margin-top:30px;">A. <?=$sql['choice_a']?></label>
					<label>B. <?=$sql['choice_b']?></label>
					<label>C. <?=$sql['choice_c']?></label>
					<label>D. <?=$sql['choice_d']?></label>
					<a href="editQuestion.php?id=<?=$sql['id']?>"><button>Update</button></a>
					<a href="deleteQuestion.php?id=<?=$sql['id']?>"><button onclick = "return confirm('do you really want to delete this?')">Delete</button></a>
				</div>
			</div>
		
		<?php endforeach;?>
	</font> 

	<div id = "rnav4" class = "well"><div id = "container"><font size = "1" color = "white" face = "arial">
	ABOUT<br>This site is for genius and smart human being, This examination will be your way to make you crazy, Think before try this examination GOODLUCK!!!!!!!!!!</br>
	MISSION<br>We dream of Filipinos who passionately love their country and whose values and competencies  enable them to realize their full potential.</br>
	VISSION<br>As a learner-centered public institution, the Online Examination continuously improves itself  to better serve its stakeholders.</br>

	</font></div></div>
</body>
	
</html>