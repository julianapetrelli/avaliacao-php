<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    
    define("USER", $_POST['user']);
    define("PASSWORD", $_POST['password']);

    if(USER == 'juliana' && PASSWORD == '123mudar'){
        $_SESSION['user'] = "Juliana Tangerino";
        header("Location: ./src/screens/home.php");
        exit;
    } else {
        $_SESSION['Logged'] = false;
    }
};
?>