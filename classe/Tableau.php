<!--
Theme Name: Interface gestion
Theme URI: https://pooTableauClient
Author: H.COLIN
Author URI: https://H.COLIN
Use it to make something cool, have fun, and share what you've learned with others.
-->
<?php

class Tableau{

private $_nom;
private $_prenom;
private $_adresse;
private $_codePostal;
private $_mail;
private $_telephone;
private $_numClient;
private $_numCommande;
private $_quantite;
private $_prix;
 
 public function __construct($nom,$prenom,$adresse,$codePostal,$mail,$telephone,$numClient,$numCommande,$quantite,$prix)
 {
	 
	 $this->_nom=$nom;
	 $this->_prenom=$prenom;
	 $this->_adresse=$adresse;
	 $this->_codePostal=$codePostal;
	 $this->_mail=$mail;
	 $this->_telephone=$telephone;
	 $this->_numClient=$numClient;
	 $this->_numCommande=$numCommande;
	 $this->_quantite=$quantite;
	 $this->_prix=$prix;
 }
 
  public function getInfos (){
	  
	  echo  "  ".$this->_nom."   ".  $this->_prenom."  ".$this->_adresse."  ".$this->_codePostal."  ".
	  $this->_mail."  ".$this->_telephone."  N Client°".$this->_numClient.
	  "  N° Commande".$this->_numCommande ." Quantité ".$this->_quantite." Prix ".$this->_prix." €";
  }
  
  public function getNom (){
	  return $this->_nom;
  }
  public function setNom($nom){
	  $this->_nom=$nom;
  }
   public function getPrenom (){
	  return $this->_prenom;
  }
  public function setPrenom($prenom){
	  $this->_prenom=$prenom;
  }
   public function getAdresse (){
	  return $this->_adresse;
  }
  public function setAdresse($adresse){
	  $this->_adresse=$adresse;
  }
   public function getCodePostal (){
	  return $this->_codePostal;
  }
  public function setCodePostal($codePostal){
	  $this->_codePostal=$codepostal;
  }
   public function getMail (){
	  return $this->_mail;
  }
  public function setMail($mail){
	  $this->_mail=$mail;
  }
   public function getTelephone (){
	  return $this->_telephone;
  }
  public function setTelephone($telepone){
	  $this->_telephone=$telephone;
  }
   public function getNumClient (){
	  return $this->_numClient;
  }
  public function setNumclient($numClient){
	  $this->_numClient=$numClient;
  }
   public function getNumCommande (){
	  return $this->_numCommande;
  }
  public function setNumCommande($numCommande){
	  $this->_numCommande=$numCommande;
  }
  public function getQuantite (){
	  return $this->_quantite;
  }
  public function setQuantite($quantite){
      $this->_quantite=$quantite;
  }
  public function getPrix (){
	  return $this->_prix;
  }
  public function setPrix($prix){
      $this->_prix=$prix;
  }
}
 
?>