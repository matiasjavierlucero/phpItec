<?php
require('security.php');#Incluye solo archivos '.php'
include_once('text.txt');#Incluye cualquier formato
include_once('hola.php');
include_once('text.txt');
include_once('hola.php');


$user=$_SESSION['user'];

echo $user['username'];
?>

<a href="logout.php"><button>Cerrar Sesion</button></a>
<a href="perfil.php"><button>Editar Perfil</button></a>

