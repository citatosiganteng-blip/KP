@extends('layouts.app')
@section('title', 'Beranda')
@section('description', 'SMKS Cipta Insani Mandiri (CIM School) — SMK Terakreditasi A di Beji, Depok. Program DKV, TKJ, MPLB, Broadcasting.')

@section('content')
{{-- 1. Hero Section --}}
<section class="relative overflow-hidden bg-[#1e3a8a] text-white pt-20 pb-32">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 20% 20%, #f5c542 0%, transparent 40%), radial-gradient(circle at 80% 60%, #6d28d9 0%, transparent 45%);"></div>
    
    <div class="container relative mx-auto px-6 grid gap-10 md:grid-cols-2 items-center">
        <div class="z-10">
            <span class="inline-block rounded-full bg-[#f5c542] px-4 py-1.5 text-xs font-extrabold uppercase tracking-widest text-[#1e3a8a] shadow-sm">
                Terakreditasi A
            </span>
            <h1 class="mt-6 text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight text-white leading-tight">
                SMKS Cipta Insani Mandiri
            </h1>
            <p class="mt-4 text-xl md:text-2xl text-[#f5c542] font-bold tracking-wide">
                Kreatif · Santun · Berkarakter
            </p>
            <p class="mt-5 text-base md:text-lg opacity-90 max-w-xl leading-relaxed text-gray-200">
                Sekolah Menengah Kejuruan unggulan di Beji, Depok yang membentuk generasi siap kerja dan berakhlak mulia melalui pendidikan Islami berwawasan kebangsaan.
            </p>
            <div class="mt-10 flex flex-wrap gap-4">
                <a href="{{ route('ppdb') }}" class="bg-[#f5c542] hover:bg-[#eab308] text-[#1e3a8a] font-bold px-8 py-3.5 rounded-full shadow-lg transition transform hover:-translate-y-1">
                    Daftar PPDB 2026/2027 →
                </a>
                <a href="{{ route('profil') }}" class="border-2 border-white text-white hover:bg-white hover:text-[#1e3a8a] font-bold px-8 py-3.5 rounded-full transition transform hover:-translate-y-1">
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
<section class="relative z-20 -mt-20 px-4">
    <div class="container mx-auto">
        <div class="bg-white rounded-3xl shadow-xl p-6 md:p-8 flex gap-6 overflow-x-auto scroll-smooth scrollbar-hide border border-gray-100 justify-start xl:justify-center items-center">
            
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

            @foreach ($floatingMenus as $menu)
            <a href="{{ $menu['url'] }}" class="flex flex-col items-center gap-3 min-w-[90px] group transition duration-300">
                <div class="w-16 h-16 rounded-full bg-blue-50 flex items-center justify-center group-hover:bg-[#f5c542] group-hover:shadow-md transition duration-300 overflow-hidden">
                    <img src="https://placehold.co/100x100/1e3a8a/FFF?text={{ $menu['icon'] }}" alt="{{ $menu['label'] }}" class="w-full h-full object-cover transition duration-300 group-hover:scale-110">
                </div>
                <span class="text-xs font-semibold text-[#1e3a8a] text-center whitespace-nowrap">{{ $menu['label'] }}</span>
            </a>
            @endforeach

        </div>
    </div>
</section>

{{-- 3. Program Keahlian / Jurusan --}}
<section class="py-24 bg-gray-50">
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
                        <img src="{{ asset('images/' . $jurusan['img']) }}" alt="{{ $jurusan['nama'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
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
<section class="py-24 bg-white overflow-hidden">
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
                            <img src="{{ asset('images/' . $ekskul['img']) }}" alt="{{ $ekskul['nama'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                            <img src="https://placehold.co/400x600/1e3a8a/f5c542?text=Foto\n{{ $ekskul['nama'] }}" alt="{{ $ekskul['nama'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
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
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="rounded-3xl bg-[#1e3a8a] p-10 md:p-16 text-center shadow-2xl relative overflow-hidden">
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-[#f5c542] rounded-full opacity-20 blur-3xl"></div>
            
            <h2 class="text-3xl md:text-4xl font-bold text-white relative z-10">Tunggu Apa Lagi? Ayo Menjadi Bagian Dari Kami!</h2>
            <p class="mt-4 text-gray-300 max-w-2xl mx-auto relative z-10 text-lg">Gelombang 1 Pendaftaran (08 Januari - 08 Maret 2026) telah dibuka. Daftar sekarang dan dapatkan beasiswa serta subsidi silang!</p>
            <a href="{{ route('ppdb') }}" class="mt-8 inline-block bg-[#f5c542] hover:bg-[#eab308] text-[#1e3a8a] font-extrabold px-10 py-4 rounded-full shadow-lg transition transform hover:scale-105 relative z-10 text-lg">
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