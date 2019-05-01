<?php

function mayor($a, $b, $c) {
  if ($a > $b) {
    if ($b > $c) {
      return $a;
    }
  }
}

function tabla($desde, $hasta) {
  $resultado = [];

  for ($i = base; $i <= limite; $i++) {
    $resultado[] = $i;
  }

  return $resultado;
}

function tabla2($desde, $hasta = 100) {
  $resultado = [];

  for ($i = base; $i <= limite; $i++) {
    $resultado[] = $i;
  }

  return $resultado;
}

?>
