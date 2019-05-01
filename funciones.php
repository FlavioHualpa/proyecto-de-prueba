<?php

function mayor($a, $b, $c) {
  global $funciones_ejecutadas;
  $funciones_ejecutadas++;
  
  $mayor = $a;
  if ($b > $mayor) {
    $mayor = $b;
  }
  if ($c > $mayor) {
    $mayor = $c;
  }
  return $mayor;
}

function mayor2($a, $b, $c = 100) {
  global $funciones_ejecutadas;
  $funciones_ejecutadas++;

  return mayor($a, $b, $c);
}

function tabla($desde, $hasta) {
  global $funciones_ejecutadas;
  $funciones_ejecutadas++;

  $resultado = [];

  for ($i = base; $i <= limite; $i++) {
    $resultado[] = $i;
  }

  return $resultado;
}

function tabla2($desde, $hasta = 100) {
  global $funciones_ejecutadas;
  $funciones_ejecutadas++;

  $resultado = [];

  for ($i = base; $i <= limite; $i++) {
    $resultado[] = $i;
  }

  return $resultado;
}

?>
