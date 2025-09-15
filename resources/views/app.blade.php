<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Heaven')</title>
    @vite('resources/css/app.css')

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Urbanist:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- AlpineJS -->
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="flex flex-col font-[Urbanist] bg-black">

    {{-- LOADER --}}
    @include('cargando')

    {{-- NAVBAR --}}
    @include('inicio.barraNavegacion')

    <main>
        @yield('contenido')
    </main>

    {{-- FOOTER --}}
    @include('inicio.piePagina')

    <script async src="https://www.tiktok.com/embed.js"></script>

    @if (!Request::is('iniciarSesion'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const navbar = document.getElementById("navbar");
                window.addEventListener("scroll", () => {
                    if (window.scrollY > 50) {
                        navbar.classList.add("bg-black", "shadow-md");
                    } else {
                        navbar.classList.remove("bg-black", "shadow-md");
                    }
                });
            });
        </script>
    @endif

</body>

</html>
