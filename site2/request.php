<?php
	$page =  $_GET['page'];

	echo "<h1>Vous ete sur la page $page</h1>";

	for ($i=0; $i<10; $i++)
	{
		echo "<p>music #$i</p>";
	}
?>