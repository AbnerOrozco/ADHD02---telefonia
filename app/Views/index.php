<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menú</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
        background-color: #f8f9fa;
      }
      .navbar {
        border-bottom: 3px solid #6c757d;
      }
      .card {
        border: 1px solid #6c757d;
        transition: transform 0.2s, box-shadow 0.2s;
      }
      .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
      }
      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
      }
      .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
      }
    </style>
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
    <div class="container mt-5">
      <h1 class="text-center">Bienvenido al Menú Principal</h1>
      <div class="row mt-4">
        <div class="col-md-4">
          <div class="card text-white bg-primary mb-3">
            <div class="card-body text-center">
              <a href="planes" class="btn btn-light">Planes</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-success mb-3">
            <div class="card-body text-center">
              <a href="clientes" class="btn btn-light">Clientes</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-white bg-info mb-3">
            <div class="card-body text-center">
              <a href="lineas_telefonicas" class="btn btn-light">Líneas Telefónicas</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
