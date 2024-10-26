<?php
// Cadena de conexión que especifica el nombre de la base de datos y el host
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';

// Usuario y contraseña para acceder a la base de datos
$usuario = 'root';
$clave = ''; // La contraseña está vacía, asegúrate de que tu configuración sea correcta

try {
  ////////////////////////////////  CONEXION BBDD  //////////////////////////////////////////////////////////////////
  // Establece una conexión a la base de datos usando PDO
  $bd = new PDO($cadena_conexion, $usuario, $clave);
  echo "Conexión realizada con éxito\n---------------------------\n";
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  ////////////////////////////////  CREACION Y EJECUCION DE CONSULTA  ///////////////////////////////////////////////
  // CONSULTA 1  ---------------------------------------------------------------
  /**
   * AQUI SE CREA EL STRING QUE USAREMOS PARA CONSULTAR
   */
  $consulta_string = 'SELECT * FROM Usuarios WHERE rol = 0';
  print "Constula -> " . $consulta_string . "\n";
  /**
   * Ejecuta la consulta y almacena el resultado en $resultado_consulta
   */
  $resultado_consulta  = $bd->query($consulta_string);

  // Muestra cuántas filas ha devuelto la consulta
  echo "Numero de filas de la consulta: " . $resultado_consulta->rowCount() . "\n";

  // Recorre los resultados de la consulta y muestra el nombre y la clave de cada usuario
  $contador = 0;
  print "|N Fila\t|   ID\t| Nombre\t| Clave\n";
  foreach ($resultado_consulta as $fila) {
    $contador++;
    print "|   " . $contador++ .      "\t";
    print "|   " . $fila['id'] .     "\t";
    print "| "   . $fila['nombre'] . "\t";
    print "| "   . $fila['clave'] .  "\t\n";
  }
  print "---------------------------------------------\n\n\n";
  // Prepara una consulta SQL con parámetros para buscar usuarios con rol 0 y nombre 'rico'
  $preparada = $bd->prepare("SELECT nombre FROM Usuarios WHERE rol = ? AND nombre = ?");

  // Ejecuta la consulta con los valores 0 y 'rico'
  $preparada->execute(array(0, 'rico'));

  // Muestra cuántos usuarios coinciden con el rol 0 y nombre 'rico'
  echo "Usuarios con el rol 0: " . $preparada->rowCount() . "\n";

  // Recorre los resultados y muestra el nombre de cada usuario
  foreach ($preparada as $usu) {
    print "Nombre: " . $usu['nombre'] . "\n";
  }

  echo "------------------------------\n";

  // Ejemplo comentado de inserción de datos (no ejecutado actualmente)
  // $sqlInsert = 'INSERT INTO Usuarios (nombre, clave, rol) VALUES ("prueba","clavesita",10)';
  // $bd->query($sqlInsert);

  // Nueva consulta para seleccionar todos los usuarios de la tabla
  $consulta = 'SELECT nombre, clave, rol FROM Usuarios';

  // Ejecuta la consulta y almacena el resultado en $salida
  $salida = $bd->query($consulta);

  // Muestra cuántas filas ha devuelto la consulta
  echo "Resultados: " . $salida->rowCount() . "\n";

  // Recorre los resultados y muestra el nombre y clave de cada usuario
  foreach ($salida as $fila) {
    print $fila['nombre'] . "\t";
    print $fila['clave'] . "\t\n";
  }
  // Nueva consulta para seleccionar todos los usuarios de la tabla
  $consulta = 'SELECT * FROM Usuarios';

  // Ejecuta la consulta y almacena el resultado en $salida
  $salida = $bd->query($consulta);

  // Muestra cuántas filas ha devuelto la consulta
  echo "Resultados (rc: " . $salida->rowCount() . "\n";

  // Recorre los resultados y muestra el nombre y clave de cada usuario
  foreach ($salida as $fila) {
    print $fila['nombre'] . "\t\n";
    print $fila['clave'] . "\t\n";
  }

  // Comentado, pero aquí podrías cerrar la conexión a la base de datos
  // $bd->close();

} catch (PDOException $e) {
  // Captura cualquier excepción de PDO y muestra el mensaje de error
  echo "Error con la BBDD: " . $e->getMessage();
}
