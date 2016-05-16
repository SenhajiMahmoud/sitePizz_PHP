<?php 
		include 'lib/Database.php';
		$pass = $_GET['pass'];
		$nom = $_GET['Nom'];
		$tel = $_GET['tel'];
		$Email = $_GET['EMail'];
		$adresse = $_GET['adresse'];
		
		$db = new Database("localhost", "pizzeria", "root", "");
		
		$res = $db->inscription("client",$nom,$Email,$tel,$adresse,$pass);
		$db->InscrLoginn($Email,$pass);
		
		
		
		header("location: Index.php");
?>