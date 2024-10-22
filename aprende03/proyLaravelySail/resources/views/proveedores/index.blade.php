<x-guest-layout>
    <x-slot name="header">
        Página de proveedores:
    </x-slot>
    <div class="m-4 p-8 rounded shadow bg-amber-200 border-4 border-b-gray-600">
        PROVEEDORES:
        <ul>
            @foreach($proveedores as $proveedor)
                <p> {{ $proveedor -> nif }} --
                    {{ $proveedor -> nombre }}
                    {{ $proveedor -> apellido1 }}
                    {{ $proveedor -> apeliido2 }}
                    {{ $proveedor -> razonSocial }}</p>
            @endforeach
        </ul>
    </div>
</x-guest-layout>
