<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$notas = array();
for ($i = 0; $i < 10; $i++) {
    $notas[$i]=rand(0,10);}
    
for ($i = 0; $i < 10; $i++) {
    echo "Nota ".($i+1)." = $notas[$i] es ";

    switch ($notas[$i]) {
        case 0: case 1: case 2: case 3: case 4:
            echo "Insuficiente<br>"; break;
        case 5:
            echo "Suficiente<br>"; break;
        case $nota = 6:
            echo "Bien<br>"; break;
        case 7: case 8:
            echo "Notable<br>"; break;
        case 9: case 10:
            echo "Sobresaliente<br>"; break;
    }

    }
?>
</body>
</html>


