<?php

//carga automatica de las clases 

function meuLoader($classe) {
    $extensao = spl_autoload_extensions();
    $dir = "../classes/";
    include_once $dir. $classe. $extensao;
}

spl_autoload_extensions(".php");
spl_autoload_register("meuLoader");

