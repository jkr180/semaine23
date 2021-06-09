<?php
class PersonnageDefault
{
// Attributs
private $_nom='Loper';
private $_prenom='Dave';
private $_age=18;
private $_sexe='Masculin';

 public function __construct() 
{
$this->_nom;
$this->_prenom;
$this->_age;
$this->_sexe;
}


public function getNom(){return $this->_nom;}
public function getPrenom(){return $this->_prenom;}
public function getAge(){return $this->_age;} 
public function getSexe(){return $this->_sexe;}



public function setNom($nom){
    if(is_string($nom))
{
    return $this->_nom = $nom;
}
}
public function setPrenom($prenom){
    if(is_string($prenom))
{
    return $this->_prenom = $prenom;
}
}
public function setAge($age){
    if(is_int($age))
{
    return $this->_age = $age;
}
}
public function setSexe($sexe){
    if(is_string($sexe))
{
    return $this->_sexe = $sexe;
}
}
}
$perso = new PersonnageDefault();
?>


