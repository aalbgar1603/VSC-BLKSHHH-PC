<?php
  $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
  $usuario = 'root';
  $clave = '';
  try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
    echo "Conexion realizada con  exito<br>";
    $sql = 'SELECT nombre, clave, rol FROM Usuarios WHERE rol = 0';
    $usuarios  = $bd->query($sql);
    echo $usuarios->rowCount(). "<br>";
    foreach ($usuarios as $row) {
      print $row['nombre']."\t";
      print $row['clave']."\t<br>";
    }


    $preparada = $bd->prepare("select nombre from usuarios where rol = ? and nombre = ?");
    $preparada->execute(array(0,'rico'));
    echo "Usuarios con el rol 0: ".$preparada->rowCount()."<br>";
    foreach ($preparada as $usu) {
      print "Nombre: ".$usu['nombre']."<br>";
    }
    echo "------------------------------<br>";
    //insertamos
    //$sqlInsert = 'INSERT INTO usuarios (nombre, clave, rol) VALUES ("prueba","clavesita",10)';
    //$bd->query($sqlInsert);
    //creamos la consulta
    $consulta = 'SELECT nombre, clave, rol FROM Usuarios';
    //hacemos la consulta y la guardamos en  $salida
    $salida = $bd->query($consulta);
    //mostramos resultado
    echo "Resultados: ".$salida->rowCount()."<br>";
    foreach ($salida as $fila) {
      print $fila['nombre']."\t";
      print $fila['clave']."\t<br>";
    }

    //$bd->close();
  } catch (PDOException $e) {
    echo "Error con la bbdd: ".$e->getMessage();
  }
?>