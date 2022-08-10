<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>

	<p>la faille image #1 consite a mettre un script php au lieux d une image png et a changer les parametres avec burp.exe</p>
	<h1>Mettre une photo de profil (.png)</h1>

	<form action="request.php" method="POST" enctype="multipart/form-data">
		<label for="file">File: </label>
		<input type="file" name="file">
		<input type="submit">
	</form>


</body>
</html>