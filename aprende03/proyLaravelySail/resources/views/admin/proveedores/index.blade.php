<x-app-layout>
    <x-slot name="header">
        Administración de artículos
    </x-slot>
    <a href="{{ route('admin.proveedores.create') }}"
       class="border-2 border-amber-800"> Nuevo </a>

    <div class="m-4 p-8 rounded shadow bg-amber-200 border-4 border-b-gray-600">
        PROVEEDORES:
        <br><br>
        Empresas:
        <br><br>
        <table class="table-auto border-separate border-spacing-4 w-full border border-gray-400">
            <thead class="bg-gray-100">
            <tr>
                <th class="w-1/6 border p-2">NIF</th>
                <th class="w-1/6 border p-2">Razón Social</th>
                <th class="w-1/6 border p-2">Denominación</th>
                <th class="w-3/6 border p-2">Comentario</th>
            </tr>
            </thead>
            <tbody>
            @foreach($proveedores as $proveedor)
                @if($proveedor->autonomo)
                    <tr>
                        <td class="border p-2">{{ $proveedor->nif }}</td>
                        <td class="border p-2">{{ $proveedor->razonSocial }}</td>
                        <td class="border p-2">{{ $proveedor->denominacion }}</td>
                        <td class="border p-2">{{ $proveedor->comentario }}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>

        <br>
        Autónomos:
        <br><br>
        <table class="table-auto border-separate border-spacing-4 w-full border border-gray-400">
            <thead class="bg-gray-100">
            <tr>
                <th class="w-1/4 border p-2">NIF</th>
                <th class="w-1/4 border p-2">Nombre y Apellidos</th>
                <th class="w-1/4 border p-2">Denominación</th>
                <th class="w-1/4 border p-2">Comentario</th>
            </tr>
            </thead>
            <tbody>
            @foreach($proveedores as $proveedor)
                @if(!($proveedor->autonomo))
                    <tr>
                        <td class="border p-2">{{ $proveedor->nif }}</td>
                        <td class="border p-2">{{ $proveedor->nombre }} {{ $proveedor->apellido1 }} {{ $proveedor->apellido2 }}</td>
                        <td class="border p-2">{{ $proveedor->denominacion }}</td>
                        <td class="border p-2">{{ $proveedor->comentario }}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
