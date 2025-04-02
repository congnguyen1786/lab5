<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>Header</h1>
    </header>
    
    <main class="container my-4">
        @yield('content')
    </main>
    
    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>footer</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbsA2VBKQieHBy2ZQwrzO1gxW0OXrF3l3lwQ58BtutYB2OmIlj6F7D05dU5K6UjI" crossorigin="anonymous"></script>
</body>
</html>