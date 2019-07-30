<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice4</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php

        function compare($number1, $number2) {
            if ($number1 > $number2) {
                echo 'Le premier nombre est plus grand<br />';
            } elseif ($number1 < $number2) {
                echo 'Le premier nombre est plus petit<br />';
            } else {
                echo 'Les deux nombres sont identiques';
            }
        }

        compare(1, 2);
        compare(2, 1);
        compare(2, 2);
        ?>
    </body>
</html>