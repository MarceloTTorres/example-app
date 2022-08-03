<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
</head>
<body>
    @yield('menu_superior')

    <div>
        @yield('menu_secundario')
        @yield('conteudo')
    </div>
    
    @yield('rodape')
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>