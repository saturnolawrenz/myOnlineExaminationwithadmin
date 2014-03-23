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
					<form action = "AddQuestionValid.php" method = "POST">
					<tr><td>Question<input type = "text" name = 'question' placeholder = "question"></td></tr>
					<tr><td>A<input type = "text" name = 'a' placeholder = "ChOicesA"></td></tr>
					<tr><td>B<input type = "text" name = 'b' placeholder = "ChOicesB"></td></tr>
					<tr><td>C<input type = "text" name = 'c' placeholder = "ChOicesC"></td></tr>
					<tr><td>D<input type = "text" name = 'd' placeholder = "ChOicesD"></td></tr>
					<tr><td>
						<select name = "answer">
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