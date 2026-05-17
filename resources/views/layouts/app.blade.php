<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMKS Cipta Insani Mandiri — Kreatif · Santun · Berkarakter')</title>
    <meta name="description" content="@yield('description', 'SMKS Cipta Insani Mandiri (CIM School) — Sekolah Menengah Kejuruan Terakreditasi A di Beji, Depok. Program: DKV, TKJ, MPLB, Broadcasting.')">

    {{-- Open Graph --}}
    <meta property="og:type"        content="website">
    <meta property="og:site_name"   content="SMKS Cipta Insani Mandiri">
    <meta property="og:title"       content="@yield('title', 'SMKS Cipta Insani Mandiri — Kreatif · Santun · Berkarakter')">
    <meta property="og:description" content="@yield('description', 'SMKS Cipta Insani Mandiri (CIM School) — Sekolah Menengah Kejuruan Terakreditasi A di Beji, Depok. Program: DKV, TKJ, MPLB, Broadcasting.')">
    <meta property="og:image"       content="@yield('og_image', asset('images/sekolah.png'))">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta name="twitter:card"       content="summary_large_image">
    
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='8' fill='%233b1d6b'/%3E%3Ctext x='50%25' y='55%25' text-anchor='middle' dominant-baseline='middle' fill='%23f5c542' font-family='sans-serif' font-weight='bold' font-size='16'%3EC%3C/text%3E%3C/svg%3E">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col font-['Poppins'] text-gray-800 bg-gray-50">
    @include('layouts.navbar')
    
    <main class="flex-1">
        @yield('content')
    </main>
    
    @include('layouts.footer')

    {{-- Back to Top --}}
    <button id="back-to-top"
        class="fixed bottom-6 right-6 z-50 w-11 h-11 rounded-full bg-[#1e3a8a] text-white shadow-lg flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300 hover:bg-[#f5c542] hover:text-[#1e3a8a] hover:-translate-y-1"
        aria-label="Kembali ke atas">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18"/>
        </svg>
    </button>
</body>
</html>