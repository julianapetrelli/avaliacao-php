<?php
session_start();

$file= "register.txt";

if(!file_exists($file)){
    $register = fopen($file,"w");
}else{
    $register = fopen($file,"a");
}

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

        fwrite($register,"\n"."Nome:".$name."\n"."Tipo de pet:".$pet."\n"."Sexo do pet:".$sex."\n"."Data de nascimento:".$nasc."\n"."Peso:".$weight."\n"."Código da coleira:".$code."\n"."\n");
        
        header("location: ./registered.php");
    };
};

?>