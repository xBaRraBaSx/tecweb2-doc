<!DOCTYPE html>
<?php 
    session_start();
    // Verifica si el usuario no está autenticado 
    if(!$_SESSION["autenticado"]){
       print "<script>alert('Acceso no autorizado. Realice el Login'); location='index.php'</script>";
    }
    if(filter_input(INPUT_GET, "sair") == "ok"){
        include_once 'loader/autoload.php';
        LoginDAO::deslogar();
    }
?>
<html lang="es"> <!-- Agrega el atributo lang="es" -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla principal</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <span class="welcome-message"><?= $_SESSION["usuario"] ?></span>,
        Bienvenido(a) a nuestro sistema web
        <hr>
        <h2 class="text-muted menu-title">Menu principal</h2>
        <div class="menu-options">
            <a href="form_inserir.php" class="btn btn-block btn-primary">INSERTAR</a>
            <a href="listar.php" class="btn btn-block btn-primary">LISTAR</a>
            <a href="../index.php" onclick="return confirm('¿Deseja salir del sistema?')" class="btn btn-block btn-danger">SALIR</a>
        </div>
    </div>

</body>
</html>
