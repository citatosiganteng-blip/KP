@extends('layouts.app')
@section('title', 'Kesiswaan - Intra & Ekstrakurikuler')
@section('description', 'Kegiatan pengembangan diri, ekstrakurikuler, dan kemitraan strategis SMKS Cipta Insani Mandiri.')

@section('content')
{{-- 1. Hero Kesiswaan --}}
<section class="relative bg-[#1e3a8a] text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 50% -20%, #f5c542 0%, transparent 70%);"></div>
    <div class="container relative mx-auto px-6 text-center z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-4 text-[#f5c542]">Kesiswaan</h1>
        <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto font-light leading-relaxed">
            Membentuk karakter siswa melalui kegiatan intra dan ekstrakurikuler serta kemitraan strategis untuk mendukung minat dan bakat.
        </p>
    </div>
</section>

{{-- 2. Intra & Ekstrakurikuler (Grid dengan Foto) --}}
<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-[#f5c542] font-bold tracking-wider uppercase text-sm">Pengembangan Diri</span>
            <h2 class="mt-2 text-3xl md:text-4xl font-extrabold text-[#1e3a8a]">Intra & Ekstrakurikuler</h2>
            <p class="mt-4 text-gray-600">Salurkan minat dan kembangkan potensi terbaikmu di luar jam pelajaran akademik.</p>
        </div>
        
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
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
                <div class="group cursor-pointer rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 bg-gray-50 relative">
                    <div class="h-56 overflow-hidden bg-gray-200">
                        @if($ekskul['img'])
                            <img src="{{ asset('images/' . $ekskul['img']) }}" alt="{{ $ekskul['nama'] }}" class="w-full h-full object-cover group-hover:scale-110 group-hover:rotate-1 transition-transform duration-500">
                        @else
                            <img src="https://placehold.co/400x300/1e3a8a/f5c542?text=Foto\n{{ $ekskul['nama'] }}" alt="{{ $ekskul['nama'] }}" class="w-full h-full object-cover group-hover:scale-110 group-hover:rotate-1 transition-transform duration-500">
                        @endif
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1e3a8a]/90 via-[#1e3a8a]/20 to-transparent flex items-end p-6">
                        <p class="text-white text-xl font-bold tracking-wide transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">{{ $ekskul['nama'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- 3. Kemitraan dan Kerjasama (Sesuai Brosur) --}}
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-[#f5c542] font-bold tracking-wider uppercase text-sm">Relasi Institusi</span>
            <h2 class="mt-2 text-3xl md:text-4xl font-extrabold text-[#1e3a8a]">Kemitraan dan Kerjasama</h2>
            <p class="mt-4 text-gray-600">Kami bekerja sama dengan berbagai pihak untuk memastikan kualitas pendidikan dan penyaluran lulusan yang optimal.</p>
        </div>
        
        <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @php
                // Data disesuaikan persis dengan foto brosur Kemitraan
                $mitraList = [
                    'Koni',
                    'Solit 03',
                    'Inara Creative Production',
                    'Dinas Kesehatan dan perpustakaan',
                    'DPRD Depok',
                    'TNI',
                    'Polri',
                    'IBI Kosgoro'
                ];
            @endphp

            @foreach ($mitraList as $mitra)
                <div class="bg-white rounded-xl p-6 text-center shadow-sm border border-gray-100 hover:border-[#f5c542] hover:shadow-md transition-all duration-300 flex items-center justify-center group">
                    <p class="text-base font-bold text-[#1e3a8a] group-hover:text-[#f59e0b] transition-colors duration-300">
                        {{ $mitra }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection