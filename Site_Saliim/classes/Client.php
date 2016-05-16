<?php
class Client{
	private $nom;
	private $Email;
	private $tel;
	private $motPasse;
	private $adresse;
		
	function Client($nom, $Email, $tel, $motPasse, $adresse){
		$this->nom = $nom;
		$this->Email = $Email;
		$this->tel = $tel;
		$this->motPasse = $motPasse;
		$this->adresse = $adresse;
		}

	public function getNom(){
		return $this->nom;
	}
	public function setNom($name){
		$this->nom = $name;
	}
	
	public function getEmail(){
		return $this->Email;
	}
	public function setEmail($email){
		$this->Email = $email;
	}
	
	public function getTel(){
		return $this->tel;
	}
	public function setTel($tele){
		$this->tel = $tele;
	}
	
	public function getMotPasse(){
		return $this->motPasse;
	}
	public function setPassword($pass){
		$this->motPasse = $pass;
	}
	
	public function getAdresse(){
		return $this->adresse;
	}
	public function setAdress($adress){
		$this->adresse = $adress;
	}
	
	function toHTML(){
		return 
			"<tr><td>" . $this->nom . "</td>"
			. "<td>" . $this->Email . "</td>"
			. "<td>" . $this->tel . "</td>"
			. "<td>" . $this->motPasse . "</td>"
			. "<td>" . $this->adresse . "</td></tr>";
	}
}
?>