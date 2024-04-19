<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<body>
    <?php
    function esPrimo($numero) {
        if($numero < 2) {
            return false;
        }
        for($i = 2; $i <= sqrt($numero); $i++) {
            if($numero % $i === 0) {
                return false;
            }
        }
        return true;
    }
    function imprimir($num){
        echo "Números primos generados aleatoriamente:<br>";
            for($i=0;$i<$num;$i++){
                do{
                    $random_number = rand(1, 100);
                }while(!esPrimo($random_number));
                echo $random_number . "<br>";
            }
            echo '<a href="form02.php">Volver</a>';
    }
    if(isset($_POST['texto'])){
        $texto = $_POST['texto'];
        $num = intval($texto);
        if($num >= 1 && $num <= 9) {
            imprimir($num);
        } else {
            echo "<script>window.location.href = 'form02.php';</script>";
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
