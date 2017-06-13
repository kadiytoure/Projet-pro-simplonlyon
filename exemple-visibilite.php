<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './Compte.php';

$compte = new Compte();

//$compte->soldde = 20000000000000;

//echo $compte-> solde;

echo $compte->getSolde();

