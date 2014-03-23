<?php 
class DAOsep{
public static function validating($email,$password)
	{
		try{
			global $db;
			$validates = "select * from mydata where email = '$email' and password = '$password'";
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
	public static function insertData($fname,$lname,$email,$password)
	{
		try {
			global $db;
			$sql2nd = "select * from mydata where email = '$email'";
			$result2nd = $db->query($sql2nd);
			if($result2nd->num_rows>0){
				echo 'the email '. $email. 'already exist';
			}else{
			$sql = "insert into mydata(fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
			$result = $db->query($sql);
			return $result;
			}
		} catch (Exception $e) {
			error_log($e->getMessage);
			echo $e->getMessage();
		}
		return false;

	}
}
 ?>