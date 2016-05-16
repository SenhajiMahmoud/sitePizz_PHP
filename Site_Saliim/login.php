<html>
<head>
</head>
<body>

	<?php 
		    $redirection = NULL;
 
			if( isset($_SERVER['HTTP_REFERER']) )
			     $redirection = $_SERVER['HTTP_REFERER'];
			else
			     $redirection = 'index.php'; 
?>
	

		<?php
			session_start();
			include 'lib/Database.php';
			include 'lib/View.php';
			//-----------------------
			$db = new Database("localhost", "pizzeria", "root", "");
			$view = new View();
			$nom= $_POST['login'];
			$passw = $_POST['password'];
			
			//-----------------------
			
				$rs = $db->loginn($nom, $passw);
				if($rs->rowCount() == 0){
					header("Location: $redirection"); 
				}else{
					$_SESSION['logged']='1';
					$_SESSION['nom']=$nom;
					header("Location: $redirection"); 
				}
		?>
</body>
</html>
