<?php
require_once('security.php');
$user=$_SESSION['user'];
?>

<form action="saveprofile.php" method="POST">
   <input type="text" name="Nombre" placeholder="Nombre">
   <input type="text" name="Apellido" placeholder="Apellido">
   <input type="text" name="Username" placeholder="Username">
    <input type="submit" value="enviar">
</form>
