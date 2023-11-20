<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'UniReport'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/4a37dd3233.js" crossorigin="anonymous"></script>

</head>

<body class="bg-slate-300">
    <header class="grid grid-cols-3 sm:px-10 items-center p-4 text-white bg-gradient-to-l from-blue-950 to-blue-800 mb-20">
        <img src="assets/img/horizontal_lite_svg.svg" alt="Logo UniReport" class="w-24 sm:w-36 justify-self-start">

        <nav class="flex gap-6 min-w-max justify-self-center">
            <a href="<?= url_to('home'); ?>" class="">Início</a>
            <a href="<?= url_to('admin'); ?>" class="">Admin</a>
        </nav>

        <a href="" class="py-2 px-4 bg-blue-900 rounded-lg justify-self-end">login</a>
    </header>