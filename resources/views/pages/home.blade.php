@extends('layouts.app')
@section('title', 'Beranda')
@section('description', 'SMKS Cipta Insani Mandiri (CIM School) — SMK Terakreditasi A di Beji, Depok. Program DKV, TKJ, MPLB, Broadcasting.')

@section('content')
{{-- 1. Hero Section --}}
<section class="relative overflow-hidden bg-[#1e3a8a] text-white pt-12 pb-20 md:pt-20 md:pb-32">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 20% 20%, #f5c542 0%, transparent 40%), radial-gradient(circle at 80% 60%, #6d28d9 0%, transparent 45%);"></div>
    
    <div class="container relative mx-auto px-4 md:px-6 grid gap-6 md:gap-10 md:grid-cols-2 items-center">
        <div class="z-10">
            <span class="inline-block rounded-full bg-[#f5c542] px-4 py-1.5 text-xs font-extrabold uppercase tracking-widest text-[#1e3a8a] shadow-sm">
                Terakreditasi A
            </span>
            <h1 class="mt-4 md:mt-6 text-3xl md:text-5xl lg:text-6xl font-bold tracking-tight text-white leading-tight">
                SMKS Cipta Insani Mandiri
            </h1>
            <p class="mt-3 md:mt-4 text-lg md:text-2xl text-[#f5c542] font-bold tracking-wide">
                Kreatif · Santun · Berkarakter
            </p>
            <p class="mt-3 md:mt-5 text-sm md:text-lg opacity-90 max-w-xl leading-relaxed text-gray-200">
                Sekolah Menengah Kejuruan unggulan di Beji, Depok yang membentuk generasi siap kerja dan berakhlak mulia melalui pendidikan Islami berwawasan kebangsaan.
            </p>
            <div class="mt-6 md:mt-10 flex flex-wrap gap-3 md:gap-4">
                <a href="{{ route('ppdb') }}" class="bg-[#f5c542] hover:bg-[#eab308] text-[#1e3a8a] font-bold px-6 md:px-8 py-3 md:py-3.5 rounded-full shadow-lg transition transform hover:-translate-y-1 text-sm md:text-base">
                    Daftar PPDB 2026/2027 →
                </a>
                <a href="{{ route('profil') }}" class="border-2 border-white text-white hover:bg-white hover:text-[#1e3a8a] font-bold px-6 md:px-8 py-3 md:py-3.5 rounded-full transition transform hover:-translate-y-1 text-sm md:text-base">
                    Tentang Kami
                </a>
            </div>
        </div>
        <div class="z-10 flex justify-center lg:justify-end mt-10 md:mt-0">
            <img src="{{ asset('images/sekolah.png') }}" alt="Siswa SMKS CIM" class="w-full max-w-lg lg:max-w-xl xl:max-w-2xl object-contain drop-shadow-2xl rounded-3xl transform lg:scale-110 lg:translate-x-4">
        </div>
    </div>
</section>

{{-- 2. Floating Menu Card --}}
<section class="relative z-20 -mt-12 md:-mt-20 px-4">
    <div class="container mx-auto">
        <div class="bg-white rounded-2xl md:rounded-3xl shadow-xl p-4 md:p-8 flex gap-4 md:gap-6 overflow-x-auto scroll-smooth scrollbar-hide border border-gray-100 justify-start xl:justify-center items-center">
            
            @php
                $floatingMenus = [
                    ['icon' => 'Sambutan', 'label' => 'Sambutan', 'url' => '#sambutan'],
                    ['icon' => 'Visi+Misi', 'label' => 'Visi & Misi', 'url' => route('profil')],
                    ['icon' => 'Keunggulan', 'label' => 'Keunggulan', 'url' => '#keunggulan'],
                    ['icon' => 'SPMB', 'label' => 'SPMB', 'url' => route('ppdb')],
                    ['icon' => 'Kegiatan', 'label' => 'Kegiatan', 'url' => route('kesiswaan')],
                    ['icon' => 'Agenda', 'label' => 'Agenda', 'url' => '#agenda'],
                    ['icon' => 'Prestasi', 'label' => 'Prestasi', 'url' => '#prestasi'],
                ];
            @endphp

            @php
                $menuIcons = [
                    'Sambutan'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>',
                    'Visi+Misi' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.964-7.178Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>',
                    'Keunggulan'=> '<path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"/>',
                    'SPMB'      => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>',
                    'Kegiatan'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/>',
                    'Agenda'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>',
                    'Prestasi'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0"/>',
                ];
            @endphp
            @foreach ($floatingMenus as $menu)
            <a href="{{ $menu['url'] }}" class="flex flex-col items-center gap-2 md:gap-3 min-w-[70px] md:min-w-[90px] group transition duration-300">
                <div class="w-12 h-12 md:w-16 md:h-16 rounded-full bg-blue-50 flex items-center justify-center group-hover:bg-[#f5c542] group-hover:shadow-md transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 md:w-7 md:h-7 text-[#1e3a8a] group-hover:text-[#1e3a8a] transition">
                        {!! $menuIcons[$menu['icon']] ?? '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>' !!}
                    </svg>
                </div>
                <span class="text-[10px] md:text-xs font-semibold text-[#1e3a8a] text-center whitespace-nowrap">{{ $menu['label'] }}</span>
            </a>
            @endforeach

        </div>
    </div>
</section>

{{-- 3. Program Keahlian / Jurusan --}}
<section class="py-14 md:py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-[#f5c542] font-bold tracking-wider uppercase text-xl">Program Keahlian</span>
            <h2 class="mt-2 text-3xl md:text-4xl font-extrabold text-[#1e3a8a]">Empat Jurusan Unggulan</h2>
            <p class="mt-4 text-gray-600">Disiapkan agar lulusan langsung siap kerja, berwirausaha, atau melanjutkan ke perguruan tinggi.</p>
        </div>
        
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            @php
                $jurusanImages = [
                    ['singkatan' => 'DKV', 'nama' => 'Desain Komunikasi Visual', 'desc' => 'Desain grafis, branding, ilustrasi & motion.', 'img' => 'dkv1.png'],
                    ['singkatan' => 'TKJ', 'nama' => 'Teknik Komputer & Jaringan', 'desc' => 'Networking, server, keamanan & cloud.', 'img' => 'TKJ.png'],
                    ['singkatan' => 'MPLB', 'nama' => 'Manajemen Perkantoran', 'desc' => 'Administrasi, kearsipan & layanan bisnis.', 'img' => 'mplb.png'],
                    ['singkatan' => 'BC', 'nama' => 'Broadcasting', 'desc' => 'Produksi siaran, kamera, editing & MC.', 'img' => 'Broadcast1.png'],
                ];
            @endphp
            @foreach ($jurusanImages as $jurusan)
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 border border-gray-100 group">
                    <div class="h-48 overflow-hidden relative">
                        <img src="{{ asset('images/' . $jurusan['img']) }}" alt="{{ $jurusan['nama'] }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-[#1e3a8a] leading-tight">{{ $jurusan['nama'] }}</h3>
                        <p class="mt-2 text-sm text-gray-600">{{ $jurusan['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="mt-14 text-center">
            <a href="{{ route('program') }}" class="inline-block bg-[#1e3a8a] text-white font-semibold px-8 py-3 rounded-full hover:bg-blue-900 transition">Lihat Detail Program →</a>
        </div>
    </div>
</section>

{{-- 4. Ekstrakurikuler --}}
<section class="py-14 md:py-24 bg-white overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-end mb-12">
            <div>
                <span class="text-[#f5c542] font-bold tracking-wider uppercase text-xl">Pengembangan Diri</span>
                <h2 class="mt-2 text-3xl md:text-4xl font-extrabold text-[#1e3a8a]">Intra & Ekstrakurikuler</h2>
            </div>
            <div class="hidden md:block text-gray-500 text-sm italic">
                Geser ke kanan untuk melihat lebih >
            </div>
        </div>

        <div class="flex gap-6 overflow-x-auto pb-8 pt-2 snap-x snap-mandatory scrollbar-hide" style="scrollbar-width: none;">
            @php
                $ekskulList = [
                    ['nama' => 'Basket', 'img' => 'basket.png'],
                    ['nama' => 'Tari', 'img' => 'tari.jpeg'],
                    ['nama' => 'Pencak Silat', 'img' => null],
                    ['nama' => 'Paskibra', 'img' => 'paskibra.png'],
                    ['nama' => 'Tahsin', 'img' => null],
                    ['nama' => 'Bulu Tangkis', 'img' => 'badminton.png'],
                    ['nama' => 'Futsal', 'img' => 'futsal.png'],
                    ['nama' => 'OSIS', 'img' => null],
                ];
            @endphp

            @foreach ($ekskulList as $ekskul)
            <div class="min-w-[260px] md:min-w-[300px] snap-center shrink-0 group">
                <div class="bg-gray-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow border border-gray-100">
                    <div class="h-60 overflow-hidden relative">
                        @if($ekskul['img'])
                            <img src="{{ asset('images/' . $ekskul['img']) }}" alt="{{ $ekskul['nama'] }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-[#1e3a8a] to-[#3b5fc0] flex flex-col items-center justify-center gap-3 group-hover:scale-110 transition-transform duration-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="#f5c542" class="w-16 h-16 opacity-80">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/>
                                </svg>
                                <span class="text-[#f5c542] text-sm font-semibold opacity-70">Segera Hadir</span>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-[#1e3a8a]/90 to-transparent flex items-end p-6">
                            <h3 class="text-white text-xl font-bold tracking-wide">{{ $ekskul['nama'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 5. CTA Pendaftaran --}}
<section class="py-10 md:py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6">
        <div class="rounded-2xl md:rounded-3xl bg-[#1e3a8a] p-8 md:p-16 text-center shadow-2xl relative overflow-hidden">
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-[#f5c542] rounded-full opacity-20 blur-3xl"></div>
            
            <h2 class="text-2xl md:text-4xl font-bold text-white relative z-10">Tunggu Apa Lagi? Ayo Menjadi Bagian Dari Kami!</h2>
            <p class="mt-3 md:mt-4 text-gray-300 max-w-2xl mx-auto relative z-10 text-sm md:text-lg">Gelombang 1 Pendaftaran (08 Januari - 08 Maret 2026) telah dibuka. Daftar sekarang dan dapatkan beasiswa serta subsidi silang!</p>
            <a href="{{ route('ppdb') }}" class="mt-6 md:mt-8 inline-block bg-[#f5c542] hover:bg-[#eab308] text-[#1e3a8a] font-extrabold px-8 md:px-10 py-3 md:py-4 rounded-full shadow-lg transition transform hover:scale-105 relative z-10 text-base md:text-lg">
                Daftar SPMB Sekarang
            </a>
        </div>
    </div>
</section>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
@endsection