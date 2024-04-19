<?php

$numeros = array();

function inicializar_array($n_elementos, $min, $max) {
    global $numeros;
    for ($i = 0; $i < $n_elementos; $i++) {
        $numeros[$i] = rand($min, $max);
    }
}

inicializar_array(rand(1,20),20,50);
print_r($numeros);
?>