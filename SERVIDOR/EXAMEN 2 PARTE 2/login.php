<!-- ANTONIO MIGUEL ALBA GARCIA - 29/10/2024 -->
<?php
$_SESSION = array();
session_destroy();

$usuario = 'antonio';
$contraseña = 'alba';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($usuario == $_POST['nick'] && $contraseña == $_POST['pass']) {
    session_start();
    $_SESSION['nick_session'] = $_POST['nick'];
    $_SESSION['old_pass_session'] = $contraseña;
    $_SESSION['pass_session'] = $_POST['pass'];
    header('Location: cambPass.php');
  } else {
    echo "Datos incorrectos.";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <input type="text" name="nick" placeholder="Nick">
    <input type="text" name="pass" placeholder="Pass">
    <!--
    <input type="pass" name="pass" placeholder="Pass">
    -->
    <button type="submit">Login</button>
  </form>
</body>

</html>