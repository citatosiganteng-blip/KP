@extends('layouts.app')
@section('title', 'Profil Sekolah - SMKS Cipta Insani Mandiri')
@section('description', 'Visi, misi, dan keunggulan pendidikan SMKS Cipta Insani Mandiri Depok.')

@section('content')
{{-- 1. Hero Profil --}}
<section class="relative bg-[#1e3a8a] text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 30% 50%, #f5c542 0%, transparent 50%);"></div>
    <div class="container relative mx-auto px-6 text-center z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight text-[#f5c542]">Profil Sekolah</h1>
        <p class="mt-6 text-lg md:text-xl text-gray-300 max-w-3xl mx-auto font-light">
            Mengenal lebih dekat institusi pendidikan yang berdedikasi mencetak generasi Kreatif, Santun, dan Berkarakter.
        </p>
    </div>
</section>

{{-- 2. Visi & Misi (Sesuai Brosur Foto 2) --}}
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid gap-16 md:grid-cols-2 items-center">
            <div class="relative group">
                <div class="absolute -inset-4 bg-[#f5c542]/20 rounded-3xl transform -rotate-2 group-hover:rotate-0 transition duration-500"></div>
                <img src="{{ asset('images/profil-img.png') }}" alt="Aktivitas Siswa CIM" class="relative rounded-2xl shadow-xl w-full h-auto object-cover">
            </div>

            <div class="space-y-10">
                <div>
                    <span class="text-[#f5c542] font-bold tracking-widest uppercase text-sm border-b-2 border-[#f5c542] pb-1">Visi</span>
                    <h2 class="mt-4 text-3xl font-extrabold text-[#1e3a8a] leading-tight italic">
                        "Unggul dalam layanan pembelajaran, kegiatan berwawasan islami, religius, nyaman, aman dan berkarakter"
                    </h2>
                </div>

                <div>
                    <span class="text-[#f5c542] font-bold tracking-widest uppercase text-sm border-b-2 border-[#f5c542] pb-1">Misi</span>
                    <ul class="mt-6 space-y-4">
                        @foreach ([
                            'Membangun karakter siswa melalui pendidikan formal, non-formal, dan wawasan kebangsaan.',
                            'Meningkatkan kerjasama dengan orangtua siswa dalam pembentukan karakter dan prestasi siswa.',
                            'Menyelenggarakan pendidikan kejuruan yang relevan dengan kebutuhan industri masa kini.'
                        ] as $m)
                            <li class="flex gap-4 items-start group">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-[#1e3a8a] text-[#f5c542] flex items-center justify-center text-xs group-hover:scale-110 transition">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                </span>
                                <span class="text-gray-700 leading-relaxed font-medium">{{ $m }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3. Keunggulan CIM School (Sesuai Brosur Foto 2) --}}
<section class="py-24 bg-[#1e3a8a]">
    <div class="container mx-auto px-6 text-center text-white">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-12">Keunggulan <span class="text-[#f5c542]">CIM School</span></h2>
        
        <div class="grid gap-6 md:grid-cols-3">
            @php
                $keunggulan = [
                    ['title' => 'Bebas Biaya Gedung', 'desc' => 'Tidak ada uang gedung, uang pangkal, dan uang praktik.'],
                    ['title' => 'Beasiswa Pendidikan', 'desc' => 'Tersedia program beasiswa bagi siswa berprestasi.'],
                    ['title' => 'Sistem Infaq', 'desc' => 'Biaya bulanan fleksibel berbasis infaq untuk mendukung sosial.'],
                    ['title' => 'Kurikulum Islami', 'desc' => 'Muatan Islami 10 jam untuk pembentukan karakter mulia.'],
                    ['title' => 'SDGs & Lingkungan', 'desc' => 'Kurikulum berbasis SDGs dan Project berwawasan lingkungan.'],
                    ['title' => 'Layanan Nyaman', 'desc' => 'Fasilitas pembelajaran yang aman, religius, dan nyaman.'],
                ];
            @endphp

            @foreach ($keunggulan as $k)
                <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 hover:bg-white/20 transition group">
                    <h3 class="text-xl font-bold text-[#f5c542] mb-3">{{ $k['title'] }}</h3>
                    <p class="text-gray-200 text-sm leading-relaxed">{{ $k['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 4. Prestasi & Penghargaan (Sesuai Brosur Foto 3) --}}
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <span class="text-[#1e3a8a] font-bold tracking-widest uppercase text-sm">Recognitions</span>
            <h2 class="mt-2 text-3xl md:text-4xl font-extrabold text-[#1e3a8a]">Prestasi & Penghargaan</h2>
        </div>

        <div class="grid gap-8 md:grid-cols-3">
            <div class="bg-white p-8 rounded-2xl shadow-sm border-l-4 border-[#f5c542] hover:shadow-lg transition">
                <div class="text-4xl mb-4">🏆</div>
                <h3 class="text-lg font-bold text-[#1e3a8a] mb-2">Kepala Sekolah Terbaik Nasional 2023</h3>
                <p class="text-sm text-gray-600">Diberikan kepada Kepala SMKS CIM sebagai Kepala Sekolah Inspiratif Terbaik 1 tingkat Nasional.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border-l-4 border-[#f5c542] hover:shadow-lg transition">
                <div class="text-4xl mb-4">🌱</div>
                <h3 class="text-lg font-bold text-[#1e3a8a] mb-2">2024 Waste Hero School</h3>
                <p class="text-sm text-gray-600">Penghargaan atas partisipasi aktif dalam kompetisi Waste Hero School tingkat internasional.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border-l-4 border-[#f5c542] hover:shadow-lg transition">
                <div class="text-4xl mb-4">🎓</div>
                <h3 class="text-lg font-bold text-[#1e3a8a] mb-2">Lulusan Terbaik di PTN</h3>
                <p class="text-sm text-gray-600">Siswa kami berhasil lulus seleksi SNBT & SNBP di Universitas Brawijaya dan Universitas Pendidikan Indonesia.</p>
            </div>
        </div>
    </div>
</section>
@endsection