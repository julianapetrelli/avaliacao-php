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
                        <img class="mb-3 w-28 h-28 rounded-full shadow-lg mx-auto" src="../assets/image/dog-icon.png" alt="dog icon">
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
                        <form action="" method="post">
                            <input class="bg-indigo-500 hover:bg-indigo-600 px-8 py-2 mt-8 rounded-3xl text-gray-100 font-semibold uppercase tracking-wide" type="button" value="Ver mais">
                        </form>
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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="flex flex-col justify-center items-center py-8">
                    <div class="flex items-center justify-center">
                        <img class="mb-8 w-44 h-44 rounded-full border-solid border-2 border-gray-200 " src="/src/assets/image/cat-scratches.gif" alt="dog icon">
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <label for="" class="flex justify-center mb-1 font-medium">Seu pet é</label>
                        <select type="text" name="pet" class="rounded-lg pl-3 pr-3 h-10 bg-slate-100 w-64 text-slate-500 focus:outline-none focus:ring focus:border-pink-300">
                            <option value="1" name="cat">Cachorro</option>
                            <option value="2" name="dog">Gato</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center gap-y-6">
                    <div class="flex justify-center items-center gap-x-6">
                        <div>
                            <label for="" class="flex justify-start mb-1 font-medium">Nome</label>
                            <input type="text" name="name" placeholder="Digite o nome do seu pet" class="rounded-lg pl-3 h-10 bg-slate-100 w-64 placeholder:text-slate-300 focus:outline-none focus:ring focus:border-pink-300">
                        </div>
                        <div>
                            <label for="" class="flex justify-start mb-1 font-medium">Peso(Kg)</label>
                            <input type="text" name="weight" placeholder="Digite o peso do seu pet" class="rounded-lg pl-3 h-10 bg-slate-100 w-64 placeholder:text-slate-300 focus:outline-none focus:ring focus:border-pink-300">
                        </div>
                    </div>
                    <div class="flex justify-center items-center gap-x-6">
                        <div>
                            <label for="" class="flex justify-start mb-1 font-medium">Data de nascimento</label>
                            <input type="date" name="nasc" class="rounded-lg pl-3 h-10 bg-slate-100 w-64 text-slate-500 focus:ring focus:border-pink-300">
                        </div>
                        <div>   
                            <label for="" class="flex justify-start mb-1 font-medium">Sexo</label>
                            <select type="text" name="sex" class="rounded-lg pl-3 pr-3 h-10 bg-slate-100 w-64 text-slate-500 focus:outline-none focus:ring focus:border-pink-300">
                                <option value="1" name="fem">Feminino</option>
                                <option value="2" name="masc">Masculino</option>
                            </select>
                        </div>  
                    </div>
                </div>
                <div class="flex flex-col justify-start items-center mt-6">
                    <div class="w-full">
                        <label for="" class="flex justify-start mb-1 font-medium">Digite o código que se encontra na coleira do seu pet</label>
                        <input type="text" name="code" placeholder="Digite o código na coleira" class="w-full rounded-lg pl-3 h-10 bg-slate-100 w-64 placeholder:text-slate-300 focus:outline-none focus:ring focus:border-pink-300">
                    </div>
                </div>
                <div>
                    <input type="submit" value="Cadastrar" class="bg-indigo-500 hover:bg-indigo-600 px-8 py-2 mt-8 w-full rounded-3xl text-gray-100 font-semibold uppercase tracking-wide">
                </div>
            </form>
        </dialog>
    </div>

    <script type="module" src="../js/index.js"></script>
</body>

</html>