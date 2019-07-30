<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice6</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php

        function concat($lastName, $firstName, $age) {
            echo 'Bonjour ' . $lastName . ' ' . $firstName . ', tu as ' . $age . ' ans.';
        }

        concat('Hellvan', 'George', 32);
        ?>
    </body>
</html>