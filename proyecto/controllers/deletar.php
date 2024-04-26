<?php

//incluye las classes
include_once '../loader/autoload.php';

//instancia objetos
$p = new Pessoa();
$pDAO = new PessoaDAO();

//recupera el valor id del POST en una variable 

$id = filter_input(INPUT_GET, "id");

//envía el valor id como atributo

$p->setId($id);

//verifica si el método Eliminar retorna Ture
if ($pDAO->excluir($p)) {
    print" <script> alert('Registro eliminado satisfactoriamente');location='../views/listar.php' </script> <br/>";
}else{
    print "error al eliminar el registro";
}