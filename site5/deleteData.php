<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$dataName = "protectionwebdata";

	$bdd = new PDO("mysql:host=$host;dbname=$dataName", "$user", "$pass");
	$req = "DELETE FROM `site1`";
	$bdd->exec($req);

	header('location: index.php');

?>