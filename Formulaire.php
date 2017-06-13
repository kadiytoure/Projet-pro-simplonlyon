

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 <!DOCTYPE html>
 <html>
     <head>
         <title>Formulaire Personne</title>
     </head>
     <body>
         <?php
         if(isset($_POST['nom'])) {
             $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
             
         include_once './Personne.php';
             
             $instancePersonne = 
                 new Personne($post['nom'], $post['prenom'], $post['age'], $post[region]);
         echo '<pre>';
         var_dump($instancePersonne);
         echo '</pre>';
         }
         ?>
<form action="Personne.php" method="POST">
    <label for="nom">Nom :</label>
    <input id="nom" name="idnom" type="text" />
    <label for="prenom">Prenom :</label>
    <input id="prenom" name="idprenom" type="text" />
    <label for="age">Age :</label>
    <input id="age" name="idage" type="number" />
    <label for="region">Region :</label>
    <select name="choixregion" id="region">
        <option value="rh" selected>Rhône-Alpes</option>
        <option value="la">Bretagne</option>
        <option value="lr">Languedoc-Roussillon</option>
        <option value="lm">Limousin</option>
        <option value="pc">Poitou-Charentes</option>
    </select>
    <button>Envoyer</button>
     </form>
         
    </body>
 
    
 </html>


