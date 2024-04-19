<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<body>
    <?php
    if(isset($_POST['texto'])){
        $texto = $_POST['texto'];
        $num = intval($texto);
        if($num >= 1 && $num <= 9) {
            echo "El Texto recibido es $texto<br>";
            echo "tabla de multiplicar de $texto<br>";
            for($i=1;$i<=10;$i++){
                echo "$num * $i = ".($num*$i)." <br>";
            }
            echo '<a href="form01.php">Volver</a>';
        } else {
            echo "<script>window.location.href = 'form01.php';</script>";
        }
    }else{
        echo '<form method="POST" action="" >
        <label for="texto"> Introduce un texto</label>
        <input type="text" id="texto" name="texto">
        <button type="submit">ENVIAR</button>
    </form>';
    }
    ?>
    
</body>
</html>
