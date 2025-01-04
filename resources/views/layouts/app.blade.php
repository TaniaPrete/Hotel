<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hotel con Amore')</title>
   
</head>
@vite(['resources/css/app.css'])
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('hero-image.jpg') }}" alt="Logo Hotel con Amore">
            </div>
            <ul class="nav-links">
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="{{route('services') }}">Servizi</a></li>
                <li><a href="{{ route('whois') }}">Chi Siamo</a></li>

                
                <li><a href="{{ url('/contact') }}">Contatti</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('work-with-us') }}">Lavora con Noi</a></li>


            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Hotel con Amore - Tutti i diritti riservati</p>
        <p>Seguiteci sui nostri social: <a href="#">Facebook</a>, <a href="#">Instagram</a></p>
    </footer>
</body>
</html>
