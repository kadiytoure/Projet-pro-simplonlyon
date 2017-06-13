<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class PetitChien {
    public $nom ;
    public $race;
    public $dateNaissance;
    public $couleur;  
    
    public function aboyer() {
        echo 'wouf wouf wouf';
    }
    
    public function __toString() {
        return 'mon nom est ' . $this->nom . ',ma race est' . $this->race . 'ma date de naissance est' . $this->dateNaissance . 'ma couleur est' . $this->couleur  ;
    }
    
    public function __construct($nom,$race, $date, $couleur) {
        $this->nom = $nom;
        $this->race = $race;
        $this ->dateNaissance = $date;
        $this ->couleur = $couleur;
        
    }
   
 
    
}

