@php
    use App\Models\Articulo;
    $articulos = Articulo::all();
@endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

    @vite(['resources/css/app.css', ('resources/js/app.js')])
</head>
<body>

<div class="m-4 p-8 rounded shadow bg-amber-200 border-4 border-b-gray-600">
ARTICULOS:
@foreach($articulos as $articulo)
    <p> {{ $articulo -> ref }} - {{ $articulo -> descripción }}</p>
@endforeach
</div>
</body>
</html>
