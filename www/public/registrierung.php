<?php
	$ausgabe = "" ;


	if( isset( $_POST["reg"] ) )
	{
		$vorname = $_POST["vorname"] ;
		$nachname = $_POST["nachname"] ;
		$ort = $_POST["ort"] ;
		$login = $_POST["login"] ;
		$pwd1 = $_POST["pwd1"] ;
		$pwd2 = $_POST["pwd2"] ;
	
		// todo : Die Daten überprüfen !!
		
		
		// Erstellen des Datenbankzugriffs
		$con = mysqli_connect( "localhost" , "root" , "" , "personal" );
		/*
			$con = false, wenn der Zugriff nicht funktioniert hat
		*/
		
		if( !$con )
		{
			// Datenbankverbindung nicht erfolgreich....
		
			$ausgabe = "Reg nicht möglich" ;
			
			// Fehlermeldung des DB-Servers auslesen
			$dbError = mysqli_connect_error() ;
			
			// DB-Error-Meldung in eine log-Datei schreiben
			file_put_contents( "dbError.log" , $dbError , FILE_APPEND );
		}
		else
		{
			// Hier lande ich wenn die Datenbankverbind erstellt wurde
			
			// todo : is login schon vergeben?
			$sql = "SELECT login FROM personen WHERE login = '$login'" ;
			
			$result = mysqli_query( $con , $sql );
			/*
				$result = false, wenn der SQL-Befehl fehlerhaft ist
						= Datenpaket, wenn die Anfrage erfolgreich war
			*/
			
			if( !$result )
			{
				$ausgabe = "Reg unmöglich" ;
				
				// Fehlermeldung des DB-Servers auslesen
				$dbError = mysqli_connect_error() ;
				
				// DB-Error-Meldung in eine log-Datei schreiben
				file_put_contents( "dbError.log" , $dbError , FILE_APPEND );
			}
			else
			{
				if( mysqli_num_rows( $result ) > 0 )
				{				
					// Login schon vergeben !!
					$ausgabe = "Login schon vergeben" ;
					
				}
				else
				{
				
					// todo : SQL-Injection vermeiden !!
					
					// todo : pwd hash 
					
					
					$sql = "INSERT INTO personen( vorname, nachname, ort, login, pwd) VALUES ( '$vorname','$nachname','$ort','$login','$pwd1')" ;
					
					// SQL-Statment / Anweisung zum DB-Server schicken
					
					$result = mysqli_query( $con , $sql );
					
					/*
						$result = true, wenn alles funktioniert
								= false, bei einem DB Error
					*/
					
					if( !$result )
					{
						$ausgabe = "Reg fehlgeschlagen" ;
						
						// Fehlermeldung des DB-Servers auslesen
						$dbError = mysqli_connect_error() ;
						
						// DB-Error-Meldung in eine log-Datei schreiben
						file_put_contents( "dbError.log" , $dbError , FILE_APPEND );
					}
					else
					{
						$ausgabe = "Registrierung erfolgreich" ;

					}
				}
			
				mysqli_close( $con );
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style>
		</style>
		
	</head>
	<body>

		<header>Oben</header>
		
		<nav>
			<a href="start.html" >home</a>
		</nav>

		<div id="msg" ><?php echo $ausgabe; ?></div>


		<footer>unten</footer>
	</body>
</html>