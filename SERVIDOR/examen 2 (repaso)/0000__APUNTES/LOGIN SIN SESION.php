<?php
//COMPROBAR LOGIN SIN INICIAR SESION
$nombre = "a";
$pass = "a";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!isset($_POST["nombre"]) || !isset($_POST["pass"]) || empty($_POST["nombre"]) || empty($_POST["pass"])) {
    echo "Rellene todos los campos";
  } else {
    if ($_POST["nombre"] != $nombre || $_POST["pass"] != $pass) {
      $error = true;
    } else {
      echo "entro";
      $error = false;
    }
  }
  if (isset($error)) {
    echo "entro";
    if ($error) {
      echo "entro";
      $salida = '<span style="color: red;">Los datos no son correctos</span>';
    } else {
      $salida = '<span style="color: green;">CORRECTO!!</span>';
    }
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
  <h1><?php echo (isset($salida)) ? $salida : "" ?></h1>
</body>

</html>