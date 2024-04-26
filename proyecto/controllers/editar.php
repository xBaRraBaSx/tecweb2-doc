<?php

include_once '../loader/autoload.php';

//instancia objetos

$p = new Pessoa();
$pDAO = new PessoaDAO();

//recupera los valores del INPUT_POST y los almacena en variables
$nome = filter_input(INPUT_POST, "nome");
$sobrenome = filter_input(INPUT_POST, "sobrenome");
$data_nascimento = filter_input(INPUT_POST, "data");
$genero = filter_input(INPUT_POST, "genero");
$estado_civil = filter_input(INPUT_POST, "ec");
$id           = filter_input(INPUT_POST, "id");

//envía los valores como atributos del objeto $p 

$p->setNome($nome);
$p->setSobrenome($sobrenome);
$p->setData_nascimento($data_nascimento);
$p->setGenero($genero);
$p->setEstado_civil($estado_civil);
$p->setId($id);


//verifica si el método editar retorna True

if ($pDAO->atualizar($p)) {
    print" <script> alert('Registro editado satisfactoriamente');location='../views/listar.php' </script> <br/>";
} else {
    print "errro al editar registro <br/>";
}

