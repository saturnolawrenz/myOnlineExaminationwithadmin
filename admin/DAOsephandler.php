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
	public function users()
	{
		try{
			$sql = DAOsep::users();
			return $sql;
		} catch (Exception $e) {
			error_log($e->message);
		}
		return false;
		}
	public function update($id)
	{
	try {
		$sql = DAOsep::update($id);
		return $sql;
	} catch (Exception $e) {
		error_log($e->message);
		}
		return false;
		}
	
	public function updateQuestion($fname,$lname,$email,$password,$id)
	{
		try {
		$sql = DAOsep::updateQuestion($fname,$lname,$email,$password,$id);
		return $sql;
	} catch (Exception $e) {
		error_log($e->message);
		}
		return false;
		}
	public function delete($id)
	{
		try {	
			$sql = DAOsep::delete($id);
		}
		
	catch (Exception $e) {
		error_log($e->message);
		}
		return false;
		}
	
	public function Question()
	{
		try {
		$sql = DAOsep::Question();
		return $sql;
	} catch (Exception $e) {
		error_log($e->message);
		}
		return false;
		}
	public function updateUser($id)
	{
		try {
		$sql = DAOsep::updateUser($id);
		return $sql;
	} catch (Exception $e) {
		error_log($e->message);
		}
		return false;
		}
	public function updateQuestions($id,$question,$a,$b,$c,$d,$answer)
		{
		try {
		$sql = DAOsep::updateQuestions($id,$question,$a,$b,$c,$d,$answer);
		return $sql;
	} catch (Exception $e) {
		error_log($e->message);
		}
		return false;
		}
		public function deleteQuestion($id)
	{
		try {	
			$sql = DAOsep::deleteQuestion($id);
		}
		
	catch (Exception $e) {
		error_log($e->message);
		}
		return false;
		}
		public function Addquestion($question,$a,$b,$c,$d,$answer)
		{
		try {
		$sql = DAOsep::Addquestion($question,$a,$b,$c,$d,$answer);
		return $sql;
	} catch (Exception $e) {
		error_log($e->message);
		}
		return false;
		}
	}
 ?>