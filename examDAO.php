<?php 	

include 'config.php';
class examDAO{
	public static function getAnswers()
	{
		try{
			global $db;
			$ansque = "SELECT answer from questions order by id";
			$result = $db->query($ansque);
			$array = array();
			while ($row = $result->fetch_assoc()) {
				$array[] = $row['answer'];
			}
			return $array;
		}catch(Exception $e){
			error_log($e->getMessage());
		}
		return false;
	}
	public static function computeScore($answer)
	{
		try{
			$correct = self::getAnswers();
			if($correct === false){
				error_log("answer are not ready");
				return false;
			}if(count($correct) != strlen($answer)){
				error_log("wew");
				return false;
			}
			$val = 0;
			for ($a = 0; $a < 10 ; $a++) { 
				if($correct[$a] == $answer[$a]){
					$val++;
				}
			}
			return $val;
		}catch(Exception $e){
			error_log($e->getMessage());
		}
	}
	
	
	public static function getquestion($id)
	{
		try {
			global $db;
			$quesTion = "select * from questions WHERE id = '$id'";
			$result4th = $db->query($quesTion);
			if($result4th){
				if($result4th->num_rows>0){
					return $result4th->fetch_assoc();
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
	public static function insertScore($ans,$id)
	{
		try {
			global $db;
			$ans = "UPDATE mydata SET score = '$ans' where id = '$id'";
			$anss = $db->query($ans);
		} catch ( Exception $e) {
			error_log($e->getMessage());
		}
	}
}

 ?>