<?php

if (empty($_POST["nombre"]) || empty($_POST["pass"])) {
  echo "No se han rellenado todos los campos";
} else {
  echo "Usuario: " . $_POST["nombre"] . "<br>Password: " . $_POST["pass"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="./ej4.php" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <label for="pass">Password</label>
    <input type="text" name="pass">
    <input type="submit">
  </form>
</body>

</html>