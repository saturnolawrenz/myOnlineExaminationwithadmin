<?php 
include 'confige.php';
$_POST['$fname'];
$_POST['$lname'];
$_POST['$email'];
$_POST['$password'];
$sql= "INSERT INTO admintable(fname, lname,email,password) VALUES ($fname,$lname,$email,$password)";
echo $sql;




 ?>