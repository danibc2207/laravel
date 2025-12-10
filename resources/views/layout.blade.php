<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación - @yield('titulo')</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; }
        .header { background-color: #333; color: white; padding: 1rem; text-align: center; }
        .nav { background-color: #555; padding: 0.5rem; }
        .nav a { color: white; margin: 0 1rem; text-decoration: none; }
        .content { padding: 2rem; }
        .footer { background-color: #333; color: white; text-align: center; padding: 1rem; position: fixed; width: 100%; bottom: 0; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Mi Aplicación</h1>
    </div>
    <div class="nav">
        <a href="{{ route('vistas.inicio') }}">Inicio</a>
        <a href="{{ route('vistas.acerca') }}">Acerca de</a>
        <a href="{{ route('vistas.contacto') }}">Contacto</a>
    </div>

    <div class="content">
        @yield('contenido')
    </div>

    <div class="footer">
        <p>© 2025 Mi Aplicación. Todos los derechos reservados.</p>
    </div>
</body>
</html>