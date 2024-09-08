<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar Cliente</title>
</head>
<body>

<div style="height: 600px; width: 400px; margin: auto;">
    <h1 style="text-align: center;">Editar Cliente</h1>
    <hr>
    <?= form_open('actualizar_cliente/' . $cliente['cliente_id']) ?>

    <div class="form-group">
        <?= form_label('Nombre', 'nombre') ?>
        <?= form_input([
            'name' => 'nombre',
            'id' => 'nombre',
            'value' => set_value('nombre', $cliente['nombre']),
            'class' => 'form-control'
        ]) ?>
    </div>

    <div class="form-group">
        <?= form_label('Apellido', 'apellido') ?>
        <?= form_input([
            'name' => 'apellido',
            'id' => 'apellido',
            'value' => set_value('apellido', $cliente['apellido']),
            'class' => 'form-control'
        ]) ?>
    </div>

    <div class="form-group">
        <?= form_label('Dirección', 'direccion') ?>
        <?= form_input([
            'name' => 'direccion',
            'id' => 'direccion',
            'value' => set_value('direccion', $cliente['direccion']),
            'class' => 'form-control'
        ]) ?>
    </div>

    <div class="form-group">
        <?= form_label('NIT', 'nit') ?>
        <?= form_input([
            'name' => 'nit',
            'id' => 'nit',
            'value' => set_value('nit', $cliente['nit']),
            'class' => 'form-control'
        ]) ?>
    </div>

    <div class="form-group">
        <?= form_label('Correo Electrónico', 'correo_electronico') ?>
        <?= form_input([
            'name' => 'correo_electronico',
            'id' => 'correo_electronico',
            'value' => set_value('correo_electronico', $cliente['correo_electronico']),
            'class' => 'form-control'
        ]) ?>
    </div>

    <div class="form-group">
        <?= form_label('Teléfono Móvil', 'telefono_movil') ?>
        <?= form_input([
            'name' => 'telefono_movil',
            'id' => 'telefono_movil',
            'value' => set_value('telefono_movil', $cliente['telefono_movil']),
            'class' => 'form-control'
        ]) ?>
    </div>
    <br>
    <?= form_submit('submit', 'Actualizar', ['class' => 'btn btn-outline-success']) ?>
    <?= form_close() ?>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>