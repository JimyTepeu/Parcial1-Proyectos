<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear Nuevo Cliente</title>
</head>
<body>

    <div style="height: 400px; width: 400px; margin: auto;">
    <h1 style="text-align: center;">Agregar Nuevo Cliente</h1>
    <hr>
    <form action="<?=base_url('guardar_cliente')?>" method="post">

    <div class="mb-3">
        <label class="form-label" for="txt_nombre">Nombre</label>
        <input class="form-control" type="text" name="txt_nombre" id="txt_nombre" required>
    </div>    
    <div>
        <label class="form-label" for="txt_apellido">Apellido</label>
        <input class="form-control" type="text" name="txt_apellido" id="txt_apellido" required>
    </div>
    <div class="mb-3">
        <label class="form-label"  for="txt_direccion">Direccion</label>
        <input class="form-control"  type="text" name="txt_direccion" id="txt_direccion" required>
    </div>
    <div class="mb-3">
        <label class="form-label"  for="txt_nit">NIT</label>
        <input class="form-control"  type="text" name="txt_nit" id="txt_nit" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="correo_electronico">Correo Electronico</label>
        <input class="form-control" type="email" name="correo_electronico" id="correo_electronico" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="txt_telefono_movil">Telefono Movil</label>
        <input class="form-control" type="text" name="txt_telefono_movil" id="txt_telefono_movil" required>
    </div>
        <input class="btn btn-outline-success" type="submit" value="Guardar">
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>