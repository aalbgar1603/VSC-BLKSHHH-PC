<?php


if (empty($_GET["num1"]) || empty($_GET["num2"])) {
  echo "Faltan parametros.";
} else {
  echo "Resultado: " . $_GET["num1"] . " + " . $_GET["num2"] . " = " . $_GET["num1"] + $_GET["num2"];
}
// http://localhost:3000/SERVIDOR/examen%202%20(repaso)/tarea/ej3.php?num1=20&num2=35