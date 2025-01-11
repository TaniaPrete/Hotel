<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Hotel con Amore</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav class="navbar" style="display: flex; align-items: center; justify-content: space-between;">
            <div class="logo">
                <img src="{{ asset('images/Hotel_Logo_Updated.png') }}" alt="Logo Hotel con Amore">
            </div>
            <ul class="nav-links" style="display: flex; gap: 15px;">
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Servizi</a></li>
                <li><a href="{{ route('whois') }}">Chi Siamo</a></li>
                <li><a href="{{ route('work-with-us') }}">Lavora con Noi</a></li>
                <li><a href="{{ route('spa-booking') }}">Spa</a></li>
            </ul>
            <div class="booking-form" style=" display: flex; align-items: center; gap: 10px;">
                <form action="{{ route('booking') }}" method="GET" style="display: flex; gap: 10px; align-items: center;">
                    <input type="date" name="check_in" required placeholder="Check-in" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
                    <input type="date" name="check_out" required placeholder="Check-out" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
                    <button type="submit" class="btn btn-primary" style="padding: 8px 15px; border-radius: 5px; background-color: #FF6B2F; color: white; border: none;">Prenota</button>
                </form>
            </div>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Hotel con Amore - Tutti i diritti riservati</p>
        <p>Seguici sui social:
            <a href="https://facebook.com" target="_blank">Facebook</a> |
            <a href="https://instagram.com" target="_blank">Instagram</a>
        </p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const hamburger = document.querySelector('.hamburger');
            const navLinks = document.querySelector('.nav-links');

            hamburger.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
