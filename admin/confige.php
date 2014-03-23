<?php 

	$confige = array(
		'host' =>'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'databases' 
		);
	$db = new mysqli(
		$confige['host'],
		$confige['username'], 
		$confige['password'],
		$confige['database']
	);

	if (mysqli_connect_errno()) {
		echo 'please check your connection';
		exit;
	}

 ?>