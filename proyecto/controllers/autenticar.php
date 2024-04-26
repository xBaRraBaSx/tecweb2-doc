<?php
session_start();
//incluye las classes

include_once '../loader/autoload.php';

//instancia objetos 
$l = new Login();
$lDAO = new LoginDAO();

//recupera los valores del POST y los almacena en variables 
$usuario =  filter_input(INPUT_POST, "usuario");
$senha = filter_input(INPUT_POST, "senha");


//envía los valores como atributos al objeto

$l->setUsuario($usuario);
$l->setSenha($senha);

//verifica si el método Login retorna True

if($lDAO->logar($l)){
    header("location:../views/principal.php");
}else{
   print "ERROR AL AUTENTICAR";
}