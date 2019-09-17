<?php
    $users = [
        [
            'id'=> 1, 
            'username'=> 'Aldo',
            'password'=> 'Aldo2019'
        ],
        [
            'id'=> 2, 
            'username'=> 'Matias',
            'password'=> 'Mati2019'
        ],
        [
            'id'=> 3, 
            'username'=> 'Jose',
            'password'=> 'Jose2019'
        ],
        [
            'id'=> 4, 
            'username'=> 'Pepe',
            'password'=> 'Pepito'
        ],
        [
            'id'=> 5,
            'username'=> 'Juan',
            'password'=> 'Juanito'
        ]
    ];

    
    $username= $_POST['username'];
    $password =$_POST['password'];


    foreach ($users as $user ) {
       if ($username== $user['username'] && ($password==$user['password'])){
           $userselect = $user;
       }
    }

    echo $userselect['username'], $userselect['id'];

    session_start();


    if(isset($userselect)){
        $_SESSION['user']=$userselect;
        header('Location:homes.php');
    }
    else{
        $_SESSION['error']='Usuario o Contraseña Incorrecta';
        header('location:login.php');
    }
  