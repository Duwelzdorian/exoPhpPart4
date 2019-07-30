<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice3</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php

        function concat ($firstName, $lastName) {
            echo 'Mon nom est ' . $firstName . ' ' . $lastName . '.';
        }

        concat('George', 'David');
        ?>
    </body>
</html>