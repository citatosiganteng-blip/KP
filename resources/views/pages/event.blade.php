@extends('layouts.app')
@section('title', 'Event - SMKS Cipta Insani Mandiri')
@section('description', 'Prestasi dan kegiatan SMKS Cipta Insani Mandiri.')

@section('content')
{{-- 1. Hero Event --}}
<section class="relative bg-[#1e3a8a] text-white py-14 md:py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 60% -10%, #f5c542 0%, transparent 60%);"></div>
    <div class="container relative mx-auto px-4 md:px-6 text-center z-10">
        <span class="inline-block rounded-full bg-[#f5c542]/20 px-4 py-1.5 text-xs font-extrabold uppercase tracking-widest text-[#f5c542] mb-6 border border-[#f5c542]/30">🏆 Event & Aktivitas</span>
        <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4 text-[#f5c542]">Event Sekolah</h1>
        <p class="text-base md:text-xl text-gray-200 max-w-2xl mx-auto font-light leading-relaxed">
            Prestasi membanggakan dan berbagai kegiatan yang menunjang pengembangan karakter serta kreativitas siswa SMKS CIM.
        </p>
    </div>
</section>

{{-- 2. Tab Switcher --}}
<section class="py-10 md:py-20 bg-white">
    <div class="container mx-auto px-4 md:px-6">
        {{-- Tab Buttons --}}
        <div class="flex justify-center mb-8 md:mb-14">
            <div class="inline-flex bg-gray-100 rounded-full p-1.5 shadow-inner">
                <button onclick="switchTab('prestasi')" id="tab-btn-prestasi"
                    class="tab-btn px-5 sm:px-8 py-2.5 sm:py-3 rounded-full text-xs sm:text-sm font-bold transition-all duration-300 bg-[#1e3a8a] text-white shadow-md">
                    🏆 Prestasi
                </button>
                <button onclick="switchTab('kegiatan')" id="tab-btn-kegiatan"
                    class="tab-btn px-5 sm:px-8 py-2.5 sm:py-3 rounded-full text-xs sm:text-sm font-bold transition-all duration-300 text-gray-500 hover:text-[#1e3a8a]">
                    📅 Kegiatan
                </button>
            </div>
        </div>

        {{-- ==================== TAB: PRESTASI ==================== --}}
        <div id="tab-prestasi" class="tab-content">
          
            {{-- Prestasi Unggulan --}}
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-[#f5c542] font-bold tracking-wider uppercase text-sm">Pencapaian Terbaik</span>
                <h2 class="mt-2 text-2xl md:text-4xl font-extrabold text-[#1e3a8a]">Prestasi Unggulan</h2>
                <p class="mt-4 text-gray-600">Penghargaan bergengsi yang menjadi kebanggaan seluruh civitas akademika SMKS CIM.</p>
            </div>

            <div class="grid gap-5 md:gap-8 md:grid-cols-3 mb-12 md:mb-20">
                @php
                    $prestasiUtama = [
                        [
                            'icon' => '🏆',
                            'title' => 'Kepala Sekolah Terbaik Nasional 2023',
                            'desc' => 'Diberikan kepada Kepala SMKS CIM sebagai Kepala Sekolah Inspiratif Terbaik 1 tingkat Nasional.',
                            'level' => 'Nasional',
                            'tahun' => '2023',
                        ],
                        [
                            'icon' => '🌱',
                            'title' => '2024 Waste Hero School',
                            'desc' => 'Penghargaan atas partisipasi aktif dalam kompetisi Waste Hero School tingkat internasional.',
                            'level' => 'Internasional',
                            'tahun' => '2024',
                        ],
                        [
                            'icon' => '🎓',
                            'title' => 'Lulusan Terbaik di PTN',
                            'desc' => 'Siswa kami berhasil lulus seleksi SNBT & SNBP di Universitas Brawijaya dan Universitas Pendidikan Indonesia.',
                            'level' => 'Nasional',
                            'tahun' => '2024',
                        ],
                    ];
                @endphp

                @foreach ($prestasiUtama as $p)
                    <div class="bg-white p-5 md:p-8 rounded-2xl shadow-sm border-l-4 border-[#f5c542] hover:shadow-xl transition-all duration-300 group relative overflow-hidden">
                        <div class="absolute top-0 right-0 bg-[#1e3a8a] text-white text-xs font-bold px-3 py-1 rounded-bl-lg">{{ $p['tahun'] }}</div>
                        <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300 inline-block">{{ $p['icon'] }}</div>
                        <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 group-hover:text-[#f59e0b] transition-colors duration-300">{{ $p['title'] }}</h3>
                        <p class="text-sm text-gray-600 leading-relaxed mb-4">{{ $p['desc'] }}</p>
                        <span class="inline-block text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full
                            {{ $p['level'] === 'Internasional' ? 'bg-emerald-100 text-emerald-700' : 'bg-blue-100 text-[#1e3a8a]' }}">
                            {{ $p['level'] }}
                        </span>
                    </div>
                @endforeach
            </div>

            {{-- Galeri Prestasi --}}
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-[#f5c542] font-bold tracking-wider uppercase text-sm">Dokumentasi Prestasi</span>
                <h2 class="mt-2 text-2xl md:text-4xl font-extrabold text-[#1e3a8a]">Galeri Prestasi</h2>
                <p class="mt-4 text-gray-600">Foto-foto dokumentasi kebanggaan pencapaian SMKS CIM.</p>
            </div>

            <div class="grid gap-2.5 md:gap-4 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mb-12 md:mb-20">
                @php
                    $galeriPrestasi = [
                        ['img' => 'prestasi1.jpg', 'caption' => 'Penghargaan Kepala Sekolah'],
                        ['img' => 'prestasi2.jpg', 'caption' => 'Penyerahan Trofi'],
                        ['img' => 'prestasi3.jpg', 'caption' => 'Siswa Berprestasi'],
                        ['img' => 'prestasi4.jpg', 'caption' => 'Seremoni Penghargaan'],
                    ];
                @endphp

                @foreach ($galeriPrestasi as $gp)
                    <div class="group cursor-pointer rounded-xl md:rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 relative aspect-square">
                        @if(file_exists(public_path('images/' . $gp['img'])))
                            <img src="{{ asset('images/' . $gp['img']) }}" alt="{{ $gp['caption'] }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-[#1e3a8a] to-[#3b5fc0] flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="#f5c542" class="w-12 h-12 opacity-50"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/></svg>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-[#1e3a8a]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="text-white text-sm font-bold tracking-wide">{{ $gp['caption'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Prestasi Siswa --}}
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-[#f5c542] font-bold tracking-wider uppercase text-sm">Student Achievement</span>
                <h2 class="mt-2 text-2xl md:text-4xl font-extrabold text-[#1e3a8a]">Prestasi Siswa</h2>
                <p class="mt-4 text-gray-600">Berbagai pencapaian membanggakan yang diraih oleh siswa-siswi SMKS CIM di berbagai bidang.</p>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                @php
                    $prestasiSiswa = [
                        ['nama' => 'Tim Basket Putra', 'prestasi' => 'Juara 2 Turnamen Antar SMK Se-Depok', 'tahun' => '2024', 'kategori' => 'Olahraga'],
                        ['nama' => 'Tim Paskibra', 'prestasi' => 'Juara 1 Lomba Baris-Berbaris Tingkat Kota Depok', 'tahun' => '2024', 'kategori' => 'Non-Akademik'],
                        ['nama' => 'Tim DKV', 'prestasi' => 'Finalis Lomba Desain Poster Nasional', 'tahun' => '2023', 'kategori' => 'Akademik'],
                        ['nama' => 'Tim Broadcasting', 'prestasi' => 'Best Short Film Festival Pelajar Jawa Barat', 'tahun' => '2024', 'kategori' => 'Akademik'],
                        ['nama' => 'Tim Pencak Silat', 'prestasi' => 'Medali Emas Kejuaraan Silat Pelajar Se-Jabar', 'tahun' => '2023', 'kategori' => 'Olahraga'],
                        ['nama' => 'Tim Tahfidz', 'prestasi' => 'Juara 3 MTQ Tingkat Kota Depok', 'tahun' => '2024', 'kategori' => 'Keagamaan'],
                    ];
                @endphp

                @foreach ($prestasiSiswa as $ps)
                    <div class="bg-gray-50 rounded-2xl p-4 md:p-6 border border-gray-100 hover:shadow-lg hover:border-[#f5c542]/50 transition-all duration-300 flex gap-3 md:gap-5 items-start group">
                        <div class="flex-shrink-0 w-11 h-11 md:w-14 md:h-14 rounded-xl bg-[#1e3a8a] flex items-center justify-center group-hover:bg-[#f5c542] transition-colors duration-300">
                            @if($ps['kategori'] === 'Olahraga')
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-white group-hover:text-[#1e3a8a] transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17.93c-.52.07-1.06.07-1.58.02l-.2-.85c-.46-.12-.88-.33-1.25-.61l-.82.33c-.34-.36-.64-.76-.88-1.2l.62-.62c-.12-.45-.16-.93-.12-1.39l-.78-.47c.1-.49.26-.96.48-1.39l.84-.14c.28-.38.62-.72 1.01-.98l-.12-.85c.42-.23.87-.4 1.35-.51l.54.7c.47-.02.93.04 1.37.17l.56-.68c.46.16.89.38 1.28.66l-.18.86c.34.32.62.7.82 1.12l.79.23c.06.49.06.99-.02 1.48l-.82.35c-.18.43-.42.83-.73 1.17l.26.84c-.35.38-.74.7-1.17.96l-.72-.47c-.44.17-.91.26-1.4.28l-.4.8zm0-5.93a2 2 0 100-4 2 2 0 000 4z"/></svg>
                            @elseif($ps['kategori'] === 'Keagamaan')
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-white group-hover:text-[#1e3a8a] transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                            @else
                                <svg class="w-5 h-5 md:w-6 md:h-6 text-white group-hover:text-[#1e3a8a] transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24"><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
                            @endif
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-1.5 md:gap-2 mb-1">
                                <h3 class="text-sm md:text-base font-bold text-[#1e3a8a]">{{ $ps['nama'] }}</h3>
                                <span class="text-xs font-semibold px-2 py-0.5 rounded-full bg-gray-200 text-gray-500">{{ $ps['tahun'] }}</span>
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ $ps['prestasi'] }}</p>
                            <span class="inline-block mt-2 text-xs font-bold uppercase tracking-wider text-[#f59e0b]">{{ $ps['kategori'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- ==================== TAB: KEGIATAN ==================== --}}
        <div id="tab-kegiatan" class="tab-content hidden">
            {{-- Kegiatan Rutin --}}
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-[#f5c542] font-bold tracking-wider uppercase text-sm">Aktivitas Harian</span>
                <h2 class="mt-2 text-2xl md:text-4xl font-extrabold text-[#1e3a8a]">Kegiatan Rutin</h2>
                <p class="mt-4 text-gray-600">Program harian dan mingguan yang membentuk karakter serta meningkatkan kualitas siswa.</p>
            </div>

            <div class="grid gap-4 md:gap-6 md:grid-cols-2 lg:grid-cols-3 mb-12 md:mb-20">
                @php
                    $kegiatanRutin = [
                        ['title' => 'Tahsin & Tahfidz Al-Quran', 'desc' => 'Pembinaan membaca dan menghafal Al-Quran setiap hari sebelum kegiatan belajar mengajar dimulai.', 'waktu' => 'Setiap Hari', 'icon' => '📖'],
                        ['title' => 'Sholat Dhuha & Dzuhur Berjamaah', 'desc' => 'Pembiasaan ibadah sholat berjamaah untuk membentuk karakter religius siswa.', 'waktu' => 'Setiap Hari', 'icon' => '🕌'],
                        ['title' => 'Upacara Bendera', 'desc' => 'Upacara rutin setiap hari Senin untuk menanamkan jiwa nasionalisme dan kedisiplinan.', 'waktu' => 'Setiap Senin', 'icon' => '🇮🇩'],
                        ['title' => 'Jumat Bersih', 'desc' => 'Gotong royong membersihkan lingkungan sekolah sebagai wujud kepedulian terhadap kebersihan.', 'waktu' => 'Setiap Jumat', 'icon' => '🧹'],
                        ['title' => 'Latihan Ekstrakurikuler', 'desc' => 'Jadwal latihan rutin ekskul seperti basket, futsal, paskibra, tari, dan pencak silat.', 'waktu' => 'Setiap Minggu', 'icon' => '⚽'],
                        ['title' => 'Bimbingan Konseling', 'desc' => 'Layanan BK untuk membantu siswa dalam pengembangan diri dan penyelesaian masalah.', 'waktu' => 'Terjadwal', 'icon' => '💬'],
                    ];
                @endphp

                @foreach ($kegiatanRutin as $kr)
                    <div class="bg-gray-50 rounded-2xl p-5 md:p-7 border border-gray-100 hover:border-[#f5c542]/50 hover:shadow-lg transition-all duration-300 group">
                        <div class="flex items-center gap-3 md:gap-4 mb-3 md:mb-4">
                            <div class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-[#1e3a8a] flex items-center justify-center text-lg md:text-xl group-hover:bg-[#f5c542] transition-colors duration-300">
                                {{ $kr['icon'] }}
                            </div>
                            <span class="text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-blue-100 text-[#1e3a8a]">{{ $kr['waktu'] }}</span>
                        </div>
                        <h3 class="text-base md:text-lg font-bold text-[#1e3a8a] mb-2 group-hover:text-[#f59e0b] transition-colors duration-300">{{ $kr['title'] }}</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">{{ $kr['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            {{-- Galeri Kegiatan Rutin --}}
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-[#f5c542] font-bold tracking-wider uppercase text-sm">Dokumentasi Kegiatan</span>
                <h2 class="mt-2 text-2xl md:text-4xl font-extrabold text-[#1e3a8a]">Galeri Kegiatan Rutin</h2>
                <p class="mt-4 text-gray-600">Momen-momen kegiatan rutin harian dan mingguan siswa.</p>
            </div>

            <div class="grid gap-2.5 md:gap-4 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mb-12 md:mb-20">
                @php
                    $galeriKegiatanRutin = [
                        ['img' => 'kegiatan-rutin1.jpg', 'caption' => 'Tahsin Pagi'],
                        ['img' => 'kegiatan-rutin2.jpg', 'caption' => 'Sholat Berjamaah'],
                        ['img' => 'kegiatan-rutin3.jpg', 'caption' => 'Upacara Bendera'],
                        ['img' => 'kegiatan-rutin4.jpg', 'caption' => 'Jumat Bersih'],
                    ];
                @endphp

                @foreach ($galeriKegiatanRutin as $gkr)
                    <div class="group cursor-pointer rounded-xl md:rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 relative aspect-square">
                        @if(file_exists(public_path('images/' . $gkr['img'])))
                            <img src="{{ asset('images/' . $gkr['img']) }}" alt="{{ $gkr['caption'] }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-[#1e3a8a] to-[#3b5fc0] flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="#f5c542" class="w-12 h-12 opacity-50"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/></svg>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-[#1e3a8a]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="text-white text-sm font-bold tracking-wide">{{ $gkr['caption'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Kegiatan Tahunan (Timeline) --}}
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-[#f5c542] font-bold tracking-wider uppercase text-sm">Agenda Tahunan</span>
                <h2 class="mt-2 text-2xl md:text-4xl font-extrabold text-[#1e3a8a]">Kegiatan Tahunan</h2>
                <p class="mt-4 text-gray-600">Event besar dan kegiatan tahunan yang menjadi tradisi kebanggaan SMKS CIM.</p>
            </div>

            @php
                $kegiatanTahunan = [
                    ['bulan' => 'Juli', 'title' => 'MPLS (Masa Pengenalan Lingkungan Sekolah)', 'desc' => 'Orientasi siswa baru untuk mengenal lingkungan, budaya, dan tata tertib sekolah.', 'icon' => '🎒'],
                    ['bulan' => 'Agustus', 'title' => 'Peringatan HUT RI', 'desc' => 'Rangkaian kegiatan lomba dan upacara memperingati Hari Kemerdekaan Republik Indonesia.', 'icon' => '🎗️'],
                    ['bulan' => 'Oktober', 'title' => 'Class Meeting & Turnamen', 'desc' => 'Kompetisi antar kelas dalam berbagai bidang olahraga, seni, dan akademik.', 'icon' => '🏅'],
                    ['bulan' => 'Desember', 'title' => 'Market Day & Expo Karya', 'desc' => 'Pameran hasil karya siswa dari semua jurusan dan bazar kewirausahaan.', 'icon' => '🎨'],
                    ['bulan' => 'Januari', 'title' => 'PPDB Gelombang 1', 'desc' => 'Pembukaan pendaftaran peserta didik baru gelombang pertama tahun ajaran baru.', 'icon' => '📝'],
                    ['bulan' => 'Maret', 'title' => 'Wisuda & Pelepasan Kelas XII', 'desc' => 'Acara wisuda dan pelepasan siswa kelas XII yang telah menyelesaikan masa studi.', 'icon' => '🎓'],
                ];
            @endphp

            <div class="relative mb-12 md:mb-20">
                {{-- Timeline line (left on mobile, center on desktop) --}}
                <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-0.5 bg-[#1e3a8a]/20 md:-translate-x-1/2"></div>

                <div class="space-y-6 md:space-y-12">
                    @foreach ($kegiatanTahunan as $index => $kt)
                        <div class="relative flex items-start md:items-center gap-0 md:gap-6 flex-row md:{{ $index % 2 === 0 ? 'flex-row' : 'flex-row-reverse' }}">
                            {{-- Mobile dot --}}
                            <div class="md:hidden flex-shrink-0 w-8 flex justify-center pt-7">
                                <div class="w-3.5 h-3.5 rounded-full bg-[#f5c542] border-[3px] border-white shadow-md z-10"></div>
                            </div>
                            <div class="flex-1 md:w-5/12 {{ $index % 2 === 0 ? 'md:text-right' : 'md:text-left' }}">
                                <div class="bg-white rounded-xl md:rounded-2xl p-5 md:p-7 shadow-sm border border-gray-100 hover:shadow-xl hover:border-[#f5c542]/50 transition-all duration-300 group">
                                    <div class="flex items-center gap-3 mb-3 {{ $index % 2 === 0 ? 'md:flex-row-reverse' : '' }}">
                                        <span class="text-2xl group-hover:scale-110 transition-transform duration-300 inline-block">{{ $kt['icon'] }}</span>
                                        <span class="text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full bg-[#f5c542]/20 text-[#1e3a8a]">{{ $kt['bulan'] }}</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-[#1e3a8a] mb-2 group-hover:text-[#f59e0b] transition-colors duration-300">{{ $kt['title'] }}</h3>
                                    <p class="text-sm text-gray-600 leading-relaxed">{{ $kt['desc'] }}</p>
                                </div>
                            </div>
                            <div class="hidden md:flex w-2/12 justify-center">
                                <div class="w-5 h-5 rounded-full bg-[#f5c542] border-4 border-white shadow-md z-10"></div>
                            </div>
                            <div class="hidden md:block w-5/12"></div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Galeri Kegiatan Tahunan --}}
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-[#f5c542] font-bold tracking-wider uppercase text-sm">Dokumentasi Event</span>
                <h2 class="mt-2 text-2xl md:text-4xl font-extrabold text-[#1e3a8a]">Galeri Kegiatan Tahunan</h2>
                <p class="mt-4 text-gray-600">Dokumentasi acara-acara besar dan event tahunan SMKS CIM.</p>
            </div>

            <div class="grid gap-2.5 md:gap-4 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mb-12 md:mb-20">
                @php
                    $galeriKegiatanTahunan = [
                        ['img' => 'kegiatan-tahunan1.jpg', 'caption' => 'MPLS'],
                        ['img' => 'kegiatan-tahunan2.jpg', 'caption' => 'HUT RI'],
                        ['img' => 'kegiatan-tahunan3.jpg', 'caption' => 'Class Meeting'],
                        ['img' => 'kegiatan-tahunan4.jpg', 'caption' => 'Market Day'],
                    ];
                @endphp

                @foreach ($galeriKegiatanTahunan as $gkt)
                    <div class="group cursor-pointer rounded-xl md:rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 relative aspect-square">
                        @if(file_exists(public_path('images/' . $gkt['img'])))
                            <img src="{{ asset('images/' . $gkt['img']) }}" alt="{{ $gkt['caption'] }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-[#1e3a8a] to-[#3b5fc0] flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2" stroke="#f5c542" class="w-12 h-12 opacity-50"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/></svg>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-[#1e3a8a]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="text-white text-sm font-bold tracking-wide">{{ $gkt['caption'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Galeri Kegiatan --}}
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-[#f5c542] font-bold tracking-wider uppercase text-sm">Dokumentasi</span>
                <h2 class="mt-2 text-2xl md:text-4xl font-extrabold text-[#1e3a8a]">Galeri Kegiatan</h2>
                <p class="mt-4 text-gray-600">Momen-momen berharga dari berbagai kegiatan yang telah dilaksanakan.</p>
            </div>

            <div class="grid gap-2.5 md:gap-4 grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @php
                    $galeri = [
                        ['img' => 'dkv4.png', 'caption' => 'Penilaian Workshop DKV'],
                        ['img' => 'paskibra.png', 'caption' => 'Latihan Paskibra'],
                        ['img' => 'tari.jpeg', 'caption' => 'Penampilan Tari'],
                        ['img' => 'futsal.png', 'caption' => 'Pertandingan Futsal'],
                        ['img' => 'Broadcast1.png', 'caption' => 'Praktik Broadcasting'],
                        ['img' => 'badminton.png', 'caption' => 'Latihan Bulu Tangkis'],
                        ['img' => 'dkv1.png', 'caption' => 'Workshop DKV'],
                        ['img' => 'tkj4.png', 'caption' => 'Perakitan PC'],
                    ];
                @endphp

                @foreach ($galeri as $g)
                    <div class="group cursor-pointer rounded-xl md:rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 relative aspect-square">
                        <img src="{{ asset('images/' . $g['img']) }}" alt="{{ $g['caption'] }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#1e3a8a]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="text-white text-sm font-bold tracking-wide">{{ $g['caption'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- 3. CTA --}}
<section class="py-10 md:py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="rounded-3xl bg-[#1e3a8a] p-10 md:p-16 text-center shadow-2xl relative overflow-hidden">
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-[#f5c542] rounded-full opacity-20 blur-3xl"></div>
            <div class="absolute -bottom-16 -left-16 w-48 h-48 bg-[#f5c542] rounded-full opacity-10 blur-2xl"></div>
            
            <h2 class="text-2xl md:text-4xl font-bold text-white relative z-10">Jadilah Bagian Dari Kami! 🎉</h2>
            <p class="mt-3 md:mt-4 text-gray-300 max-w-2xl mx-auto relative z-10 text-sm md:text-lg">Bergabunglah dengan SMKS CIM dan raih prestasi terbaikmu melalui pendidikan berkualitas.</p>
            <a href="{{ route('ppdb') }}" class="mt-6 md:mt-8 inline-block bg-[#f5c542] hover:bg-[#eab308] text-[#1e3a8a] font-extrabold px-8 md:px-10 py-3 md:py-4 rounded-full shadow-lg transition transform hover:scale-105 relative z-10 text-base md:text-lg">
                Daftar Sekarang
            </a>
        </div>
    </div>
</section>

<script>
    function switchTab(tab) {
        // Hide all tabs
        document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
        // Reset all buttons
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('bg-[#1e3a8a]', 'text-white', 'shadow-md');
            btn.classList.add('text-gray-500');
        });
        // Show selected tab
        document.getElementById('tab-' + tab).classList.remove('hidden');
        // Activate selected button
        const activeBtn = document.getElementById('tab-btn-' + tab);
        activeBtn.classList.add('bg-[#1e3a8a]', 'text-white', 'shadow-md');
        activeBtn.classList.remove('text-gray-500');
    }
</script>
@endsection
