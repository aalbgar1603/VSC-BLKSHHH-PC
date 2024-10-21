<?php

$nombre = "antonio";
$miguel = "alba";
if (count($_POST) > 0) {
  if (empty($_POST["nombre"]) || empty($_POST["pass"])) {
    echo "Rellene todos los campos";
  } else {
    if ($_POST["nombre"] != $nombre && $_POST["pass"] != $pass) {
      $error = true;
    } else {
      $error = false;
    }
  }
}
if (isset($error)) {
  if ($error) {
    echo '<p style="color: red;">Los datos no son correctos</p>';
  } else {
    echo '<p style="color: green;">CORRECTO!!</p>';
  }
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
  <form action="./ej5.php" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <label for="pass">Password</label>
    <input type="text" name="pass">
    <input type="submit">
  </form>
</body>

</html>