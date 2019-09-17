<html>
<body>     
    <?php
    session_start();
    $error = $_SESSION['error'];
    echo $error;
    unset($_SESSION['error']); // Unset, sacar elementos de array "$_SESSION" // 
    ?>

    <?php
    session_start();
    ?>

    <?php if (isset($_SESSION['user'])) : ?>
        <h2> Ya estas logeado <a href = "logout.php"> cerrar sesion </a></h2>
    <?php else : ?>  
        <?php if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        } ?>


        <form action="/practicos/login/access.php" method = "POST">
        <input type = "text" name = "username">
        <input type = "password" name = "password">
        <select name = "gender">
            <option value = "h"> Hombre </option>
            <option value = "m"> Mujer</option>
            <option value = "o"> Otro</option>
        </select>
        <input type = "submit" name = "Enviar">
        </form>

    <?php endif; ?>


</body>
</html>