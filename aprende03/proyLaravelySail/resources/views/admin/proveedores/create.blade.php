<x-app-layout>
    <x-slot name="header">
        Administración de artículos
    </x-slot>

    <div class="m-4 p-8 rounded shadow bg-amber-200 border-4 border-b-gray-600">
        PROVEEDORES:
        <br><br>
        Empresas:
        <br><br>
        <table class="table-striped">
            <thead>
            <tr>
                <td >NIF</td>
                <td >Razón Social</td>
                <td class="w-fit">Denominación</td>
                <td class="w-fit">Comentario</td>
            </tr>
            </thead>
            <tbody>
            @foreach($proveedores as $proveedor)
                @if($proveedor -> autonomo)
                    <tr>
                        <td>{{ $proveedor -> nif }}</td>
                        <td>{{ $proveedor -> razonSocial }}</td>
                        <td>{{ $proveedor -> denominacion }}</td>
                        <td>{{ $proveedor -> comentario }}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
        <br>
        Autónomos:
        <br><br>
        <table class="table-striped">
            <thead>
            <tr>
                <td class="w-fit">NIF</td>
                <td class="w-fit">Nombre y Apellidos</td>
                <td class="w-fit">Denominación</td>
                <td class="w-fit">Comentario</td>
            </tr>
            </thead>
            <tbody>
            @foreach($proveedores as $proveedor)
                @if(!($proveedor -> autonomo))
                    <tr>
                        <td>{{ $proveedor -> nif }}</td>
                        <td>{{ $proveedor -> nombre }} {{ $proveedor -> apellido1 }} {{ $proveedor -> apellido2 }}</td>
                        <td>{{ $proveedor -> denominacion }}</td>
                        <td>{{ $proveedor -> comentario }}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
