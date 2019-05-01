<?php

function triangulo($base, $altura) {
  global $funciones_ejecutadas;
  $funciones_ejecutadas++;

  return ($base * $altura) / 2.0;
}

function rectangulo($base, $altura) {
  global $funciones_ejecutadas;
  $funciones_ejecutadas++;

  return ($base * $altura);
}

function cuadrado($base) {
  global $funciones_ejecutadas;
  $funciones_ejecutadas++;

  return $base * $base;
}
function circulo($radio) {
  global $funciones_ejecutadas;
  $funciones_ejecutadas++;
  
  return pi() * $radio ** 2;
}
