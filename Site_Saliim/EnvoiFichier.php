<html>
	<body>
		
		<?php    
		//Cr�er un dossier 'fichiers/1/'
//						  mkdir('C:/Users/Mahmoud/Desktop/Site_Salim/CV/1', 0777, true);
		$extensions_valides = array( 'pdf' );
		$extension_upload = strtolower(  substr(  strrchr($_FILES['fich']['name'], '.')  ,1)  );
			if ($_FILES['fich']['error']) {     
			          switch ($_FILES['fich']['error']){     
			                   case 1: // UPLOAD_ERR_INI_SIZE     
			                   	echo"Le fichier d�passe la limite autoris�e par le serveur (fichier php.ini) !";     
			                   break;     
			                   case 2: // UPLOAD_ERR_FORM_SIZE     
			                   	echo "Le fichier d�passe la limite autoris�e dans le formulaire HTML !"; 
			                   break;     
			                   case 3: // UPLOAD_ERR_PARTIAL     
			                   	echo "L'envoi du fichier a �t� interrompu pendant le transfert !";     
			                   break;     
			                   case 4: // UPLOAD_ERR_NO_FILE     
			                   	echo "Le fichier que vous avez envoy� a une taille nulle !"; 
			                   break;     
			          }     
			}     
			elseif ( !in_array($extension_upload,$extensions_valides) ){
							echo "Veuillez Verifier l'extension de votre fichier 
							(� rappeler le fichier doit etre un pdf)";
			}else{
						   $n = $_FILES['fich']['name'];
						   $nom = "C:/Users/Mahmoud/Desktop/Site_Salim/CV/1/{$n}";
						   $resultat = move_uploaded_file($_FILES['fich']['tmp_name'],$nom);
						   if ($resultat){ 
						   	echo "Transfert r�ussi";	 
							echo "Extension correcte";
						?>
						<br/>
								<b>Votre demande a bien �t� prise en compte on vous appelera 
								apr�s une etude detaill� de votre dossier de candidature 
								Merci pour votre compr�hension</b>
						<?php 		
			}
			} 
			
			
			
						 
						//Cr�er un identifiant difficile � deviner
//						  $n = md5(uniqid(rand(), true));
			
						   
						   ?>
	</body>
</html>