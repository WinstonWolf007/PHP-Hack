<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dataName = "protectionwebdata";

	$bdd = new PDO("mysql:host=$host;dbname=$dataName", "$user", "$pass");
	$req = "INSERT INTO `site1` (`message`) VALUES ('" . $_POST['message'] . "')";
	$bdd->exec($req);
	
	header("location: index.php");

?>