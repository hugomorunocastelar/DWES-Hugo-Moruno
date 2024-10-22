<x-app-layout>
    <x-slot name="header">
        Administración de artículos
    </x-slot>

    <div class="m-4 p-8 rounded shadow bg-amber-200 border-4 border-b-gray-600">
        PROVEEDORES:
        <table>
            <thead>
            <tr>
                <td class="w-fit">NIF</td>
                <td class="w-fit">Razón Social</td>
                <td class="w-fit">Nombre y Apellidos</td>
            </tr>
            </thead>
            <tbody>
            @foreach($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor -> nif }}</td>
                    <td>{{ $proveedor -> razonSocial }}</td>
                    <td>{{ $proveedor -> nombre }}{{ $proveedor -> apellido1 }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        </ul>
    </div>
</x-app-layout>
