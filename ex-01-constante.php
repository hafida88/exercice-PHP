<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice constante</title>
</head>
<body>

<h2>Exercice 1:</h2>
<?php
    define('PI', 3.14159 );
    echo 
    var_dump(PI);
?>

<h2>Exercice 2:</h2>
<?php

    define('LARGEUR', 2);
    define('LONGUEUR', 10);
    $air = LARGEUR * LONGUEUR ;
    print_r($air)

?>
<h2>Exercice 3:</h2>

<?php
    echo __FILE__ . '</br>';
?>

<h2>Exercice 4:</h2>

<?php

    define("PREFIXE", "Bonjour");

    // Déclaration des variables
    $mot1 = "tout";
    $mot2 = "le";
    $mot3 = "monde";

    // Affichage de la phrase complète
    echo (PREFIXE . " " . $mot1 . " " . $mot2 . " " . $mot3);
?>
<h2>Exercice 5:</h2>


<?php

    define("SUJET", "La France");
    $capitale = 'Paris';
    echo "<p> La capitale de " . SUJET . " est  $capitale</p>"; 
    ?>

<h2>Exercice 6:</h2>


<?php
    define("TAUX_TVA", 0.2);
    $priceHT = 100; 
    $priceTTC = $priceHT + ($priceHT * TAUX_TVA);

    // Affichage du résultat
    echo "Prix HT : " . $priceHT . " €<br>";
    echo "Taux de TVA : " . (TAUX_TVA * 57) . "%<br>";
    echo "Prix TTC : " . $priceTTC . " €";
    ?>

<h2>Exercice 7:</h2>

    <?php
    define("EURO_VERS_USD", 1.2);
    $euros = 50; 
    $dollars = $euros * EURO_VERS_USD;


echo "<p> Pour" . $euros . '€ = ' ." vous aurez  . $dollars  USD </p>"; 

?>

<h2>Exercice 8:</h2>


<?php
    define("SEUL" , 10);
    $random = rand(0, 35);
    if( $random > SEUL){
        echo '$random est supérieure à 10 <br>';
    }else{
        echo '$random est inferieure à 10 <br>';
    }
?>

<h2>Exercice 9:</h2>
    <?php
        define("URL_SITE" , "https://www.toutemonannee.com/");
        $page = 'https://www.pagesjaunes.fr/';

     ?>
<a href=""></a>


      
   

    




    





















<?php

    ?>
</body>
</html>