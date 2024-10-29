<!-- ANTONIO MIGUEL ALBA GARCIA - 29/10/2024 -->
<?php

session_start();
$_SESSION = array();
setcookie(session_name(), 123, time() - 1000);
session_destroy();
header('Location: login.php');
