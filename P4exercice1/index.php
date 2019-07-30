<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice1</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>

<?php
function returnTrue( $x ){
    $x[$x] = $x;
    return $x != true;
}
$res = returnTrue('0');
var_dump($res);
?>
    </body>
</html>