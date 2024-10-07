<!doctype html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<form action="?option=store" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <div class="container-form">
        <div class="items-form">
            <label for="matricula">Matrícula</label>
            <div class="items-form-input">
                <input id="matricula" type="text" name="data[matricula]" value="<?= $data['matricula'] ?>" placeholder="Matrícula" <?= $data['readonly'] ?? '' ?>>
            </div>
        </div>
        <div class="items-form">
            <label for="modelo">Modelo:</label>
            <input id="modelo" type="text" name="data[modelo]" value="<?= $data['modelo'] ?>">
        </div>
        <div class="items-form">
            <label for="fechaInscrip">Fecha nacimiento:</label>
            <input id="fechaInscrip" type="date" name="data[fecha_inscrip]" value="<?= $data['fecha_inscrip'] ?>">
        </div>
        <div class="items-form">
            <label for="nombre">Imagen:</label>
            <input type="file" id="imagen" name="data[imagen]">
            <img src="<?=$data['imagen'] ?>" >
        </div>
        <div>
            <?php if (!isset($data['readonly'])) { ?>
                <input type="submit" value="Guardar" <?= $data['readonly'] ?? '' ?>>
            <?php } ?>
        </div>
    </div>
</form>


</body>
</html>
