<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-gradient { background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); color: white; padding: 100px 0; }
    </style>
</head>
<body>
    @include('partials.navigation')

    {{-- AQUÍ ES DONDE OCURRE LA MAGIA --}}
    {{ $slot }}

    
</body>
</html>