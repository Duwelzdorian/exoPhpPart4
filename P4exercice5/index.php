<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice5</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php

        function concat($name, $age) {
            echo 'Mon nom est ' . $name . ', j\'ai ' . $age . ' ans.';
        }

        concat('George', 32);
        ?>
    </body>
</html>