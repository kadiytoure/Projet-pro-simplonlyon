<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      include_once'./petitchien.php';
      $chien1 = new PetitChien();
      $chien1->nom = 'rex';
      $chien1->race = 'corgi';
      $chien1->couleur = 'marron';
      $chien1->dateNaissance = '20/05/2017';
      
      echo ($chien1->nom) . ' ';
      echo $chien1->race . ' ';
      echo ($chien1->couleur) . ' ';
      echo ($chien1->dateNaissance) . ' ';
      $chien1->aboyer();
      echo  ' ';
      echo $chien1;
      ?>
    </body>
</html>
