<?php

	if( isset( $_GET["id"] ) )
	{
		echo "<p>Die ID ist " . $_GET["id"] . "</p>" ;
		echo "<p>Vorhname : " . $_GET["vorname"] . "</p>" ;
		echo "<p>Nachname : " . $_GET["nachname"] . "</p>" ;
	}
	
	
	if( isset( $_POST["id"] ) )
	{
		echo "POST : <br>" ;
		echo "<p>Die ID ist " . $_POST["id"] . "</p>" ;
		echo "<p>Vorhname : " . $_POST["vorname"] . "</p>" ;
		echo "<p>Nachname : " . $_POST["nachname"] . "</p>" ;
	}
