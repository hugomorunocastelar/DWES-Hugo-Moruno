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

<a href="?option=crear">Nuevo</a>
<table style="width: 100%">
    <thead>
    <th style="font-weight: bold">Matrícula</th>
    <th style="font-weight: bold">Modelo</th>
    <th style="font-weight: bold">Fecha Inscrip.</th>
    <th></th>
    </thead>
    <tbody>
    <?php foreach ($data['trafico'] as $trafico) { ?>
        <tr>
            <td> <?= $trafico['matricula'] ?></td>
            <td> <?= $trafico['modelo'] ?></td>
            <td>
                <?= $trafico['fecha_inscrip']?date('d/m/Y',strtotime($trafico['fecha_inscrip'])):'' ?>
            </td>
            <td>
                <a href="?option=show&id=<?=$trafico['id']?>">ver</a> &nbsp;
                <a href="?option=edit&id=<?=$trafico['id']?>">editar</a> &nbsp;
                <a href="?option=delete&id=<?=$trafico['id']?>">borrar</a> &nbsp;
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>


</body>
</html>