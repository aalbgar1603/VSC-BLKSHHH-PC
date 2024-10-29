<!-- ANTONIO MIGUEL ALBA GARCIA - 29/10/2024 -->
<?php

function dividir($num1, $num2)
{
  if ($num2 < 1) {
    throw new Exception("No se puede dividir entre 0", 1);
  } else {
    return $num1 / $num2;
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
    if (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
      try {
        echo dividir($_POST['num1'], $_POST['num2']);
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "<br><br>";
      }
    } else {
      echo "Deben ser solo numeros";
    }
  } else {
    echo "No puede dejar campos vacios";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dividir</title>
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

    <input type="number" name="num1" placeholder="Numero 1">
    <br><br>
    <input type="number" name="num2" placeholder="Numero 2">
    <br><br>
    <input type="submit" value="Calcular">
  </form>
</body>

</html>