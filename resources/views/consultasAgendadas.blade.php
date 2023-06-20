<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Consultas Agendadas') }}
        </h2>
    </x-slot>
    <table>
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Fone</td>
            <td>Mensagem</td>
            <td>Data</td>
        </thead>
    </table>
    <tbody>
        <?php
            foreach ($lista as $linha)
             {
                echo "<tr>".
                        "<td>" .$linha['id'];. "/<td>"
                        "<td>" .$linha['nome'];. "/<td>"
                        "<td>" .$linha['email'];. "/<td>"
                        "<td>" .$linha['fone'];. "/<td>"
                        "<td>" .$linha['mensagem'];. "/<td>"
                        "<td>" .$linha['data'];. "/<td>"
                     "</tr>";

            }
    </tbody>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            </div>
        </div>
    </div>
</x-app-layout>
