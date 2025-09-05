<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            width: 40px;
            height: 40px;
        }
        .pair {
            background-color: green;
            color: white; /* texte blanc pour contraste */
        }
    </style>
</head>
<body>

<table>
    <?php
    // Boucle sur les lignes
    for ($i = 0; $i < 10; $i++) {
        echo "<tr>";
        // Boucle sur les colonnes
        for ($j = 0; $j < 10; $j++) {
            $nombre = rand(1, 100);
            // Vérifie si pair
            $classe = ($nombre % 2 == 0) ? "pair" : "";
            echo "<td class='$classe'>$nombre</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>