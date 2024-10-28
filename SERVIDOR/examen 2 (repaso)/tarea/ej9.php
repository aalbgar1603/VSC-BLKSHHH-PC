<?php
$usuario = 'asd';
$contraseña = '123';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($_POST['nick_form'] === $usuario && $_POST['pass_form'] === $contraseña) {
    echo "CORRECTO";
    if (isset($_POST['recordar'])) {
      setcookie('nick_cookie', $_POST['nick_form'], time() + 3600 * 24);
      setcookie('pass_cookie', $_POST['pass_form'], time() + 3600 * 24);
      header('Location: ' . $_SERVER['PHP_SELF']);
    }
    if (isset($_COOKIE['nick_cookie']) && isset($_COOKIE['pass_cookie']) && isset($_POST['olvidar'])) {
      setcookie('nick_cookie', $_POST['nick_form'], time() - 3600 * 24);
      setcookie('pass_cookie', $_POST['pass_form'], time() - 3600 * 24);
      header('Location: ' . $_SERVER['PHP_SELF']);
    }
  } else {
    echo 'INCORRECTO';
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
  <form action="./ej9.php" method="post">
    <label for="nick">Usuario</label>
    <input type="text" name="nick_form" value="<?php if (isset($_COOKIE['nick_cookie'])) echo $_COOKIE['nick_cookie']; ?>">
    <br>
    <label for="pass">Contraseña</label>
    <input type="text" name="pass_form" value="<?php if (isset($_COOKIE['pass_cookie'])) echo $_COOKIE['pass_cookie']; ?>">
    <br>
    <label for="recordar">Recordar datos</label>
    <input type="checkbox" name="recordar">
    <br>
    <label for="olvidar">Olvidar datos</label>
    <input type="checkbox" name="olvidar">
    <br>
    <input type="submit" value="Sexo">

  </form>
</body>

</html>