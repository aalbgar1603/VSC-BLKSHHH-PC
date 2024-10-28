<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header('Location: 1_login.php?redirigido=true');
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
  <?php echo '<p>Bienvenido: ' . $_SESSION['usuario'] . '</p>' ?>
  <a href="./3_logout.php">Salir</a>
</body>

</html>