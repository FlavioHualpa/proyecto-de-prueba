<?php

function triangulo($base, $altura) {
  return ($base * $altura) / 2.0;
}

function rectangulo($base, $altura) {
  return ($base * $altura);
}

function circulo($radio) {
  return pi() * $radio ** 2;
}
