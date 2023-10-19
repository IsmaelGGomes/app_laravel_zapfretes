<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Contato</title>
</head>

<body>
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <div class="flex flex-col">
                <img class="" src="/images/login/logo_zapfrete.png" alt="">
                <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
                    Informe sua demanda<br />
                    Nossa equipe de suporte entrara em contato !
                </p>
            </div>

            <form action="" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                
                <?php echo csrf_field(); ?>
                <div>
                    <div class="border-b-2 py-2 relative flex flex-col justify-center w-full items-center">
                        <span class="ml-2 font-semibold text-xl">Adicionar ou remover ?</span>
                        <div class="mt-4 flex flex-row gap-6">
                            <div class="">
                                <input type="radio" name="add_remove" class="" placeholder="Enter " />
                                <span>Adicionar</span>
                            </div>
                            <div class="">
                                <input type="radio" name="add_remove" class="" placeholder="Enter " />
                                <span>Remover</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="relative">
                        <span class="ml-2">Nome</span>
                        <input name="nome" type="" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-md"
                            placeholder="Digite o nome do colaborador" />
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <span class="ml-2">Número</span>
                        <input name="nome" type="" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-md"
                            placeholder="Digite o número do colaborador" />
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <span class="ml-2">Transportadora</span>
                        <input name="transportadora" type="" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-md"
                            placeholder="Digite a transportadora" />
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <span class="ml-2">Filial</span>
                        <input name="filial" type="" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-md"
                            placeholder="Digite a filial" />
                    </div>
                </div>
                <div style="margin-bottom: 50px" class="">
                    <div class="relative">
                        <span class="ml-2">Email</span>
                        <input name="email" type="" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-md"
                            placeholder="Digite o e-mail" />
                    </div>
                </div>

                <button type="submit"
                    class="block w-full rounded-lg bg-[#202356] px-5 py-3 text-md font-medium text-white">
                    Enviar
                </button>

                <!-- <p class="text-center text-sm text-gray-500">
                    No account?
                    <a class="underline" href="">Sign up</a>
                </p> -->
            </form>
        </div>
    </div>
</body>

</html>
<?php /**PATH /var/www/html/resources/views/layouts/contacts.blade.php ENDPATH**/ ?>