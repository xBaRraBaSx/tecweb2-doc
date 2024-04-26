<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Personas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-primary">Lista de Personas</h3>
        <a href="principal.php" class="btn btn-primary">VOLVER</a>
        <table class="table table-striped">
            <tr class="table-header">
                <th>Nombre</th>
                <th>Sobrenombre</th>
                <th>Fecha_Nacimiento</th>
                <th>Género</th>
                <th>Estado Civil</th>
                <th>Acciones</th>
            </tr>

            <?php
            //incluye archivo de conexion PHP
            include_once '../loader/autoload.php';
            //instancia objeto $pdao
            $pDAO = new PessoaDAO();
            //recorre todos los objetos encontrados 
            foreach ($pDAO->listarTudo() as $obj) {
                //crea un objeto DateTime en formato fecha
                $dataBR = date_format(date_create($obj->data_nascimento), "d/m/Y");
                echo "<tr class='table-row'>";
                echo "<td>$obj->nome</td>";
                echo "<td>$obj->sobrenome</td>";
                echo "<td>$dataBR</td>";
                echo "<td>$obj->genero</td>";
                echo "<td>$obj->estado_civil</td>";
                echo "<td>";
                echo "<a href='form_editar.php?id=$obj->id' class='btn btn-sm btn-primary'>Editar</a>";
                echo "<a href='../controllers/deletar.php?id=$obj->id' class='btn btn-sm btn-danger' onclick='return confirm(\"Desea Eliminar el Registro?\")'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>