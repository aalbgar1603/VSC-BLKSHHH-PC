<!-- ANTONIO MIGUEL ALBA GARCIA - 29/10/2024 -->
<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  $idioma = $_POST['idioma'];
  setcookie('idioma', $idioma, time() + 3600 * 24);
  if ($idioma == 'es') {
    header('Location: index_es.html');
    exit();
  } else {
    header('Location: index_en.html');
    exit();
  }
}

if (!isset($_COOKIE['idioma'])) {
  $idioma = 'es';
  setcookie('idioma', $idioma, time() + 3600 * 24);
} else {
  $idioma = $_COOKIE['idioma'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Idiomas</title>
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <input type="radio" name="idioma" value="es" <?php echo ($idioma == 'es') ? 'checked' : '' ?>>Español <br>
    <input type="radio" name="idioma" value="en" <?php echo ($idioma == 'en') ? 'checked' : '' ?>>Inglés <br>
    <button type="submit">Elegir</button>
  </form>
</body>