<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 w-full overflow-x-auto">
        <section style="max-width: 90rem" class="mx-auto pb-12 px-4 sm:px-6 lg:px-8 ">
            <div class="py-12">
                <div class="bg-gray-100 text-gray-900 rounded-xl">
                    <table class="max-w-[90em] table-auto w-full">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
                                <th class="py-3 px-6 text-left">ID</th>
                                <th class="py-3 px-6 text-left">Adicionar/Remover</th>
                                <th class="py-3 px-6 text-center">Transportadora</th>
                                <th class="py-3 px-6 text-center">Filial</th>
                                <th class="py-3 px-6 text-center">Email</th>
                                <th class="py-3 px-6 text-center">Nome</th>
                                <th class="py-3 px-6 text-center">Número</th>
                                <th class="py-3 px-6 text-center">Status</th>
                                <th class="py-3 px-6 text-center">Edição</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($item as $items)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="font-medium">{{ $items->id }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span>{{ $items->add_remove }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            {{ $items->transportadora }}
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span class=" py-1 px-3 rounded-full text-xs">{{ $items->filial }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span class=" py-1 px-3 rounded-full text-xs">{{ $items->email }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span class=" py-1 px-3 rounded-full text-xs">{{ $items->nome }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span class=" py-1 px-3 rounded-full text-xs">{{ $items->numero }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span class=" py-1 px-3 rounded-full text-xs">{{ $items->status }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <?php
                                            echo '<button class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110" 
                                                                                                                                        type="button" id="myBtnUpdate" onclick="inUpdate(' .
                                                $items->id .
                                                '), editBook(' .
                                                $items->id .
                                                ')">
                                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                                                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                                                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                                                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                                                                                                stroke-width="2"
                                                                                                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                                                                                        </svg>
                                                                                                                                    </button>';
                                            ?>
                                            <?php
                                            echo '
                                                <button class="w-4 mr-2 cursor-pointer transform hover:text-purple-500 hover:scale-110" 
                                                    type="button" onclick="inUpdate(' .$items->id .'), editContato(' .$items->id .')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </button>';
                                            ?>
                                            <?php
                                            echo '
                                                                                                                                    <button class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110" 
                                                                                                                                        type="button" onclick="inDelete(' .
                                                $items->id .
                                                ')">
                                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                                                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                                                                                                stroke-width="2"
                                                                                                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                                                                                        </svg>
                                                                                                                                    </button>';
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Modal update --}}
                    <div id="myModalUpdate" class="fixed  inset-0 bg-opacity-50 h-screen w-full overflow-y-auto">
                        <!-- Modal content updatebook -->
                        <div
                            class="modal-contentUpdate absolute bg-white md:left-[50%] left-1/2 md:top-[48%] 
                                    top-1/2 md:translate-y-[-50%] md:translate-x-[-50%] w-auto h-auto translate-y-[-40%] translate-x-[-41%]">
                            <span class="close cursor-pointer mr-4">&times;</span>
                            <div class="modal-headerUpdate bg-white w-full text-black">

                                <div class="px-4 pt-4 lg:pt-10 w-full">
                                    <form action="#" method="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="relative z-0 w-full mb-4 mt-10 group ">
                                            <input id="add_remove" value="" type="text" name="add_remove"
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                placeholder=" ">
                                            <label for=""
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Adicionar/Remover</label>
                                        </div>
                                        <div class="relative z-0 w-full mb-4 group">
                                            <input id="nome" type="text" name="nome" id=""
                                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                placeholder=" ">
                                            <label for=""
                                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome</label>
                                        </div>

                                        <div class="flex flex-row gap-10">
                                            <div class="relative z-0 w-full mb-4 group">
                                                <input id="filial" type="text" name="filial" id=""
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" ">
                                                <label for=""
                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Filial</label>
                                            </div>
                                            <div class="relative z-0 w-full mb-6 group">
                                                <input id="email" type="text" name="email" id=""
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" ">
                                                <label for=""
                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                                            </div>

                                        </div>
                                        <div class="flex flex-row gap-10">
                                            <div class="relative z-0 w-full mb-6 group">
                                                <input id="transportadora" type="text" name="transportadora"
                                                    id=""
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" ">
                                                <label for=""
                                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Transportadora</label>
                                            </div>
                                            <div class="relative z-0 w-full mb-6 group">
                                                <input id="numero" type="" name="numero"
                                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                            border-gray-500 focus:border-blue-500 text-black focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                    placeholder=" ">
                                                <label for=""
                                                    class="clean peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Número</label>
                                                <span id="validade_edition"
                                                    class="hidden font-semibold text-red-600 text-[14px]">Insira apenas
                                                    números !</span>
                                            </div>
                                        </div>
                                        <div
                                            class="flex justify-items-center items-center justify-center md:gap-10 w-full border border-2 rounded-xl px-2 py-4">
                                            <div class="relative w-full">
                                                {{-- <span class="text-center text-md md:text-[16px] text-gray-400 ">
                                                    Status
                                                </span> --}}
                                                <div class="flex flex-row items-center justify-center gap-6">
                                                    <div>
                                                        <label class="cursor-pointer rounded-md px-2 py-2 my-2 bg-yellow-200 hover:bg-yellow-500">
                                                            <input type="radio" name="status" id="status_pendente"
                                                            value="Pendente" class=""/>
                                                            <i class="pl-2">Pendente</i>
                                                        </label>
                                                    </div>

                                                    <div>
                                                        <label class="cursor-pointer rounded-md px-2 py-2 my-2 bg-blue-200 hover:bg-blue-500">
                                                            <input type="radio" name="status" id="status_andamento"
                                                            value="Andamento" class=""/>
                                                            <i class="pl-2">Andamento</i>
                                                        </label>
                                                    </div>

                                                    <div>
                                                        <label class="cursor-pointer rounded-md px-2 py-2 my-2 bg-green-200 hover:bg-green-500">
                                                            <input type="radio" name="status" id="status_concluido"
                                                            value="Concluído" class=""/>
                                                            <i class="pl-2">Concluído</i>
                                                        </label>
                                                    </div>

                                                    <div>
                                                        <label class="cursor-pointer rounded-md px-2 py-2 my-2 bg-red-200 hover:bg-red-500">
                                                            <input type="radio" name="status" id="status_descartado"
                                                            value="Descartado" class=""/>
                                                            <i class="pl-2">Descartado</i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="space-x-4 py-4 text-right">
                                            <button onclick="inUpdate()" type="button"
                                                class="inline-block text-white focus:outline-none font-medium rounded-lg text-sm w-auto sm:w-1/5 px-3 py-2.5 text-center bg-gray-600 hover:bg-gray-700 focus:ring-white-800">Fechar</button>
                                            <button onclick="actionUpdate()" type="button"
                                                class="inline-block text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-auto sm:w-1/5 px-3 py-2.5 text-center  hover:bg-blue-700 focus:ring-blue-800">Editar</button>
                                        </div>
                                        <input class="hidden" type="text" value="" id="edit_id"
                                            name="id">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
<style>
    .modal-contentUpdate {
        background-color: #fefefe;
        border: 1px solid #888;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s;
    }
</style>
<script>
    function edit_item() {
        console.log('ok');
        swal({
            title: 'Input email address',
            input: 'text',
            inputLabel: 'Your email address',
            inputPlaceholder: 'Enter your email address'
            // inputValidator: (value) => {
            //     if (!value) {
            //         return 'You need to write something!'
            //     }
            // }
        })
    }

    //modal update

    var modalUpdate = document.getElementById("myModalUpdate");
    var btnUpdate = document.getElementById("myBtnUpdate");

    window.onclick = function(event) {
        if (event.target == modalUpdate) {
            modalUpdate.style.display = "none";
        }
    }

    btnUpdate.onclick = function() {
        modalUpdate.style.display = "block";
    }

    function inUpdate() {
        if (modalUpdate.style.display == "block") {
            modalUpdate.style.display = "none";
        } else {
            modalUpdate.style.display = "block";
        }
    }

    function getContato($id) {

        const options = {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            },
        };
        return fetch(`{{ config('app.url') }}/contato/edit/${$id}`, options)
            .then((data) => data.json())
            .catch((error) => console.log(error));
    }

    async function editContato($id) {
        const contato = await getContato($id);
        
        for (var i in contato) {
            document.querySelector("#add_remove").value = contato.add_remove;
            document.querySelector("#nome").value = contato.nome;
            document.querySelector("#filial").value = contato.filial;
            document.querySelector("#email").value = contato.email;
            document.querySelector("#transportadora").value = contato.transportadora;
            document.querySelector("#numero").value = contato.numero;
            
            //status
            const status_concluido = document.querySelector("#status_concluido");
            const status_andamento = document.querySelector("#status_andamento");
            const status_pendente = document.querySelector("#status_pendente");
            const status_descartado = document.querySelector("#status_descartado");
            
            switch (contato.status) {
                case "Pendente" :
                    status_pendente.checked = true;
                    break;
                case "Concluído" :
                    status_concluido.checked = true;
                    break;
                case "Andamento" :
                    status_andamento.checked = true;
                    break;
                case "Descartado" :
                    status_descartado.checked = true;
                    break;
            }
            // document.querySelector("#edit_isbn").value = contato.isbn;
        }
    }
</script>
