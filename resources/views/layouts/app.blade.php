<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMKS Cipta Insani Mandiri — Kreatif · Santun · Berkarakter')</title>
    <meta name="description" content="@yield('description', 'SMKS Cipta Insani Mandiri (CIM School) — Sekolah Menengah Kejuruan Terakreditasi A di Beji, Depok. Program: DKV, TKJ, MPLB, Broadcasting.')">
    
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='8' fill='%233b1d6b'/%3E%3Ctext x='50%25' y='55%25' text-anchor='middle' dominant-baseline='middle' fill='%23f5c542' font-family='sans-serif' font-weight='bold' font-size='16'%3EC%3C/text%3E%3C/svg%3E">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col font-['Poppins'] text-gray-800 bg-gray-50">
    @include('layouts.navbar')
    
    <main class="flex-1">
        @yield('content')
    </main>
    
    @include('layouts.footer')
</body>
</html>