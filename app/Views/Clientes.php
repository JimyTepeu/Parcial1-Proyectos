<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Clientes</title>
</head>
<body>


    <div style="height: 600px; width: 1000px; margin: auto;">
    <h1 style="text-align: center;">Clientes</h1>
    <hr>
    <?php if (session()->getFlashdata('status')): ?>
        <div class="alert alert-info">
            <?= session()->getFlashdata('status') ?>
        </div>
    <?php endif; ?>

    <!-- Boton para crear cliente -->

    <a class="btn btn-outline-success" href="<?=base_url('crear_cliente')?>">Agregar Nuevo Cliente</a>
    
    <!-- Tabla para mostrar datos -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Cliente ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>NIT</th>
                <th>Correo Electronico</th>
                <th>Telefono Movil</th>
                <th>Dirección</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($clientes as $datos){
            ?>
            <tr>
                <td> <?=$datos['cliente_id']?> </td>
                <td> <?=$datos['nombre']?> </td>
                <td> <?=$datos['apellido']?> </td>
                <td> <?=$datos['nit']?> </td>
                <td> <?=$datos['correo_electronico']?> </td>
                <td> <?=$datos['telefono_movil']?> </td>
                <td> <?=$datos['direccion']?> </td>

                <td>
                    <a class="btn btn-outline-success" href="<?= base_url('editar_cliente/' . $datos['cliente_id']) ?>">Editar</a>
                    <a class="btn btn-outline-success" href="<?= base_url('eliminar_cliente/'.$datos['cliente_id']) ?>" onclick="return confirm('¿Está seguro de que desea eliminar este cliente?')">Eliminar</a>
                </td>

            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>