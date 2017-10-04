<?php
class Perso // creation de la classe perso

// declaration des attributs et méthodes

{
private $_force = 50; 
private $_localisation = "foret";
private $_experience = 50; 
private $_degats = 0; 


public function parler()
{
    echo "bonjour" ;     
}


public function deplacer() //méthode qui deplace le personnage 
{
    
}



public function frapper($perso2) //methode qui frappera un personnage 
{
    $perso2->_degats +=$this->_force; 
}



public function gagnerExperience() //methode augmenteant l'attribut $experience du personnage

{
    // on ajoute 1 à notre attribut $_experience
    $this->_experience = $this->_experience + 1;
}



public function afficheExperience()
{
    echo $this->_experience; 
}



}

$perso = new perso; 
$perso2 = new perso;
$perso->frapper(42);
$perso2->_degats +=50; 

// $perso->parler(); // le perso parle 
// $perso->gagnerExperience(); //on gagne de l'experience
// $perso->afficheExperience(); // on affiche l'experience 

?>