<?php
session_start();
?>

<?php 
    if(isset($_SESSION['user'])):
?>
    <h2>Ya estas logueado $user['username']; <a href="logout.php"> Cerrar Sesion</a></h2>


<?php
    else:
?>


        <?php 
        if (isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset ($_SESSION['error']);
        }
        ?>

            <form action="access.php" method="POST">
                <input type="text" name="username">
                <input type="password" name="password">
                <select name="gender">
                    <option value="h">Hombre</option>
                    <option value="m">Mujer</option>
                    <option value="o">Otro</option>

                <input type="submit" value="enviar">  
            </form>

<?php endif; ?>

