<?php

		include 'lib/Database.php';
		
		
		$nom = $_POST['nom'];
		$Email = $_POST['email'];
		$message = $_POST['message'];
		setlocale(LC_TIME, 'fra_fra');
		$date = strftime('%Y-%m-%d %H:%M:%S');
		
		$db = new Database("localhost", "pizzeria", "root", "");
		
		$req = $db->AjoutComm("commentaire",$nom,$Email,$message,$date);
		
			
		header("location: index-2.php");

?>