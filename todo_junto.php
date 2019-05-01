<?php

$funciones_ejecutadas = 0;

include('funciones.php');
include('superficie.php');

function mayor_superficie($r1, $r2, $r3) {
  return mayor(
    circulo($r1),
    circulo($r2),
    circulo($r3)
  );
}

echo mayor_superficie(5, 10, 1);
echo '<br>';
echo 'Funciones ejecutadas: ' . $funciones_ejecutadas;
echo '<br>';
echo 'php está en la posición ' . strpos('Me encanta php, a mi también me encanta php!', 'php') . ' (contando desde cero) dentro del string.';

?>
