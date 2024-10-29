<?php
session_start();
if (!isset($_SESSION['nombre']) && !isset($_SESSION['pass'])) {
  header('Location: login.php?redirigido=true');
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
  <p>Hola <?php echo $_SESSION['nombre'] . $_SESSION['pass'] ?></p>
  <a href="logout.php">Salir</a>
</body>

</html>