<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exercice1</h1>
    <?php
    echo '<p> Hello World, Bienvenue sur mon premier script PHP</p>';
     
    ?>

   <h2> Exercice2:</h2>
    <?php
    echo '<p> Hello World, Bienvenue sur mon premier script PHP</p>';
    
     print '<p> Aujourd\'hui, nous sommes 01 / 09 /2025 .</p>'.'<br>';

    ?>
    <h3>Exercice 3</h3> 
   <p>
    Bonjour j'aime vraiment beaucoup les licornes;
   </p>
   <?php
    '<p>Ce texte est affiché depuis PHP</p>'
   ?>
   <h4>Exercice 4:</h4>
     <?php
 // explication de l'exercice 2
 /**
  * echo accepte plusieurs arguments et ne retourne aucune valeur tandis que print_r, affiche des informations à propos d'une variable, de manière à ce qu'elle soit lisible
  */
     ?>
 
    <h5>Exercice5</h5>
    <?php
    $personne = ['nom','age'];
    print_r($personne);
    

      $personne = [
            'nom' => 'Laura', 
            'age' => 38, 
        ];

    ?>
    <h5>Exercice 6</h5>

    <?php

    $nombre=25;
    $str ='pomme';
    var_dump($nombre);
    var_dump($str);
    ?>

    <h5>Exercice 7 :</h5>
    
    <?php
    echo '<p>Je suis Hafida Hazard j\'ai deux enfants<b>Alice</b> et <b>Axel</b>  et  <i>sont à l\'ecole</i> et <u>Robert Fournier</u>) </p>';
   
    ?>
    <h5>Exercice 8</h5>
    <?php
    echo("<div>
           <h1>Exposé</h1> 
                <p>10 Octobre pour moi </p>
        </div>"); 
        // j'ai ecris du code dans PHP
    ?>

    <h5>Exercice 9</h5>
     
    <h1>Exposé</h1>
        <h2>PHP</h2>
        <p>
            \n n'est pas censé être vu comme une nouvelle ligne par l'utilisateur final , vous devez utiliser l'élément html <br/> pour cela. /n affecte uniquement la façon dont le code HTML généré par PHP apparaît dans le code source de la page Web. Si vous allez sur votre page Web et cliquez sur « Afficher la source », vous verrez le code HTML généré par 
            PHP comme une longue ligne.
            <?php
           echo date('d F Y', time());
            ?>
            
        </p>
        <?php
    

    
        ?>
<?php
    // Affiche la date du jour
    echo date_fran();
?>
<?php

    
    function date_fran()
    {
    $mois = array("Janvier", "Fevrier", "Mars",
                  "Avril","Mai", "Juin", 
                  "Juillet", "Aoà»t","Septembre",
                  "Octobre", "Novembre", "Decembre");
    $jours= array("Dimanche", "Lundi", "Mardi",
                  "Mercredi", "Jeudi", "Vendredi",
                  "Samedi");
    return $jours[date("w")]." ".date("j").(date("j")==1 ? "er":" ").
           $mois[date("n")-1]." ".date("Y");
    }
?>
        
    <h5>Exercice 10 :</h5>

    <?php
     $message= "Je suis Hafida Hazard j'ai deux enfants<b>Alice</b> et <b>Axel</b>  et  <i>sont à l'ecole</i> et <u>Robert Fournier</u>)";
     echo "<h1> .$message .</h1>";
    
    ?>
    <?php
    
    ?>
  


















   <?php
    
    ?>
</body>
</html>