<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
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
        <h1>Clientes</h1>
        <form action="agregar_cliente" method="post">
            <div class="mb-8">
                <label for="txtId" class="form-label">Id:</label>
                <input type="text" id="txtId" name="txtId" class="form-control" placeholder="Ingrese id">
            </div>
            <div class="mb-8">
                <label for="txtNombre" class="form-label">Nombre:</label>
                <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese nombre">
            </div>
            <div class="mb-8">
                <label for="txtApellido" class="form-label">Apellido:</label>
                <input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Ingrese Apellido">
            </div>
            <div class="mb-8">
                <label for="txtCorreo" class="form-label">Correo electrónico:</label>
                <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Ingrese Correo">
            </div>
            <div class="mb-8">
                <label for="txtCalleAvenida" class="form-label">Calle o avenida:</label>
                <input type="text" id="txtCalleAvenida" name="txtCalleAvenida" class="form-control" placeholder="Ingrese calle o avenida">
            </div>
            <div class="mb-8">
                <label for="txtNoCasa" class="form-label">No. casa</label>
                <input type="text" id="txtNoCasa" name="txtNoCasa" class="form-control" placeholder="Ingrese No. de casa">
            </div>
            <div class="mb-8">
                <label for="txtZona" class="form-label">Zona:</label>
                <input type="text" id="txtZona" name="txtZona" class="form-control" placeholder="Ingrese Zona">
            </div>
            <div class="mb-8">
                <input type="submit" value="Guardar" id="btnGuardar" name="btnGuardar">
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>