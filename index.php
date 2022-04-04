<?php
require_once("./src/auth/auth.php");
$error = $_SESSION['Logged'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/assets/css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Bem-vindo</title>
</head>
<body>
<div class="bg-auto bg-repeat bg-center" style="background-image: url(/src/assets/image/bg-paw.png);">
<div class="min-h-screen flex items-center flex-wrap justify-center m-6">
    <div class="">
      <img src="./src/assets/image/girl-and-dog.png" alt="" class="pet-image m-22">
    </div>
    <div class="flex flex-line flex-wrap items-center">
      <div class="justify-center">
        <div>
          <h2 class="text-5xl mb-5 text-gray-700 font-bold w-96">BEM VINDO(A) A PET CASE</h2>   
          <p class="text-lg text-gray-600 w-4/5">Para que você possa acompanhar o seu pet é necessário realizar o login!</p>
        </div>
        <div class="pt-6 w-4/5">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="flex flex-col flex-wrap justify-start mb-3">
              <label for="" class="mb-1 font-medium">Usuário</label>
              <input type="text" name="user" placeholder="Digite seu usuário" class="rounded-lg pl-3 h-10 bg-slate-100 placeholder:text-slate-300 focus:outline-none focus:ring focus:border-pink-300">
            </div>
            <div class="flex flex-col flex-wrap justify-start">
              <label for="" class="mb-1 font-medium">Senha</label>
              <input type="password" name="password" placeholder="Digite a sua senha" class="rounded-lg pl-3 h-10 bg-slate-100 placeholder:text-slate-300 focus:outline-none focus:ring focus:border-pink-300">
            </div>
            <p class="text-red-400 mt-5"><?php if($error === false || $error != null){echo("Usuário ou senha incorretos, verifique seus dados e tente novamente!");}; ?>
              </p>
            <div class="flex justify-center items-center bg-teal-400 rounded-lg h-10 mt-10 hover:bg-teal-500">
              <input type="submit" value="ENTRAR" class="font-semibold text-white">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> 
<script type="module" src="/js/index.js"></script> 
</body>
</html>