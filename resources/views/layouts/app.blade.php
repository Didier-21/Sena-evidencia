 <html>
 <head>
     <title>App Didier - @yield('titulo')</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
 <body>
     <div class="container">
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">logotipo</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/operacion">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Eventos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Ayuda</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Opciones
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/operacion/create">crear operador</a></li>
                      <li><a class="dropdown-item" href="#">consultar caso</a></li>
                      <li><a class="dropdown-item" href="#">buscar caso</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>


         @yield('contenido')
     </div>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
 </body>

 </html>
