<?php


if (empty($_GET["nombre"])) {
  echo "Falta el parametro nombre.";
} else {
  echo "Hola " . $_GET["nombre"];
}
// http://localhost:3000/SERVIDOR/examen%202%20(repaso)/parametros/app.php?nombre=miguel