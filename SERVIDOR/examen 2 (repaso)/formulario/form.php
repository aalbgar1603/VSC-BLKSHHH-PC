<?php
// Aqui acaban los valores del formulario del HTML
if (empty($_POST["nombre"]) || empty($_POST["pass"])) {
  echo "No se han rellenado todos los campos";
} else {
  echo "Usuario: " . $_POST["nombre"] . "<br>Password: " . $_POST["pass"];
}
