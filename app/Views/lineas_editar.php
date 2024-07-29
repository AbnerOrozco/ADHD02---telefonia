<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Lineas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="css/style.css">
  </head>
  <body class="bg-success p-2 text-dark bg-opacity-25">

  <body>



<div class="container card" style="width: 40rem;">
        <h1>Actualizar Lineas</h1>
      
        <form action="<?php echo base_url('/actualizar_linea'); ?>" method="post">
            <input type="hidden" id="no_telefono" name="no_telefono" value="<?php echo $lineas_telefonicas['no_telefono']; ?>"> 


            <div class="mb-8">
                <label for="FechaPago" class="form-label">fecha de pago</label>
                <input type="text" id="FechaPago" name="FechaPago" class="form-control" value="<?php echo $lineas_telefonicas['fecha_pago']; ?>" placeholder="Ingrese Fecha de Pago">
            </div>
            <div class="mb-8">
                <label for="MesesAtraso" class="form-label">meses de atraso:</label>
                <input type="text" id="MesesAtraso" name="MesesAtraso" class="form-control"  value="<?php echo $lineas_telefonicas['meses_atraso']; ?>" placeholder="Ingrese Meses de Atraso">
            </div>
            <div class="mb-8">
                <label for="PlanId" class="form-label">ID plan:</label>
                <input type="text" id="PlanId" name="PlanId" class="form-control"  value="<?php echo $lineas_telefonicas['plan_id']; ?>" placeholder="Ingrese el ID plan">
            </div>
            <div class="mb-8">
                <label for="NoCliente" class="form-label">cliente ID</label>
                <input type="text" id="NoCliente" name="NoCliente" class="form-control" value="<?php echo $lineas_telefonicas['cliente_id']; ?>" placeholder="Ingrese numero de ID">
            </div>
            <div class="mb-3">
            <input type="submit" value="Actualizar" class="btn btn-primary">
        </div>
        </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

