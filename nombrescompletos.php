<?php
$nombres = array("Juan", "María", "Pedro", "Luis", "Ana", "Carlos", "Laura", "David", "Sofía", "Elena");

$apellidos = array("García", "Martínez", "López", "González", "Rodríguez", "Fernández", "Pérez", "Martín", "Sánchez", "Ruiz");

function generarnombres($n_elementos){
    global $nombres;
    global $apellidos;
    $nombrescompletos = array();
    for ($i = 0; $i < $n_elementos; $i++) {
        $nombrescompletos[$i] = $nombres[array_rand($nombres)]. " " . $apellidos[array_rand($apellidos)];
    }
    return $nombrescompletos;
}

print_r(generarnombres(15));
?>