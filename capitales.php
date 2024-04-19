<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $paises_capitales = array(
        "España" => "Madrid",
        "Francia" => "París",
        "Italia" => "Roma",
        "Alemania" => "Berlín",
        "Reino Unido" => "Londres",
        "Portugal" => "Lisboa",
        "Grecia" => "Atenas",
        "Suecia" => "Estocolmo",
        "Países Bajos" => "Ámsterdam",
        "Bélgica" => "Bruselas",
        "Suiza" => "Berna",
        "Austria" => "Viena",
        "Noruega" => "Oslo",
        "Dinamarca" => "Copenhague",
        "Finlandia" => "Helsinki",
        "Irlanda" => "Dublín",
        "Polonia" => "Varsovia",
        "Rumania" => "Bucarest",
        "Hungría" => "Budapest",
        "República Checa" => "Praga"
    );
    ksort($paises_capitales);
    foreach ($paises_capitales as $pais => $capital) {
        $numeroposicion = array_search($pais, array_keys($paises_capitales));
        echo "$numeroposicion La capital de $pais es $capital.\n";
    }
    
    $paisrandom = array_rand($paises_capitales);
    $posicion = array_search($paisrandom, array_keys($paises_capitales));
    $capitalrandom = $paises_capitales[$paisrandom];
    echo ".\n.\n$posicion La capital de $paisrandom es $capitalrandom";
    ?>
</body>
</html>