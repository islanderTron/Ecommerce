<?php
	$host = "localhost";
	$db = "...";
	$user = "...";
	$pwd = "...";

	try{
		$dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e){
    	echo 'Connection failed: ' . $e->getMessage();
    }
?>
