<?php
class View{
	
public static function table($rs){
	echo '<html>';
	echo '<head>';
		echo '<title>successful login</title>';
	echo '</head>';

	echo '<body>';
		echo 'Votre login est '.$_SESSION['nom'].' et votre mot de passe est '.$_SESSION['passw'].'.';
	echo '<br />';
	echo '<a href="./logout.php">Déconnection</a>';

		echo '<br />';
		echo "Nom == >" . $_SESSION['nom']. "<br/>";
		echo "<table border='1' width='100%' cellpadding='10' cellspacing='0' >";
		$n = $rs->columnCount();
			echo"<tr>";
			for($i=0;$i<$n;$i++){
				$m = $rs->getColumnMeta($i);
				echo "<td style='background-color:gray;font-weight:bold;'>" . $m['name'] . "</td>";
			}
			echo "</tr>";
			foreach ($rs as $k => $row){
				echo "<tr>";
					for($i=0;$i<$n;$i++){
						echo "<td>" . $row[$i] . "</td>";
					}
				echo "</tr>";
			}
			echo "</table>";
	}
}
?>
