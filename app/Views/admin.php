<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?? 'UniReport'; ?>
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/4a37dd3233.js" crossorigin="anonymous"></script>

</head>

<body class="bg-slate-300">
    <header
        class="grid grid-cols-3 sm:px-10 items-center p-4 text-white bg-gradient-to-l from-blue-950 to-blue-800 mb-20">
        <img src="../../public/assets/img/horizontal_lite_svg.svg" alt="Logo UniReport"
            class="w-24 sm:w-36 justify-self-start">

        <nav class="flex gap-6 min-w-max justify-self-center">
            <a href="<?= base_url('') ?>" class="">Início</a>
            <a href="<?= base_url('admin') ?>" class="">Admin</a>
        </nav>

        <a href="" class="py-2 px-4 bg-blue-900 rounded-lg justify-self-end">login</a>
    </header>
    <div class="container mx-auto px-2">
        <div
            class="mx-auto bg-slate-200 rounded-3xl max-w-md py-14 flex flex-col items-center justify-between gap-10 shadow-md px-1 sm:px-4">


            <div class="flex flex-col bg-white w-full p-4 rounded-3xl shadow-xl">
                <p class="text-xl">Registros</p>
                <table class="items-center table-fixed bg-transparent w-full border-collapse">
                    <thead>
                        <tr>
                            <th
                                class="w-2/6 bg-blueGray-50 text-blueGray-500  border border-solid border-blueGray-100 py-3 text-xs uppercase border-x-0 whitespace-nowrap font-semibold text-left">
                                PROBLEMA
                            </th>
                            <th
                                class="text-center w-1/6 bg-blueGray-50 text-blueGray-500  border border-solid border-blueGray-100 py-3 text-xs uppercase border-x-0 whitespace-nowrap font-semibold">
                                SALA
                            </th>
                            <th
                                class="hidden sm:block text-center bg-blueGray-50 text-blueGray-500  border border-solid border-blueGray-100 py-3 text-xs uppercase border-x-0 whitespace-nowrap font-semibold">
                                MÍDIA
                            </th>
                            <th
                                class="w-2/6 bg-blueGray-50 text-blueGray-500  border border-solid border-blueGray-100 py-3 text-xs uppercase border-x-0 whitespace-nowrap font-semibold text-center">
                                AÇÕES
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($report as $key => $data): ?>
                            <tr>
                                <th
                                    class="w-2/5 border-t-0 px-0 py-4 align-middle border-x-0 text-xs h-4 text-left text-blueGray-700 truncate pe-1">
                                    <?= $data['mensagem'] ?>
                                </th>
                                <td
                                    class="hidden sm:block text-center border-t-0 px-0 align-middle border-x-0 text-xs whitespace-nowrap p-4 ">
                                    <?= $data['sala'] ?>
                                </td>
                                <td
                                    class="text-center border-t-0 px-0 align-middle border-x-0 text-xs whitespace-nowrap p-4">
                                    <i class="fa-regular fa-circle-play"></i>
                                </td>
                                <td class="border-t-0 text-center px-0 align-middle border-x-0 text-xs whitespace-nowrap">
                                    <a href="<?= base_url('admin/delete/' . $data['id']); ?>"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-1 md:py-1 rounded w-1/2 sm:w-3/5 delete-link"
                                        onclick="return confirmDelete();">Concluído</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>

                </table>
                <div class="">
                    <?php echo $pager->links(); ?>
                </div>

            </div>
        </div>
    </div>
    <script>
        function confirmDelete() {
            return confirm("Tem certeza que deseja deletar este registro?");
        }
    </script>