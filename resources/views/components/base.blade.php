<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejemplo</title>
    <link href="cdn.jsdelivr.net" rel="stylesheet">
</head>
<body>  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <h2>Selecciona una opción </h2>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="/">inicio</a>
                        </li><li class="nav-item"><a class="nav-link" href="/acerca">acerca de</a>
                        </li><li class="nav-item"><a class="nav-link" href="/contacto">contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="cdn.jsdelivr.net"></script>
</body>
</html>