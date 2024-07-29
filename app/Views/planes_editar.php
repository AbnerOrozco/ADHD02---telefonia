<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevos Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="bg-success p-2 text-dark bg-opacity-25">

  <body>
    
    <div class="container card" style="width: 40rem;">
        <h1>Nuevo Plan</h1>
        <div class="row">
            <div class="col col-4">
                <form action=<?php echo base_url('/actualizar_plan') ?> method="post">
         
                <input type="hidden" id="txtId" name="txtId" value="<?php echo $planes['plan_id']; ?>" class="form-control">

                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre:</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control" value="<?php echo $planes['nombre']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtPagoMensual" class="form-label">Pago Mensual:</label>
                        <input type="number" id="txtPagoMensual" name="txtPagoMensual" class="form-control" value="<?php echo $planes['pago_mensual']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadMinutos" class="form-label">Cantidad de minutos:</label>
                        <input type="text" id="txtCantidadMinutos" name="txtCantidadMinutos" class="form-control" value="<?php echo $planes['cantidad_minutos']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadMensajes" class="form-label">Cantidad de mensajes:</label>
                        <input type="text" id="txtCantidadMensajes" name="txtCantidadMensajes" class="form-control" value="<?php echo $planes['cantidad_mensajes']; ?>">
                    </div>
                    <div class="mb-3">
            <input type="submit" value="Actualizar" class="btn btn-primary">
        </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

