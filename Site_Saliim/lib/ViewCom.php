<?php
class View{
	
public static function table($req){
	echo "<html>";
	echo "<body>";
	$rs = $req;
	echo count($rs) . " commentaires";
	echo "<div style='margin-left:500px;padding:20px;'>";
	foreach ($rs as $k){
			echo "<br/>";
				echo "<div>";
					echo "Avatar ";
				echo "</div>";
				echo "<br/>";
				echo "<div>";
					echo "<span>" .$k['nom'] . "</span>" . "</br>";
					echo "<span>" . $k['Email']. "</span>" . "</br>";
					echo "<span>" . $k['comment']. "</span>" . "</br>";
				echo "<div>";
				
	}	
	echo "</div>";
	echo "</html>";
	echo "</body>";
	}
}
?>
