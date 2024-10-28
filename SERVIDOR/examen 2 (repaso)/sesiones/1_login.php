<?php
function comprobar($nombre, $contraseña)
{
  $u = 'usuario';
  $r = 'root';
  $p = '123';

  if (($nombre === $u || $nombre === $r) && $contraseña === $p) {
    $usu['nombre'] = $nombre;
    $usu['contraseña'] = $contraseña;
    return $usu;
  } else return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo "es post <br>";
  $usu = comprobar($_POST['user'], $_POST['pass']);
  if ($usu == false) {
    echo "es falso <br>";
    $usu = $_POST['user'];
    $err = true;
  } else {
    echo "es verdadero <br>";
    session_start();
    $_SESSION['usuario'] = $_POST['user'];
    $_SESSION['contraseña'] = $_POST['pass'];

    header('Location: 2_iniciada.php');
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
  <form action="./1_login.php" method="post">
    Usuario
    <input type="text" name="user"><br>
    Password
    <input type="text" name="pass"><br>
    <input type="submit" value="Login">
  </form>
</body>

</html>