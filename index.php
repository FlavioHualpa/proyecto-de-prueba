<?php

$persona = [
  "nombre" => "John",
  "apellido" => "Snow",
  "edad" => 27,
  "hobbies" => [
    "Netflix",
    "Fútbol",
    "Programar"
  ]
];

$persona["edad"] = 25;
$persona["direccion"] = "Winterfell";
$persona["hobbies"][] = "Surf";

$valor1 = 8;
$valor2 = 16;
$aleat = rand(1, 5);

$nombreDeUsuario = "admin";
$contraseniaDeUsuario = "1234";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo "Título de la página" ?></title>
  </head>
  <body>
    <h1><?= "Título de la página" ?></h1>
    <p>
      <?php
        echo "El número mayor es ";
        if ($valor1 > $valor2) {
          echo $valor1;
        } else {
          echo $valor2;
        }
        ?>
    </p>
    <p>
      <?php
        if ($aleat == 3 || $aleat == 5) {
          echo "El valor aleatorio fue " . $aleat;
        }
        ?>
    </p>
    <p>
      <?php
        if ($nombreDeUsuario == "admin" && $contraseniaDeUsuario == "1234") {
          echo "Bienvenido!";
        } else {
          echo "Error de login.";
        }
      ?>
    </p>
  </body>
</html>
