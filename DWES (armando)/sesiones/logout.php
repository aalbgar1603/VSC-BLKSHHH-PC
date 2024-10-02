<?php

  session_start();
  echo "Sesion creada";
  session_destroy();
  echo "Sesion cerrada";
  sleep(5);
  header("Location: index.php")
?>