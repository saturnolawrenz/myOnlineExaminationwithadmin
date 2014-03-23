<?php 
class examdaoHandler{
	public function computeScore($answer)
	{
		try{
			$sql = examDAO::computeScore($answer);
			return $sql;
		}catch(Exception $e){
			error_log($e->getMessage());
		}
	}
	
	
	public  function getquestion($id)
	{
		try {
			$sql = examDAO::getquestion($id);
			return $sql;
		} catch (Exception $e) {
			error_log($e->message);
		}
	return false;
	}

	public function insertScore($ans,$id)
	{
		try {
			$sql = examDAO::insertScore($ans,$id);
		} catch (Exception $e) {
			error_log($e->message);
		}
	return false;
	}

}

 ?>


