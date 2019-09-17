<?php
    session_start();
    if(!isset($_SESSION['user'])){
        echo 'no estas logeado';
        header('location:login.php');
    }