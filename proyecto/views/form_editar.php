<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edición de Registros</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="container mt-5">
        <a href="listar.php" class="btn btn-primary">VOLVER</a>
        
        <h3>Edición de Personas</h3>
        <?php 
            // Recuperar el valor del parámetro 'id' de la URL
            $id = filter_input(INPUT_GET, "id");
            // Incluir archivo de conexión
            include_once '../loader/autoload.php';
            // Instancia del objeto 
            $pDAO = new PessoaDAO();
            $p = new Pessoa();
            // Enviar el valor del ID como atributo al objeto 
            $p->setId($id);
            // Asignar resultado a la variable
            $obj = $pDAO->listar($p);
        ?>
        <div class="form-group">
            <form method="post" action="../controllers/editar.php">
                Nombre <br>
                <input type="text" class="form-control" name="nome" required value="<?=$obj->nome?>"> <br><br>
                Sobrenombre <br>
                <input type="text" class="form-control" name="sobrenome" required value="<?=$obj->sobrenome?>"> <br><br>
                Fecha de Nacimiento <br>
                <input type="date" class="form-control" name="data" required value="<?=$obj->data_nascimento?>"> <br><br>
                Género <br>
                <select class="form-control" name="genero">
                    <?php
                    if($obj->genero == "M"){
                        echo "<option selected value='M'>Masculino</option>";
                        echo "<option value='F'>Femenino</option>";
                    }else{
                        echo "<option value='M'>Masculino</option>";
                        echo "<option selected value='F'>Femenino</option>";
                    }
                    ?>
                </select> <br><br>
                Estado Civil <br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ec" value="Soltero(a)"
                           <?=($obj->estado_civil == "Soltero(a)") ? "checked" : ""?> >
                    <label class="form-check-label">Soltero(a)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ec" value="Casado(a)"
                           <?=($obj->estado_civil == "Casado(a)") ? "checked" : ""?> >
                    <label class="form-check-label">Casado(a)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ec" value="Divorciado(a)"
                           <?=($obj->estado_civil == "Divorciado(a)") ? "checked" : ""?> >
                    <label class="form-check-label">Divorciado(a)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ec" value="Viudo(a)"
                           <?=($obj->estado_civil == "Viudo(a)") ? "checked" : ""?> >
                    <label class="form-check-label">Viudo(a)</label>
                </div>
                <input type="hidden" name="id" value="<?=$obj->id?>">
                <input type="submit" class="btn btn-primary" value="Editar" onclick="return confirm('¿Desea editar el registro?')">                
            </form>
        </div>            
    </div>
</body>
</html>
