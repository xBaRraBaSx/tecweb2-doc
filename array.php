<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $edades = array(
        "Juan" => "0",
        "Maria" => "0",
        "Paco" => "0",
        "Pedro" => "0",
        "Jose" => "0"
    );
    foreach ($edades as $clave => $valor) {
        do {
            $numero_aleatorio = rand(20, 80);
        } while ($numero_aleatorio % 2 == 0);
        $edades[$clave] = $numero_aleatorio;
    }
    foreach($edades as $clave => $valor){
        echo "Clave: " . $clave . " - Valor: " . $valor;
        echo "<br>";
    }
    ?>
</body>
</html>