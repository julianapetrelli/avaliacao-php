<?php
require_once("../register/register.php");
require_once("../auth/logout.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Home</title>
</head>

<body>

    <!-- navbar and header -->
    <nav class="flex space-between items-center bg-slate-100 h-12 px-40 flex font-normal text-slate-800">
        <div class="flex item-center">
            <a href="" class="flex justify-center items-center gap-x-1.5">
                <span class="material-icons-outlined material-icons text-gray-400 ">pets</span>
                <span class="font-bold text-2xl text-gray-400"> Pet case </span>
            </a>
        </div>
        <div class="flex items-center text-center justify-center gap-x-16 font-medium text-gray-600">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
        </div>
        <form method="POST" class="flex item-center">
            <span class="material-icons-outlined material-icons text-gray-500 ">logout</span>
            <input href="" type="submit" name="exit" value="Sair" class="flex items-center gap-x-1.5 font-medium text-gray-500">
        </form>
    </nav>
    <header class="bg-cover bg-no-repeat bg-center" style="background-image: url(../assets/image/banner.png);">
        <div class="flex flex-col item-center justify-end pb-20 text-center h-96">
            <div class="flex item-center justify-center">
                <img src="../assets/image/paw.png" alt="" class="w-20 h-auto pb-6">
            </div>
            <div>
                <h3 class="title uppercase text-white">Olá, <?php echo ($_SESSION['user']); ?></h3>
                <p class="text-white">É muito bom te ver por aqui novamente!</p>
            </div>
        </div>
    </header>

    <!-- registered pets and new registration -->

    <div class="bg-auto bg-repeat bg-center" style="background-image: url(../assets/image/bg-paw.png);">
        <div class="flex items-center justify-center flex-wrap gap-x-16 py-12">
            <div class="flex flex-col w-1/4 border-l-4 border-indigo-200 pl-8">
                <h2 class="sub-title text-slate-700">PETS CADASTRADOS</h2>
                <p class="font-medium text-slate-600">Basta selecionar o pet do qual deseja acompanhar</p>
                <p>Para realizar o cadastro de um novo pet é necessário informar a numeração da coleira, ela se encontra atrás da plaquinha de identificação do seu animalzinho. </p>
            </div>
            <div class="flex flex-wrap items-center justify-center flex-wrap gap-x-10">
            <div class="">
                    <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs cursor-pointer">
                        <img class="mb-3 w-28 h-28 rounded-full shadow-lg mx-auto" src="../assets/image/cat-icon.png" alt="dog icon">
                        <h1 class="text-lg text-gray-700"> Thor </h1>
                        <h3 class="text-sm text-gray-400 "> Gato - 4 anos </h3>
                        <div class="pt-6">
                            <div class="flex items-center justify-center gap-x-1.5 font-medium text-gray-500">
                                <span class="material-icons-outlined material-icons text-base text-gray-500">favorite</span>
                                <span class="text-xs text-gray-400">60 bpm</span>
                            </div>
                            <div class="flex items-center justify-center gap-x-1.5 font-medium text-gray-500">
                                <span class="material-icons-outlined material-icons text-base text-gray-500">lunch_dining</span>
                                <span class="text-xs text-gray-400">25 kg</span>
                            </div>
                            <div class="flex items-center justify-center gap-x-1.5 font-medium text-gray-500">
                                <span class="material-icons-outlined material-icons text-base text-gray-500">male</span>
                                <span class="text-xs text-gray-400">Macho</span>
                            </div>
                        </div>
                        <button class="bg-indigo-500 hover:bg-indigo-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Ver mais</button>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs cursor-pointer">
                        <img class="mb-3 w-28 h-28 rounded-full shadow-lg mx-auto" src="../assets/image/dog-icon.png" alt="cat icon">
                        <h1 class="text-lg text-gray-700"> Apolo </h1>
                        <h3 class="text-sm text-gray-400 "> Cahorro - 2 anos </h3>
                        <div class="pt-6">
                            <div class="flex items-center justify-center gap-x-1.5 font-medium text-gray-500">
                                <span class="material-icons-outlined material-icons text-base text-gray-500">favorite</span>
                                <span class="text-xs text-gray-400">60 bpm</span>
                            </div>
                            <div class="flex items-center justify-center gap-x-1.5 font-medium text-gray-500">
                                <span class="material-icons-outlined material-icons text-base text-gray-500">lunch_dining</span>
                                <span class="text-xs text-gray-400">25 kg</span>
                            </div>
                            <div class="flex items-center justify-center gap-x-1.5 font-medium text-gray-500">
                                <span class="material-icons-outlined material-icons text-base text-gray-500">male</span>
                                <span class="text-xs text-gray-400">Macho</span>
                            </div>
                        </div>
                        <button class="bg-indigo-500 hover:bg-indigo-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Ver mais</button>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs cursor-pointer">
                        <img class="mb-3 w-28 h-28 rounded-full shadow-lg mx-auto" src="../assets/image/dog-icon.png" alt="cat icon">
                        <h1 class="text-lg text-gray-700"> Maggie </h1>
                        <h3 class="text-sm text-gray-400 "> Cachorro - 1 anos </h3>
                        <div class="pt-6">
                            <div class="flex items-center justify-center gap-x-1.5 font-medium text-gray-500">
                                <span class="material-icons-outlined material-icons text-base text-gray-500">favorite</span>
                                <span class="text-xs text-gray-400">60 bpm</span>
                            </div>
                            <div class="flex items-center justify-center gap-x-1.5 font-medium text-gray-500">
                                <span class="material-icons-outlined material-icons text-base text-gray-500">lunch_dining</span>
                                <span class="text-xs text-gray-400">25 kg</span>
                            </div>
                            <div class="flex items-center justify-center gap-x-1.5 font-medium text-gray-500">
                                <span class="material-icons-outlined material-icons text-base text-gray-500">female</span>
                                <span class="text-xs text-gray-400">Fêmea</span>
                            </div>
                        </div>
                        <button class="bg-indigo-500 hover:bg-indigo-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Ver mais</button>
                    </div>
                </div>
                <div class="">
                    <div class="bg-white font-semibold text-center rounded-3xl border shadow-lg p-10 max-w-xs cursor-pointer">
                        <img class="mb-3 w-28 h-28 rounded-full shadow-lg mx-auto" src="<?php $icon = $_SESSION['register']["pet"] === "1" ? "../assets/image/dog-icon.png" : "../assets/image/cat-icon.png";
                                                                                        echo ($icon) ?>" alt="cat icon">
                        <h1 class="text-lg text-gray-700"><?php echo ($_SESSION['register']["name"]) ?></h1>
                        <h3 class="text-sm text-gray-400 ">
                            <?php
                            $pet = $_SESSION['register']["pet"] === "1" ? "Cachorro" : "Gato";
                            $nasc = substr($_SESSION['register']["nasc"], 0, 4);
                            $age = 2022 - $nasc;
                            echo ($pet . " - " . $age . " anos");
                            ?>
                        </h3>
                        <div class="pt-6">
                            <div class="flex items-center justify-center gap-x-1.5 font-medium text-gray-500">
                                <span class="material-icons-outlined material-icons text-base text-gray-500">favorite</span>
                                <span class="text-xs text-gray-400">60 bpm</span>
                            </div>
                            <div class="flex items-center justify-center gap-x-1.5 font-medium text-gray-500">
                                <span class="material-icons-outlined material-icons text-base text-gray-500">lunch_dining</span>
                                <span class="text-xs text-gray-400"><?php echo ($_SESSION['register']["weight"] . " Kg") ?></span>
                            </div>
                            <div class="flex items-center justify-center gap-x-1.5 font-medium text-gray-500">
                                <span class="material-icons-outlined material-icons text-base text-gray-500">male</span>
                                <span class="text-xs text-gray-400"><?php $sex = $_SESSION['register']["sex"] === "1" ? "Fêmea" : "Macho";
                                                                    echo ($sex) ?></span>
                            </div>
                        </div>
                        <button class="bg-indigo-500 hover:bg-indigo-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Ver mais</button>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <a href="#" id="open-modal" class="flex flex-col items-center justify-center">
                    <span class="material-icons-outlined material-icons text-5xl text-gray-600">
                        add_circle
                    </span>
                    Adicionar pet
                </a>
            </div>
        </div>
    </div>

    <!-- modal -->
    <div class="align-center">
        <dialog id="modal">
            <div class="flex items-center justify-end cursor-pointer">
                <span id="close-modal" class="material-icons-outlined material-icons"> close </span>
            </div>
            <div class="flex flex-col items-center justify-center pt-4 pb-8">
                <div class="w-96">
                    <h1 class="text-lg font-medium uppercase text-gray-700 pb-4">Você atingiu o limite de cadastros</h1>
                    <p class="text-sm text-gray-400">Para adicionar um novo pet é necessario remover o último cadastro.</p>
                </div>                
            </div>
            <div>
            <a href="/src/screens/home.php" class="bg-indigo-500 hover:bg-indigo-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">Remover</a>
            </div>
        </dialog>
    </div>

    <script type="module" src="../js/index.js"></script>
</body>

</html>