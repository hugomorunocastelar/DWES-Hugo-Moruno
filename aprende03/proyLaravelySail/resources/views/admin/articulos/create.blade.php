<x-app-layout>
    <x-slot name="header">
        Administración de artículos
    </x-slot>

    <div class="m-4 p-8 rounded shadow bg-amber-200 border-4 border-b-gray-600">
        ARTICULOS:
        <table>
            <thead>
                <tr>
                    <td>Referencia</td>
                    <td>Descripción</td>
                    <td>Precio</td>
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
