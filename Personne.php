<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Personne {
private $nom;
private $prenom;
private $age;
private $region;

}


function __construct($nom, $prenom, $age, $region) {
  $this->nom = $nom;
  $this->prenom = $prenom;
  $this->age = $age;
  $this->region = $region;
}
function getNom() {
    return $this->nom;
}

function getPrenom() {
    return $this->prenom;
}

function getAge() {
    return $this->age;
}

function getRegion() {
    return $this->region;
}

?>