<?php 
require 'config.php';
include 'DAOsep.php';
include 'DAOsephandler.php';
$email = $_POST['email'];
$password = sha1($_POST['password']);
$valids = new DAOsephandler();
$sql = $valids->validating($email,$password);
session_start();
$_SESSION['id'] = $sql['id'];

if($sql){
	header("location:radioquestion.php");
}else{
	echo "error";
}
	

 ?>