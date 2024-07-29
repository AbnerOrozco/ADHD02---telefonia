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
        <h1>Nuevo Plan</h1>
        <div class="row">
            <div class="col col-4">
                <form action="agregar_plan" method="post">
                    <div class="mb-3">
                        <label for="txtId" class="form-label">Código:</label>
                        <input type="text" id="txtId" name="txtId" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre:</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtPagoMensual" class="form-label">Pago Mensual:</label>
                        <input type="number" id="txtPagoMensual" name="txtPagoMensual" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadMinutos" class="form-label">Cantidad de minutos:</label>
                        <input type="text" id="txtCantidadMinutos" name="txtCantidadMinutos" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadMensajes" class="form-label">Cantidad de mensajes:</label>
                        <input type="text" id="txtCantidadMensajes" name="txtCantidadMensajes" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnGuardarPlan" name="btnGuardarPlan" class="form-control" value="Guardar Plan">
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>