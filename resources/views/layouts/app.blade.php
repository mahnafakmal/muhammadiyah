<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a class="navbar-brand" href="/">
    <img src="/Logo-Muhammadiyah-HQ.png" style="height: 40px;">
    <title>Muhammadiyah Pekajangan - @yield('title', 'Cahaya Islam Berkemajuan')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .logo-bg { background-color: #3406edff; color: white; }
        .nav-item:hover .dropdown-menu { display: block; }
        .nav-link { padding: 0.5rem 0.75rem; border-bottom: 3px solid transparent; transition: border-color 0.15s; }
        .nav-link:hover { border-color: #FFD700; }
    </style>
    @yield('styles')
</head>
<body>
    @include('partials.header')
    @include('partials.navbar')
    
    <main class="container mx-auto mt-4 px-4">
        @yield('content')
    </main>

    @include('partials.footer')
    
    @yield('scripts')
</body>
</html>