<?php
$user_server = 'u';
$pass_server = 'p';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($_POST['nombre'] === $user_server && $_POST['pass'] === $pass_server) {
    session_start();
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['pass'] = $_POST['pass'];
    header('Location: home.php');
  } else {
    echo "Datos incorrectos";
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
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <input type="text" name="nombre" placeholder="Nombre">
    <br>
    <input type="text" name="pass" placeholder="Contraseña">
    <br>
    <input type="submit" value="">
  </form>
</body>

</html>