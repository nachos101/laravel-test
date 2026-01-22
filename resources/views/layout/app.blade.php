<!DOCTYPE html>
<html>
<head>
    <title>Soundy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white p-3 mb-4">
        <h1>Soundy</h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black mb-4">
        <div class="container">
            <a href="/">Inicio</a>
            <a href="/rock_nacional">Rock Nacional</a>
            <a href="/trap">Trap</a>
            <a href="/pop">Pop</a>
            <a href="/rock_alternativo">Rock alternativo</a>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-dark text-white text-center p-3 mt-4">
        <p>© 2026 Soundy. Todos los derechos reservados.</p>
    </footer>
</body>
</html>