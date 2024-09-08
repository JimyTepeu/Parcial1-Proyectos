<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Menu Tienda</title>
</head>
<body>
    <div style="width: 400px; height: 400px; margin: 30px auto;">
        <h1 style="text-align: center;" >Menu Tienda</h1>
        <hr>
        <ul>
            <li><a class="btn btn-outline-secondary" href="<?=base_url('ver_cliente')?>">Clientes</a></li>
            <li><a class="btn btn-outline-secondary" href="<?=base_url('construccion')?>">Factura</a></li>
            <li><a class="btn btn-outline-secondary" href="<?=base_url('construccion')?>">Detalles de facturas</a></li>
            <li><a class="btn btn-outline-secondary" href="<?=base_url('construccion')?>">Productos</a></li>
            <li><a class="btn btn-outline-secondary" href="<?=base_url('construccion')?>">Tipos de productos</a></li>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>