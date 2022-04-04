<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    if($_POST['exit'] === "Sair"){
        $_SESSION = array();
        session_destroy();
        header("location: ../../index.php");
    }; 
};
?>