<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nueva linea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="bg-success p-2 text-dark bg-opacity-25">

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href='menu'>Menú Principal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="planes">Planes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clientes">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lineas_telefonicas">Líneas Telefónicas</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        <h1>Nueva linea</h1>
      
        <form action="agregar_linea" method="post">

            <div class="mb-8">
                <label for="no_telefono" class="form-label">numero de telefono:</label>
                <input type="text" id="no_telefono" name="no_telefono" class="form-control" placeholder="Ingrese el numero telefono">
            </div>
            <div class="mb-8">
                <label for="FechaPago" class="form-label">fecha de pago</label>
                <input type="text" id="FechaPago" name="FechaPago" class="form-control" placeholder="Ingrese Fecha de Pago">
            </div>
            <div class="mb-8">
                <label for="MesesAtraso" class="form-label">meses de atraso:</label>
                <input type="text" id="MesesAtraso" name="MesesAtraso" class="form-control" placeholder="Ingrese Meses de Atraso">
            </div>
            <div class="mb-8">
                <label for="PlanId" class="form-label">ID plan:</label>
                <input type="text" id="PlanId" name="PlanId" class="form-control" placeholder="Ingrese el ID plan">
            </div>
            <div class="mb-8">
                <label for="NoCliente" class="form-label">cliente ID</label>
                <input type="text" id="NoCliente" name="NoCliente" class="form-control" placeholder="Ingrese numero de ID">
            </div>
            <div class="mb-8">
                <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar">
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>