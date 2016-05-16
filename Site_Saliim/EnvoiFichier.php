<html>
	<body>
		
		<?php    
		//Créer un dossier 'fichiers/1/'
//						  mkdir('C:/Users/Mahmoud/Desktop/Site_Salim/CV/1', 0777, true);
		$extensions_valides = array( 'pdf' );
		$extension_upload = strtolower(  substr(  strrchr($_FILES['fich']['name'], '.')  ,1)  );
			if ($_FILES['fich']['error']) {     
			          switch ($_FILES['fich']['error']){     
			                   case 1: // UPLOAD_ERR_INI_SIZE     
			                   	echo"Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";     
			                   break;     
			                   case 2: // UPLOAD_ERR_FORM_SIZE     
			                   	echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !"; 
			                   break;     
			                   case 3: // UPLOAD_ERR_PARTIAL     
			                   	echo "L'envoi du fichier a été interrompu pendant le transfert !";     
			                   break;     
			                   case 4: // UPLOAD_ERR_NO_FILE     
			                   	echo "Le fichier que vous avez envoyé a une taille nulle !"; 
			                   break;     
			          }     
			}     
			elseif ( !in_array($extension_upload,$extensions_valides) ){
							echo "Veuillez Verifier l'extension de votre fichier 
							(à rappeler le fichier doit etre un pdf)";
			}else{
						   $n = $_FILES['fich']['name'];
						   $nom = "C:/Users/Mahmoud/Desktop/Site_Salim/CV/1/{$n}";
						   $resultat = move_uploaded_file($_FILES['fich']['tmp_name'],$nom);
						   if ($resultat){ 
						   	echo "Transfert réussi";	 
							echo "Extension correcte";
						?>
						<br/>
								<b>Votre demande a bien été prise en compte on vous appelera 
								aprés une etude detaillé de votre dossier de candidature 
								Merci pour votre compréhension</b>
						<?php 		
			}
			} 
			
			
			
						 
						//Créer un identifiant difficile à deviner
//						  $n = md5(uniqid(rand(), true));
			
						   
						   ?>
	</body>
</html>