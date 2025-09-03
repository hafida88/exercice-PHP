<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo_concatenation</title>
</head>
<body>
    <h2>Exercice 1</h2>
    <?php
        $nom = "Alice";
        $Prenom ="HAZARD";
      //affichage sur HTML;
        echo "<p>Nom complet : $Prenom $nom </p>";
    ?>
    <h2>Exercice 2</h2>
    <?php
        $phrase1  =  " Le ciel est";
        $phrase2 = "bleu aujourd'hui";
        echo "<p> $phrase1 $phrase2 </p>";
    ?>
    <h2>Exercice 3</h2>
    <?php
        $mot1  =  " J'aime";
        $mot2 = "le";
        $mot3 = "PHP";
        echo "<p>$mot1 $mot2 $mot3</p>";
        echo '<p>',$mot1,' ', $mot2,' ',$mot3,'</p>';
    ?>
    <h2>Exercice 4</h2>

    <?php
        $texte = "Je vais";
        $texte .= " à la plage.";
        echo "<p>$texte</p>";
    ?>
    <h2>Exercice5</h2>
    <?php
    ?>
     <h2>Exercice6</h2>
    <?php
        $mot="PHP";
        echo "<p> Le mot est : $mot </p>";

    ?>

     <h2>Exercice 7</h2>
    <?php
        $nom = "Axel";
        echo "<p> Bonjour $nom ,Bienvenue sur notre site  </p>";
    ?>
     <h2>Exercice 8</h2>
    <?php
        $citation = "la vie est belle";
        echo "<p> $citation  ,surtout quand on code en PHP! </p>";
        //ou
        $citation .= ' surtout quand on code en PHP !';

        echo "<p>$citation</p>";
    ?>
     <h2>Exercice 9</h2>
    <?php
        $a = 5;
        $b = 10;
        $total = $a + $b;
        echo "<p> le total est $total  </p>";
        
    ?>




</body>
</html>