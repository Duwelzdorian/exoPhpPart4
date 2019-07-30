<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice7</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        $age = rand(1, 100);
        $genderHF = array('Homme', 'Femme');
        $genderRand = array_rand($genderHF);
        $gender = $genderHF[$genderRand];

        function concat($age, $gender) {
            if ($age >= 18 AND $gender == 'Homme') {
                echo $age . ' // ' . $gender . ' => Vous êtes un homme et vous êtes majeur.';
            } elseif ($age < 18 AND $gender == 'Homme') {
                echo $age . ' // ' . $gender . ' => Vous êtes un homme et vous êtes mineur.';
            } elseif ($age >= 18 AND $gender == 'Femme') {
                echo $age . ' // ' . $gender . ' => Vous êtes une femme et vous êtes majeur.';
            } else {
                echo $age . ' // ' . $gender . ' => Vous êtes une femme et vous êtes mineur.';
            }
        }

        concat($age, $gender);
        ?>
    </body>
</html>