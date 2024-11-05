<!-- ANTONIO MIGUEL ALBA GARCIA - 29/10/2024 -->
<?php

function tipoArchivo($tipo)
{
  if ($tipo == "application/pdf")
    return true;
  else
    return false;
}
function comprobarError($i)
{
  if ($i == 0) {
    return true;
  } else if ($i == 1) {
    throw new Exception("El fichero subido excede la directiva upload_max_filesize de php.ini.", 1);
  } else if ($i == 2) {
    throw new Exception("El fichero subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML.", 1);
  } else if ($i == 3) {
    throw new Exception("El fichero fue sólo parcialmente subido.", 1);
  } else if ($i == 4) {
    throw new Exception(" No se subió ningún fichero.", 1);
  } else if ($i == 5) {
    throw new Exception("Este error no venia en la chuleta de errores. Pero lo controlo por si acaso jaja", 1);
  } else if ($i == 6) {
    throw new Exception("Falta la carpeta temporal.", 1);
  } else if ($i == 7) {
    throw new Exception("No se pudo escribir el fichero en el disco.", 1);
  } else if ($i == 8) {
    throw new Exception("Una extensión de PHP detuvo la subida de ficheros.", 1);
  }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (is_uploaded_file($_FILES["documento"]["tmp_name"])) {
    if (tipoArchivo($_FILES["documento"]["type"])) {
      try {
        move_uploaded_file($_FILES['documento']['tmp_name'], 'documentos/' . $_FILES['documento']['name']);
        comprobarError($_FILES["documento"]["error"]);
        echo "Archivo subido";
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "<br><br>";
      }
    } else {
      echo "El archivo subido no es PDF";
    }
  } else {
    echo "No se ha subido el archivo";
  }
}

?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subida fichero</title>

</head>


<body>
  <form name="fichero" action="<?php echo $_SERVER['PHP_SELF']; ?>" ENCTYPE="multipart/form-data"
    method="POST">
    <input type="file" name="documento" accept="application/pdf">
    <br>
    <button type="submit" value="Subir" name="enviar">Enviar</button>
  </form>
</body>

</html>