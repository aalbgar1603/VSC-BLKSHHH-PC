<?php
//CAMBIAR COLOR CON UN FORM POST

if (isset($_POST['color'])) {
  setcookie('color', $_POST["color"], time() + 3600 * 24);
  header("Location: " . $_SERVER['PHP_SELF']); // Recarga la página
  exit();
} else {
  setcookie('color', 'white', time() + 3600 * 24);
}
