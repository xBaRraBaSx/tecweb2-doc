<!DOCTYPE html>
<html lang="es"> <!-- Agrega el atributo lang="es" -->
<head>
    <meta charset="UTF-8">
    <title>Tela inicial</title>
    <!-- Enlace a las hojas de estilo de Bootstrap desde su URL -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5"> <!-- Agrega la clase container y el margen superior -->
        <div class="text-center">
            <!-- Encabezado personalizado -->
            <h1 class="text-primary">Sistema Web - 00</h1> <!-- Cambia el color del encabezado -->
            <div class="jumbotron">
                <form class="mt-4" method="post" action="controllers/autenticar.php"> <!-- Ajusta el margen superior del formulario -->
                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <input class="form-control" type="text" id="usuario" name="usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Contraseña:</label>
                        <input class="form-control" type="password" id="senha" name="senha" required>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" name="entrar">Login</button> <!-- Ajusta el botón para que ocupe todo el ancho -->
                </form>
                <br>
                <img class="img-fluid" src="php-logo-2.png" alt="PHP Logo" width="250px">
            </div>
        </div>
    </div>
</body>
</html>
