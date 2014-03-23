<?php 
class DAOsephandler{
public function validating($email,$password)
	{
		try{
			$sql = DAOsep::validating($email, $password);
			return $sql;
		} catch (Exception $e) {
			error_log($e->message);
		}
		return false;
	}
	public function insertData($fname,$lname,$email,$password)
	{
		try {
		$sql = DAOsep::insertData($fname,$lname,$email,$password);
			return $sql;
		} catch (Exception $e) {
			error_log($e->getMessage);
		}
		return false;

	}
}
 ?>