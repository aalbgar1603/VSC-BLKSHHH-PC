<?php
if (!isset($_COOKIE['visitas'])) { // Si no existe
  setcookie('visitas', '1', time() + 3600 * 24);
  echo "Bienvenido por primera vez";
} else {
  if ($_COOKIE['visitas'] > 4) {
    $visitas = 1;
    setcookie('visitas', $visitas, time() + 3600 * 24);
    echo "Bienvenido por $visitas vez";
  } else {
    $visitas = (int) $_COOKIE['visitas'];
    $visitas++;
    setcookie('visitas', $visitas, time() + 3600 * 24);
    echo "Bienvenido por $visitas vez";
  }
}
if (!isset($_COOKIE['color'])) { //crea la cookie con el color blanco si no existe la cookie
  setcookie('color', 'white', time() + 3600 * 24);
} else {
  if (!empty($_POST['color'])) {
    setcookie('color', $_POST["color"], time() + 3600 * 24);
    header("Location: " . $_SERVER['PHP_SELF']); // Recarga la página
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background: <?php echo (!isset($_COOKIE['color'])) ? 'white' : $_COOKIE['color'] ?>;
    }
  </style>
</head>

<body>
  <form action="./ejemplo.php" method="post">
    <label>
      <input type="radio" name="color" value="red">Red
    </label>
    <br>
    <label>
      <input type="radio" name="color" value="green">Greeen
    </label>
    <br>
    <label>
      <input type="radio" name="color" value="blue">Blue
    </label>
    <br>
    <input type="submit" value="Cambiar">
  </form>
</body>

</html>