<?php
session_start();
$user = $_SESSION['user'];
echo 'Hola, esta es la home '.$user ['username'];
?>

<html>
    <button href="login.php">Salir</button>
</html>
