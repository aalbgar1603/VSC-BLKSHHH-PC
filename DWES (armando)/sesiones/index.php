  <?php

    function comprobar($user, $pass) {
      
      if ("admin" == $user  && "12345" == $pass) {
        $datos = array();
        $datos["user"] = "admin";
        $datos["rol"] = 1;
        print_r($datos);
        
        return $datos;
      } else if ("usuario" == $user  && "12345" == $pass){
        $datos = array();
        $datos["user"] = "usuario";
        $datos["rol"] = 0;
        echo "hola u";
        print_r($datos);
        return $datos;
      } else {
        echo "no";
        print_r("no ha entrado");
        return false;
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $salida = comprobar($_POST["user"],  $_POST["pass"]);
      if ($salida == false) {
        $error = true;
        $usuario =  $_POST["user"];
      }  else {
        session_start();
        $_SESSION['Usuario'] = $_POST["user"];

        header("Location: sesiones.php");
      }
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SESIONES</title>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="user">User:</label>
    <input type="text" name="user" id="user"  value="<?php if (isset($usuario)) echo $usuario; ?>">
    <br><br>
    <label for="pass">Pass:</label>
    <input type="password" name="pass" id="pass">
    <br><br>
    <button type="submit">ENTRAR</button>
  </form>
</body>
</html>