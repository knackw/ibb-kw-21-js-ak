<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style></style>
	</head>
	<body>
		<?php

			echo "<pre>" ;
			
			print_r ( $_GET );
			print_r ( $_POST );
			
			
			
			echo "</pre>" ;
			
			echo "Vorname : " . $_GET["vorname"] . "<br>" ;
		?>
	</body>
</html>

