<?php 
class DAOsep{
public static function validating($email,$password)
	{
		try{
			global $db;
			$validates = "select * from admin where email = '$email' and password = '$password'";
			$result3rd = $db->query($validates);
			if ($result3rd) {
				if($result3rd->num_rows>0){
					return $result3rd->fetch_assoc();
				}else{
					return false;
				}
			}else{
				return false;
			}
		} catch (Exception $e) {
			error_log($e->message);
		}
		return false;
	}

public static function users()
	{
		try {
			global $db;
			$sql = "select * from mydata";
			
			$result = $db->query($sql);
			return $result;
		} catch (Exception $e) {
			error_log($e->getMessage);
			echo $e->getMessage();
		}
		return false;

	}
	public static function update($id)
	{
		try {
		global $db;
			$sql  = "select * from mydata WHERE id = '$id'";
			$result = $db->query($sql);
			return $result->fetch_assoc();
	} catch (Exception $e) {
		error_log($e->getMessage);
		}
		}
	public static function updateQuestion($fname,$lname,$email,$password,$id)
{
	try {
	global $db;
			$ans = "UPDATE mydata SET fname = '$fname', lname = '$lname', email = '$email' , password = '$password' where id = '$id'";
		$result = $db->query($ans);
		return $result;
} catch (Exception $e) {
	error_log($e->getMessage);
}
}
public static function delete($id)

{
try{

	global $db;
			$ans = "DELETE FROM mydata WHERE id = '$id'";
		$result = $db->query($ans);
		return $result;
} catch (Exception $e) {
	error_log($e->getMessage);
}
}
	public static function Question()
	{
		try {
			global $db;
			$sql = "select * from questions";
			$result = $db->query($sql);
			if ($result->num_rows>0) {
			$array = array();
				while($row = $result->fetch_assoc()){
					$array[] = $row;
				}
			}
			return $array;
		} catch (Exception $e) {
			error_log($e->getMessage);
			echo $e->getMessage();
		}
		return false;

	}
	public static function updateUser($id)
	{
		try {
			global $db;
			$update = "Select * from questions where id = '$id'";
			$result = $db->query($update);
			return $result->fetch_assoc();
		} catch (Exception $e) {
			error_log($e->getMessage);
		}
	}
public static function updateQuestions($id,$question,$a,$b,$c,$d,$answer)
{
	try {
	global $db;
			$ans = "UPDATE questions SET question = '$question', choice_a = '$a', choice_b = '$b' , choice_c = '$c' , choice_d  = '$d' , answer = '$answer' where id = '$id'";
		$result = $db->query($ans);
		return $result;
} catch (Exception $e) {
	error_log($e->getMessage);
}
}
public static function deleteQuestion($id)

{
try{

	global $db;
			$ans = "DELETE FROM questions WHERE id = '$id'";
		$result = $db->query($ans);
		return $result;
} catch (Exception $e) {
	error_log($e->getMessage);
}
}
public static function Addquestion($question,$a,$b,$c,$d,$answer)
{
	try {
	global $db;
			$ans = "insert into questions(question,choice_a,choice_b,choice_c,choice_d,answer) Values ('$question','$a','$b','$c','$d','$answer')";
		$result = $db->query($ans);
		return $result;
} catch (Exception $e) {
	error_log($e->getMessage);
}
}
}


?>