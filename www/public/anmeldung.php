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
			print_r ( $_POST );
			echo "</pre>" ;
			
			
			echo "Ihr Loginname ist: " . $_POST["login"] . "<br>" ;
			echo "Ihr Passeord ist: " . $_POST["pwd"]  . "<br>" ;
			
			echo md5( $_POST["pwd"] );
		?>
		
		
	</body>
</html>