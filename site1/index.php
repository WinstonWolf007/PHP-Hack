<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<script type="text/javascript">
		document.cookie = "But=succeeded;";
	</script>
</head>
<body>

	<p>La faille consite a inserer du code javascript dans le input pour ramasser tous les cookies</p>
	<h1>Tchat</h1>
	
	<form method="POST" action="request.php">
		<input type="text" name="message">
		<input type="submit" value="Envoyer">
	</form>

	<?php

		$host = "localhost";
		$user = "root";
		$pass = "";
		$dataName = "protectionwebdata";

		$bdd = new PDO("mysql:host=$host;dbname=$dataName", "$user", "$pass");
		$req = "SELECT message FROM site1";
		$result = $bdd->query($req);

		while ($r = $result->fetch())
		{
			echo "<p>" . $r['message'] . "</p>";
		}

	?>

</body>
</html>