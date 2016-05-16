<?php
class Database{
	private $host;
	private $source;
	private $user;
	private $password;
	private $url;

	private $db;
		
	function Database($host,$source,$user,$password){
		$this->host = $host;
		$this->password = $password;
		$this->user = $user;
		$this->source = $source;

		$this->url = "mysql:host=$host;dbname=$source";
		try {
			$this->db = new PDO($this->url, $this->user, $password);
		} catch (PDOException $e) {
			echo "Erreur de Connexion : " . $e->getMessage();
		}
		}
	
	public function loginn($name,$passw){
		$rs=$this->db->query("select * from login where Email='".$name."'and pwd='".$passw."'");
		return $rs;
	}	
	public function InscrLoginn($Email,$pass){
		$res = "insert into login(Email,pwd) values('" . $Email . "'" . ", '" . $pass ."')" ;
		$rs = $this->db->query($res);		
		return $rs;
	}	
	
	public function inscription($tablename, $nom, $Email, $tel,$adresse, $password){
		$req = "insert into $tablename(nom,email,tel,motPasse,adresse) values('" . $nom . "'" 
				. ", '" . $Email ."'" 
				. ", '" . $tel ."'" 
				. ", '" . $password ."'" 
				. ", '" . $adresse ."')";
		$res = $this->db->query($req);
		
		return $res;
	}
	public function AjoutComm($tablename, $nom_client, $Email, $message,$date){
		$req = "insert into $tablename(nom,Email,comment,dateCreation) 
				values('" . $nom_client . "'" . ", '" . $Email ."'" . ", '" . $message . "'". ", '" . $date . "')";
		$res = $this->db->query($req);
		return $res;
	}
	
	public function AfficherComm($tablename){
		$req = "select nom,Email,comment,dateCreation from $tablename order by dateCreation desc";
		$res = $this->db->query($req);
		return $res;
	}
	
	public function chargerNews($tablename){
		$req = "select * from $tablename";
		$res = $this->db->query($req);
		return $res;
	}
}
?>