<!-- ANTONIO MIGUEL ALBA GARCIA - 29/10/2024 -->
<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_POST['new_pass'] == $_POST['new_pass2']) {
    if ($_POST['old_pass'] == $_SESSION['old_pass_session']) {
      header('Location: salir.php');
    } else {
      echo "La contraseña antigua es incorrecta";
    }
  } else {
    echo "Las contraseñas nuevas no coinciden";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cambiar Contraseña</title>
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <input type="text" name="old_pass" placeholder="Contraseña antigua"><br>
    <input type="text" name="new_pass" placeholder="Contraseña nueva"><br>
    <input type="text" name="new_pass2" placeholder="Confirma la contraseña nueva"><br>
    <!--
    <input type="pass" name="old_pass" placeholder="Contraseña antigua"><br>
    <input type="pass" name="new_pass" placeholder="Contraseña nueva"><br>
    <input type="pass" name="new_pass2" placeholder="Confirma la contraseña nueva"><br
    -->
    <button type="submit">Login</button>
  </form>
</body>

</html>