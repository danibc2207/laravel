<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clientes @yield('title')</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; }
        .header { background-color: #f00b76; color: white; padding: 1rem; text-align: center; }
        .nav { background-color: #555555; padding: 0.5rem; }
        .nav a { color: white; margin: 0 1rem; text-decoration: none; }
        .content { padding: 2rem; }
        .footer { background-color: #f00b76; color: white; text-align: center; padding: 1rem; position: fixed; width: 100%; bottom: 0; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Base de datos</h1>
    </div>
    <div class="content">
        @yield('content')
    </div>

    <div class="footer">
        <p>Dani Bautista Cruz</p>
    </div>
</body>
</html>