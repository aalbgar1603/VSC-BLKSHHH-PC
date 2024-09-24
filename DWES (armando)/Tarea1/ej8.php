<?php
/**
 * Antonio Miguel Alba Garcia
 */
  // Definimos una variable personalizada para manejar los errores E_NOTICE
  function manejarError($errno, $errstr, $errfile, $errline) {

    if ($errno === E_NOTICE) {  //Esta conodicion muestra los errores E_NOTICE
      echo "Error capturado: [$errno] $errstr en $errfile en la linea $errline\nBy: Antonio Alba\n";
    } else {                    //Esta conodicion muestra los errores QUE NO SON E_NOTICE
      echo "Error: [$errno] $errstr\nBy: Antonio Alba\n";
    }
  }

  //Cargamos nuestro manejador
  set_error_handler("manejarError");

  //Hacemos saltar el error
  $nombre=$apellido;

  //Y restauramos error_handler para borrar el manejador
  restore_error_handler();
?>