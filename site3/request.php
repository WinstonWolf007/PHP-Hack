<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>

	<?php

		if(isset($_FILES['file']))
		{
			$tmpName = $_FILES['file']['tmp_name'];
			$name = $_FILES['file']['name'];
			$size = $_FILES['file']['size'];
			$error = $_FILES['file']['error'];
			$type = $_FILES['file']['type'];

			if ($type != "image/png")
			{
				echo "mettre du png uniquement !";
				exit();
			}

			move_uploaded_file($tmpName, './upload/'.$name);
			echo "le fichier a ete envoyer !";
		}

		else
		{
			"Veuiller mettre une image (pas rien !)";
		}

		

	?>

</body>
</html>