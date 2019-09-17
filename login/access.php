<?php
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$users = [
    [
        "id" => 1,
        "username" => "Aldo",
        "password" => "aldo2019"
    ],
    [
        "id" => 2,
        "username" => "Pablo",
        "password" => "pablo2019"
    ],
    [
        "id" => 3,
        "username" => "Diego",
        "password" => "diego2019"
    ],
    [
        "id" => 4,
        "username" => "Romina",
        "password" => "romina2019"
    ],
    [
        "id" => 5,
        "username" => "Juan",
        "password" => "juan2019"    
    ]
];

foreach ($users as $user) {
    if (($user["username"] == $username) && ($user["password"] == $password)){
        $userSelect = $user;
    }
}

session_start();
if (isset($userSelect)) {
    $_SESSION['user'] = $userSelect;
    header('Location: home.php');
}else {
    $_SESSION['error'] = 'Datos invalidos';
    header('Location: login.php');
}

if (isset($_SESSION)) {

}else {
    $_SESSION['UsuarioNuevo'] = 'Nuevo usuario';
    header('Location: login.php');
}