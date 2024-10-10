<?php
  session_start();
  if (isset($_SESSION['Usuario'])) {
    echo $_SESSION['Usuario'];
    echo "<br><a href=\"./index.php\"> Logout</a>";
  } else {
    header("Location: logout.php");
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
</body>
</html>