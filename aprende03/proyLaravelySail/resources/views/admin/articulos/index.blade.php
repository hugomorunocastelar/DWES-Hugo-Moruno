<x-app-layout>
    <x-slot name="header">
        Administración de artículos
    </x-slot>
    <div class="m-4 p-8 rounded shadow bg-amber-200 border-4 border-b-gray-600">
        ARTICULOS:
        <ul>
            @foreach($articulos as $articulo)
                <li> {{ $articulo -> ref }} - {{ $articulo -> descripcion }}</li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
