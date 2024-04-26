<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inserción de Registros</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container form-container">
        <div class="form-group">
            <h3>Registro de Personas</h3>
            <form method="post" action="../controllers/inserir.php">
                Nombre <br>
                <input class="form-control" type="text" name="nome" required> <br><br>
                Sobrenombre <br>
                <input class="form-control" type="text" name="sobrenome" required> <br><br>
                Fecha_Nacimiento <br>
                <input class="form-control" type="date" name="data" required> <br><br>
                Género <br>
                <select class="form-control" name="genero">
                    <option selected disabled></option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select> <br><br>
                Estado Civil <br>
                <input type="radio" name="ec" value="Soltero(a)"> Soltero(a)
                <input type="radio" name="ec" value="Casado(a)"> Casado(a)
                <input type="radio" name="ec" value="Divorciado(a)"> Divorciado(a)
                <input type="radio" name="ec" value="Viudo(a)"> Viudo(a) <br><br>
                <button type="submit" class="btn btn-primary" value="Inserir">Guardar</button>
                <a href="principal.php" class="btn btn-secondary">Volver</a>
            </form>            
        </div>
    </div>
</body>
</html>
