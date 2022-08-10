<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<script>
		document.cookie = "concluation=True";
	</script>
</head>
<body>

	<p>trouve 4 failles de securiter sur ce site !</p>
	<form action="deleteData.php" method="POST">
		<button type="submit">Delete Data Tchat</button>
	</form>

<!-- ------------------------------------------------------------ -->
	<h1><br>#1 tchat (ramasser tout les cookies du site)</h1>

	<form method="POST" action="request1.php">
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

		echo "<br><div style='border: solid black 2px;'>";
		while ($r = $result->fetch())
		{
			echo "<p>" . $r['message'] . "</p>";
		}
		echo "</div>";

	?>

<!-- ------------------------------------------------------------------------------ -->
	<h1><br>#2 music (ramasser tout les cookies du site)</h1>

	<form method="GET" action="request3.php">
		<input type="number" name="page">
		<input type="submit">
	</form>

<!-- ------------------------------------------------------------------------------- -->
	<h1><br>#3 photo (envoyer un fichier php dans 'upload/')</h1>

	<form action="request.php" method="POST" enctype="multipart/form-data">
		<label for="file">File: </label>
		<input type="file" name="file">
		<input type="submit">
	</form>


</body>
</html>