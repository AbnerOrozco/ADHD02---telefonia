<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="css/style.css">
  </head>
  <body class="bg-success p-2 text-dark bg-opacity-25">

  <body>
    
<div class="container card" style="width: 40rem;">
    <h1>Actualizar Cliente</h1>
    <form action="<?php echo base_url('actualizar_cliente'); ?>" method="post">
        <input type="hidden" id="txtId" name="txtId" value="<?php echo $cliente['cliente_id']; ?>">
        <div class="mb-3">
            <label for="txtNombre" class="form-label">Nombre:</label>
            <input type="text" id="txtNombre" name="txtNombre" class="form-control" value="<?php echo $cliente['nombre']; ?>">
        </div>
        <div class="mb-3">
            <label for="txtApellido" class="form-label">Apellido:</label>
            <input type="text" id="txtApellido" name="txtApellido" class="form-control" value="<?php echo $cliente['apellido']; ?>">
        </div>
        <div class="mb-3">
            <label for="txtCorreo" class="form-label">Correo Electrónico:</label>
            <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" value="<?php echo $cliente['correo_electronico']; ?>">
        </div>
        <div class="mb-3">
            <label for="txtCalleAvenida" class="form-label">Calle o Avenida:</label>
            <input type="text" id="txtCalleAvenida" name="txtCalleAvenida" class="form-control" value="<?php echo $cliente['calle_avenida']; ?>">
        </div>
        <div class="mb-3">
            <label for="txtNoCasa" class="form-label">Número de Casa:</label>
            <input type="text" id="txtNoCasa" name="txtNoCasa" class="form-control" value="<?php echo $cliente['no_casa']; ?>">
        </div>
        <div class="mb-3">
            <label for="txtZona" class="form-label">Zona:</label>
            <input type="text" id="txtZona" name="txtZona" class="form-control" value="<?php echo $cliente['zona']; ?>">
        </div>
        <div class="mb-3">
            <input type="submit" value="Actualizar" class="btn btn-primary">
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
