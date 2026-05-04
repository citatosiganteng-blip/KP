@php
    $links = [
        ['route' => 'home',      'label' => 'Beranda'],
        ['route' => 'profil',    'label' => 'Profil'],
        ['route' => 'program',   'label' => 'Program Keahlian'],
        ['route' => 'kesiswaan', 'label' => 'Kesiswaan'],
        ['route' => 'ppdb',      'label' => 'PPDB'],
        ['route' => 'kontak',    'label' => 'Kontak'],
    ];
@endphp
<header class="sticky top-0 z-50 w-full border-b border-slate-200 bg-white/90 backdrop-blur-md shadow-sm">
    <div class="container mx-auto px-4 lg:px-8 flex h-20 items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <img src="{{ asset('images/logoSMK.png') }}" alt="Logo SMKS CIM" class="h-12 w-auto object-contain transition group-hover:scale-105">
            <div class="leading-tight hidden sm:block">
                <p class="text-base font-bold text-[#1e3a8a]">SMKS CIM</p>
                <p class="text-[11px] font-semibold uppercase tracking-wider text-slate-500">Cipta Insani Mandiri</p>
            </div>
        </a>

        <nav class="hidden lg:flex items-center gap-2">
            @foreach ($links as $l)
                @php $active = request()->routeIs($l['route']); @endphp
                <a href="{{ route($l['route']) }}"
                   class="px-4 py-2 text-sm font-semibold rounded-md transition duration-300 {{ $active ? 'text-[#f59e0b]' : 'text-[#1e3a8a] hover:text-[#f59e0b]' }}">
                    {{ $l['label'] }}
                </a>
            @endforeach
            
            <a href="{{ route('ppdb') }}" class="ml-4 bg-[#f5c542] hover:bg-[#eab308] text-[#1e3a8a] font-bold text-sm px-6 py-2.5 rounded-full shadow-md transition transform hover:-translate-y-0.5 flex items-center gap-2">
                Pendaftaran
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
            </a>
        </nav>

        <button id="nav-toggle" class="lg:hidden p-2 text-[#1e3a8a] focus:outline-none" aria-label="Toggle menu">
            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
        </button>
    </div>

    <div id="nav-menu" class="hidden lg:hidden border-t border-slate-200 bg-white absolute w-full shadow-lg">
        <nav class="container mx-auto px-4 py-4 flex flex-col gap-2">
            @foreach ($links as $l)
                @php $active = request()->routeIs($l['route']); @endphp
                <a href="{{ route($l['route']) }}" class="block px-4 py-3 text-sm font-semibold rounded-md transition {{ $active ? 'bg-[#1e3a8a]/10 text-[#1e3a8a]' : 'text-slate-700 hover:bg-slate-50 hover:text-[#f59e0b]' }}">
                    {{ $l['label'] }}
                </a>
            @endforeach
            <a href="{{ route('ppdb') }}" class="mt-2 text-center bg-[#f5c542] text-[#1e3a8a] font-bold py-3 rounded-md shadow-sm">
                Pendaftaran
            </a>
        </nav>
    </div>
</header>

<script>
    document.getElementById('nav-toggle').addEventListener('click', function() {
        document.getElementById('nav-menu').classList.toggle('hidden');
    });
</script>