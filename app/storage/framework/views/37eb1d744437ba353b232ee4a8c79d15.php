<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Contato</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <div class="flex flex-col">
                <img class="" src="/images/login/logo_zapfrete.png" alt="">
                <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
                    Informe sua demanda<br />
                    Nossa equipe de suporte entrara em contato !
                </p>
            </div>

            <form action="/dashboard" method="POST" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                
                <?php echo csrf_field(); ?>
                <div>
                    <div class="border-b-2 py-2 relative flex flex-col justify-center w-full items-center">
                        <span class="ml-2 font-semibold text-xl">Adicionar ou remover ?</span>
                        <div class="mt-4 flex flex-row gap-6">
                            <div class="">
                                <input type="radio" name="add_remove" value="Adicionar" class="" />
                                <span>Adicionar</span>
                            </div>
                            <div class="">
                                <input type="radio" name="add_remove" value="Remover" class="" />
                                <span>Remover</span>
                            </div>
                        </div>
                        <?php $__errorArgs = ['add_remove'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <label class="text-red-500 font-semibold">Selecione uma opção !</label>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div>
                    <div class="relative">
                        <span class="ml-2">Nome</span>
                        <input name="nome" type="" value="<?php echo e(old('nome')); ?>"
                            class="<?php echo e($errors->first('nome') ? 'w-full rounded-lg border-2 border-red-500 p-4 text-sm shadow-md' : 'w-full rounded-lg  p-4 pe-12 text-sm shadow-md'); ?>"
                            placeholder="Digite o nome do colaborador" />
                        <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <label class="text-red-500 font-semibold">Preencha esse campo !</label>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <span class="ml-2">Número</span>
                        <input id="telefone_format" minlength="2" value="<?php echo e(old('numero')); ?>" maxlength="14" name="numero" type=""
                            class="<?php echo e($errors->first('numero') ? 'w-full rounded-lg border-2 border-red-500 p-4 text-sm shadow-md' : 'w-full rounded-lg  p-4 pe-12 text-sm shadow-md'); ?>"
                            placeholder="Exemplo: (66)999999999" />
                        <?php $__errorArgs = ['numero'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <label class="text-red-500 font-semibold">Preencha esse campo !</label>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <span class="ml-2">Transportadora</span>
                        <input name="transportadora" type="" value="<?php echo e(old('transportadora')); ?>"
                            class="<?php echo e($errors->first('transportadora') ? 'w-full rounded-lg border-2 border-red-500 p-4 text-sm shadow-md' : 'w-full rounded-lg  p-4 pe-12 text-sm shadow-md'); ?>"
                            placeholder="Digite a transportadora" />
                        <?php $__errorArgs = ['transportadora'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <label class="text-red-500 font-semibold">Preencha esse campo !</label>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div>
                    <div class="relative">
                        <span class="ml-2">Filial</span>
                        <input name="filial" type="" value="<?php echo e(old('filial')); ?>"
                            class="<?php echo e($errors->first('filial') ? 'w-full rounded-lg border-2 border-red-500 p-4 text-sm shadow-md' : 'w-full rounded-lg  p-4 pe-12 text-sm shadow-md'); ?>"
                            placeholder="Digite a filial" />
                        <?php $__errorArgs = ['filial'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <label class="text-red-500 font-semibold">Preencha esse campo !</label>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div style="margin-bottom: 50px" class="">
                    <div class="relative">
                        <span class="ml-2">Email</span>
                        <input name="email" type="email" value="<?php echo e(old('email')); ?>"
                            class="<?php echo e($errors->first('email') ? 'w-full rounded-lg border-2 border-red-500 p-4 text-sm shadow-md' : 'w-full rounded-lg  border-none p-4 pe-12 text-sm shadow-md'); ?>"
                            placeholder="Digite o e-mail" />
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <label class="text-red-500 font-semibold">Preencha esse campo !</label>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <button onclick="validade_numero()" type="submit"
                    class="block w-full rounded-lg bg-[#202356] px-5 py-3 text-md font-medium text-white">
                    Enviar
                </button>

                <?php if(Session::has('message')): ?>
                    <script>
                        swal("Enviado com sucesso",'Nossa equipe entrará em contato', {
                            button:true,
                            icon: 'success',
                            button: "OK",
                        });
                    </script>
                <?php endif; ?>

            </form>
        </div>
    </div>
</body>

</html>

<script>
    const input = document.getElementById("telefone_format");

    input.addEventListener("keyup", formatarTelefone);

    function formatarTelefone(e) {
        var v = e.target.value.replace(/\D/g, "");

        v = v.replace(/^(\d\d)(\d)/g, "($1)$2");

        v = v.replace(/(\d{5})(\d)/, "$1-$2");

        e.target.value = v;
    }

    // function validade_numero() {
    //     const input_numero = document.getElementById("telefone_format");

    //     if (input_numero.value.length < 14) {
    //         console.log('sssssss');
    //     } else {
    //         console.log('aaaa');
    //     }


    // }
</script>
<?php /**PATH /var/www/html/resources/views/layouts/contacts.blade.php ENDPATH**/ ?>