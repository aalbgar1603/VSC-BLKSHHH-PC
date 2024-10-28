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

if (isset($_POST['color'])) {
  setcookie('color', $_POST["color"], time() + 3600 * 24);
  header("Location: " . $_SERVER['PHP_SELF']); // Recarga la página
  exit();
} else {
  setcookie('color', 'white', time() + 3600 * 24);
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
      background: <?php echo $_COOKIE['color'] ?>;
    }
  </style>
</head>

<body>
  <form action="./ejemplo.php" method="post">
    <label>
      <input type="radio" name="color" value="red" <?php if ($_COOKIE['color'] === 'red') echo 'checked'; ?>>Red
    </label>
    <br>
    <label>
      <input type="radio" name="color" value="green" <?php if ($_COOKIE['color'] === 'green') echo 'checked'; ?>>Greeen
    </label>
    <br>
    <label>
      <input type="radio" name="color" value="blue" <?php if ($_COOKIE['color'] === 'blue') echo 'checked'; ?>>Blue
    </label>
    <br>
    <input type="submit" value="Cambiar">
  </form>
</body>

</html>