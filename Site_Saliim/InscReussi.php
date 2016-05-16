
<?php 
	include 'classes/Client.php';
	
	$mail = 'sema_ma@hotmail.fr'; // Déclaration de l'adresse de destination.
	
	$client = new Client($_POST['nom'], $_POST['email'], $_POST['tel'], $_POST['pass'], $_POST['adresse']);
	
	$nom = $client->getNom();
	$tel = $client->getTel();
	$Email = $client->getEmail();
	$adresse = $client->getAdresse();
	$password = $client->getMotPasse();
	
	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
	{
		$passage_ligne = "\r\n";
	}
	else
	{
		$passage_ligne = "\n";
	}
	//=====Déclaration des messages au format texte et au format HTML.
	$message_txt = "Salim Senhaji Propriétaire de Pizzeria WinWin";
	$message_html = "
		<html>
			<head></head>
			<body> 
				Bonjour Pour valider votre inscription dans la base de données,
				<a href='http://localhost/testPanier/panierTT/ConfirmationInscr.php?&Nom=$nom 
					&EMail=$Email&tel=$tel&adresse=$adresse
					&pass=$password'> 
					veuillez cliquer sur ce lien 
				</a> 
				s'il vous plait
				Cordialement
			</body>
		</html>";
	//=====Création de la boundary
	$boundary = "-----=".md5(rand());
	 
	//=====Définition du sujet.
	$sujet = "Hey cher Client  !";
	//=========
	 
	//=====Création du header de l'e-mail.
	$header = "From: \"Salim Senhaji\"<sema_ma@hotmail.fr>".$passage_ligne;
	$header.= "Reply-to: \"Mahmoud\" <sema_ma@hotmail.fr>".$passage_ligne;
	$header.= "MIME-Version: 1.0".$passage_ligne;
	$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
	//==========
	 
	//=====Création du message.
	$message = $passage_ligne."--".$boundary.$passage_ligne;
	//=====Ajout du message au format texte.
	$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_txt.$passage_ligne;
	//==========
	$message.= $passage_ligne."--".$boundary.$passage_ligne;
	//=====Ajout du message au format HTML
	$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_html.$passage_ligne;
	//==========
	$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
	$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
	 
	//=====Envoi de l'e-mail.
	if (mail($mail,$sujet,$message,$header) == FALSE)
	{
		echo "Erreur à l'envoie de l'email";
		exit;
	}else{
		echo "Un E-mail de Confirmation est envoyé a votre 
				Boite Merci de Valider Afin d'accomplir votre inscription";	
	}
	




?>