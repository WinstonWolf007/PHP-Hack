<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Request</title>
</head>
<body>

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

</body>
</html>