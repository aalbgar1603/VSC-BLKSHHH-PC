<?php

// Los datos que vamos a manipular se cogen de la URL
// Esos datos se guardan en una array llamada $_GET["clave"] que devuelve un valor
// Para comprobar que se han pasado los datos podemos usar la funcion empty() que devolvera un boolean
if (empty($_GET["nombre"])) {
  echo "Falta el parametro nombre.";
} else {
  echo "Hola " . $_GET["nombre"];
}
// http://localhost:3000/SERVIDOR/examen%202%20(repaso)/parametros/app.php?nombre=miguel