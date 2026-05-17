@php
    $links = [
        ['route' => 'home',      'label' => 'Beranda'],
        ['route' => 'profil',    'label' => 'Profil'],
        ['route' => 'program',   'label' => 'Program Keahlian'],
        ['route' => 'kesiswaan', 'label' => 'Kesiswaan'],
        ['route' => 'event',     'label' => 'Event'],
        ['route' => 'kontak',    'label' => 'Kontak'],
    ];
@endphp
<header x-data="{ open: false }" class="sticky top-0 z-50 w-full border-b border-slate-200 bg-white md:bg-white/90 md:backdrop-blur-md shadow-sm">
    <div class="container mx-auto px-4 lg:px-8 flex h-16 md:h-20 items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-2 md:gap-3 group overflow-hidden">
            <img src="{{ asset('images/logoSMK.png') }}" alt="Logo SMKS CIM" class="h-9 w-9 md:h-12 md:w-12 object-contain flex-shrink-0 transition group-hover:scale-105">
            <div class="leading-tight">
                <p class="text-sm sm:text-base font-bold text-[#1e3a8a]">SMKS CIM</p>
                <p class="text-[10px] sm:text-[11px] font-semibold uppercase tracking-wider text-slate-500">Cipta Insani Mandiri</p>
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

        {{-- Mobile hamburger / close button --}}
        <button @click="open = !open" class="lg:hidden p-2 text-[#1e3a8a] focus:outline-none z-50" aria-label="Toggle menu">
            <svg x-show="!open" class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
            <svg x-show="open" x-cloak class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    {{-- Mobile slide-down menu --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         x-cloak
         @click.outside="open = false"
         class="lg:hidden border-t border-slate-200 bg-white absolute w-full shadow-lg">
        <nav class="container mx-auto px-4 py-4 flex flex-col gap-2">
            @foreach ($links as $l)
                @php $active = request()->routeIs($l['route']); @endphp
                <a href="{{ route($l['route']) }}" class="block px-4 py-3 text-sm font-semibold rounded-lg transition {{ $active ? 'bg-[#1e3a8a] text-white' : 'text-slate-700 hover:bg-blue-50 hover:text-[#1e3a8a]' }}">
                    {{ $l['label'] }}
                </a>
            @endforeach
            <a href="{{ route('ppdb') }}" class="mt-3 text-center bg-[#f5c542] text-[#1e3a8a] font-bold py-3 rounded-lg shadow-sm hover:bg-[#eab308] transition block">
                Pendaftaran
            </a>
            <a href="https://wa.me/6285777119248" target="_blank" class="mt-2 text-center bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded-lg shadow-md transition flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.272-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004a9.87 9.87 0 00-4.946 1.196c-1.54.892-2.776 2.577-2.776 4.761 0 1.464.356 2.84 1.02 4.033l-1.052 3.851 3.947-1.053c1.095.628 2.475.974 3.9.974h.004c5.444 0 9.944-4.467 9.944-9.986 0-2.66-.992-5.159-2.795-7.055a9.832 9.832 0 00-7.278-2.721"/>
                </svg>
                Info Lebih Lanjut
            </a>
        </nav>
    </div>
</header>

<style>
    [x-cloak] { display: none !important; }
</style>