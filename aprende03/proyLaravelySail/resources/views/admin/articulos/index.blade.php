<x-app-layout>
    <x-slot name="header">
        Administración de artículos
    </x-slot>
    <a href="{{ route('admin.articulos.create') }}"
       class="border-2 border-amber-800"> Nuevo </a>
    <div class="m-4 p-8 rounded shadow bg-amber-200 border-4 border-b-gray-600">
        ARTICULOS:
        <table>
            <thead>
                <tr>
                    <td class="w-fit">Referencia</td>
                    <td class="w-full">Descripción</td>
                    <td class="w-fit">Precio</td>
                </tr>
            </thead>
            <tbody>
            @foreach($articulos as $articulo)
                <tr>
                    <td>{{ $articulo -> ref }}</td>
                    <td>{{ $articulo -> descripcion }}</td>
                    <td>{{ $articulo -> precio }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        </ul>
    </div>
</x-app-layout>
