<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    
    $name = $_POST["name"];
    $pet = $_POST["pet"];
    $sex = $_POST["sex"];
    $nasc = $_POST["nasc"];
    $weight = $_POST["weight"];
    $code = $_POST["code"];
    
    if(isset($name, $sex, $nasc, $weight, $code)) {
        $_SESSION['register'] = [
            "name" => $name,
            "pet" => $pet,
            "sex" => $sex,
            "nasc" => $nasc,
            "weight" => $weight,
            "code" => $code
        ];

        $_SESSION['newRegister'] = true;
        
        header("location: ./registered.php");
    };
};

?>