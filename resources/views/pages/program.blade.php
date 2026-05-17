@extends('layouts.app')
@section('title', 'Program Keahlian - SMKS Cipta Insani Mandiri')
@section('description', 'Empat program keahlian unggulan SMKS CIM: DKV, TKJ, MPLB, dan Broadcasting yang dirancang sesuai standar industri.')

@section('content')
{{-- 1. Hero Program Keahlian --}}
<section class="relative bg-[#1e3a8a] text-white py-14 md:py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 70% 30%, #f5c542 0%, transparent 60%);"></div>
    <div class="container relative mx-auto px-4 md:px-6 text-center z-10">
        <span class="text-[#f5c542] font-bold tracking-widest uppercase text-sm">Vocational Excellence</span>
        <h1 class="mt-4 text-3xl md:text-5xl font-extrabold tracking-tight text-white">Program Keahlian</h1>
        <p class="mt-6 text-lg md:text-xl text-gray-300 max-w-3xl mx-auto font-light leading-relaxed">
            Kurikulum yang diselaraskan dengan kebutuhan Dunia Usaha dan Dunia Industri (DUDI) untuk mencetak lulusan yang kompeten dan siap kerja.
        </p>
    </div>
</section>

{{-- 2. Daftar Jurusan --}}
<section class="py-14 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 space-y-10 md:space-y-16">
        @php
            $programs = [
                [
                    'kode' => 'DKV',
                    'nama' => 'Desain Komunikasi Visual',
                    'img'  => 'dkv3.png',
                    'desc' => 'Membentuk desainer grafis profesional yang menguasai prinsip desain, branding, ilustrasi, fotografi, hingga motion graphics dalam ekosistem digital.',
                    'skills' => ['Adobe Photoshop & Illustrator', 'Branding & Identitas Visual', 'Ilustrasi & Fotografi Digital', 'Motion & Video Editing']
                ],
                [
                    'kode' => 'TKJ',
                    'nama' => 'Teknik Komputer & Jaringan',
                    'img'  => 'tkj2.png',
                    'desc' => 'Mempersiapkan teknisi jaringan dan administrator sistem yang handal dalam mengelola infrastruktur IT, server, dan keamanan data.',
                    'skills' => ['Instalasi Jaringan LAN/WAN', 'Administrasi Server Linux/Windows', 'Cyber Security & Mikrotik', 'Cloud Computing & Virtualisasi']
                ],
                [
                    'kode' => 'MPLB',
                    'nama' => 'Manajemen Perkantoran & Layanan Bisnis',
                    'img'  => 'mplb2.png',
                    'desc' => 'Mencetak tenaga administrasi profesional yang menguasai tata kelola perkantoran modern, korespondensi digital, dan layanan bisnis prima.',
                    'skills' => ['Administrasi & Kearsipan Digital', 'Korespondensi Bisnis', 'Public Relations & Service Excellence', 'Manajemen Event & Pertemuan']
                ],
                [
                    'kode' => 'BC',
                    'nama' => 'Broadcasting & Film',
                    'img'  => 'Broadcast2.png',
                    'desc' => 'Mengasah kreativitas dalam produksi konten multimedia, teknik pengambilan gambar, editing profesional, hingga manajemen siaran digital.',
                    'skills' => ['Produksi Konten TV & YouTube', 'Cinematography & Lighting', 'Pro-Editing Audio & Video', 'Scriptwriting & Presenter']
                ],
            ];
        @endphp

        @foreach ($programs as $p)
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 grid md:grid-cols-5 items-center hover:shadow-xl transition-shadow duration-500 group">
                <div class="md:col-span-2 h-72 md:h-[28rem] aspect-square overflow-hidden bg-gray-200 rounded-xl md:rounded-xl m-4 md:m-6">
                    <img src="{{ asset('images/' . $p['img']) }}" alt="{{ $p['nama'] }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                </div>
                
                <div class="md:col-span-3 p-5 md:p-12">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="bg-[#1e3a8a]/10 text-[#1e3a8a] text-xs font-black px-3 py-1 rounded-md uppercase tracking-widest">
                            Jurusan {{ $p['kode'] }}
                        </span>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-[#1e3a8a] mb-4">{{ $p['nama'] }}</h2>
                    <p class="text-gray-600 leading-relaxed mb-5 md:mb-8 text-sm md:text-base">
                        {{ $p['desc'] }}
                    </p>
                    
                    <div class="border-t border-gray-100 pt-5 md:pt-8">
                        <h4 class="text-sm font-bold uppercase tracking-wider text-[#1e3a8a] mb-4 flex items-center gap-2">
                            <span class="w-8 h-px bg-[#f5c542]"></span> Kompetensi Inti
                        </h4>
                        <ul class="grid sm:grid-cols-2 gap-y-3 gap-x-6">
                            @foreach ($p['skills'] as $s)
                                <li class="flex items-start gap-3 text-sm text-gray-700 group/item">
                                    <span class="flex-shrink-0 w-5 h-5 rounded-full bg-[#f5c542]/20 flex items-center justify-center group-hover/item:bg-[#f5c542] transition-colors">
                                        <svg class="w-3 h-3 text-[#1e3a8a]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                    </span>
                                    {{ $s }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

{{-- 3. CTA Pendaftaran (Konsisten dengan Home) --}}
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="bg-gradient-to-r from-[#1e3a8a] to-[#3b1d6b] rounded-2xl md:rounded-3xl p-8 md:p-16 text-center text-white shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full opacity-10" style="background-image: radial-gradient(circle at 10% 20%, #f5c542 0%, transparent 20%);"></div>
            
            <h2 class="text-2xl md:text-4xl font-bold mb-4 md:mb-6 text-white">Tentukan Masa Depanmu Sekarang</h2>
            <p class="text-gray-300 max-w-2xl mx-auto mb-6 md:mb-10 text-sm md:text-lg">Jangan lewatkan kesempatan bergabung dengan SMK Inspiratif Terbaik Nasional 2023. Kuota terbatas untuk setiap jurusan!</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('ppdb') }}" class="bg-[#f5c542] text-[#1e3a8a] font-black px-8 md:px-10 py-3 md:py-4 rounded-full shadow-lg hover:scale-105 transition transform text-base md:text-lg">
                    Daftar Sekarang
                </a>
                <a href="{{ route('kontak') }}" class="border-2 border-white text-white font-bold px-8 md:px-10 py-3 md:py-4 rounded-full hover:bg-white hover:text-[#1e3a8a] transition text-base md:text-lg">
                    Konsultasi Jurusan
                </a>
            </div>
        </div>
    </div>
</section>
@endsection