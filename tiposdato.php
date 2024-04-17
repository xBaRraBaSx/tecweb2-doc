<?php
 $nombre="Juan";
 $edad="35";
 $nota="7.5";

 ob_start();
 var_dump($nombre);
 $tiponombre=ob_get_clean();

 ob_start();
 var_dump($edad);
 $tipoedad=ob_get_clean();

 ob_start();
 var_dump($nota);
 $tiponota=ob_get_clean();

 echo "Variable nombre= $tiponombre";
 echo "Variable edad= $tipoedad";
 echo "Variable nota= $tiponota";
?>