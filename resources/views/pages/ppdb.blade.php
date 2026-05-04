@extends('layouts.app')
@section('title', 'PPDB 2026/2027 - SMKS Cipta Insani Mandiri')
@section('description', 'Informasi pendaftaran, alur, dan persyaratan pendaftaran peserta didik baru SMKS CIM tahun ajaran 2026/2027.')

@section('content')
{{-- 1. Hero PPDB --}}
<section class="relative bg-[#1e3a8a] text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 50% 120%, #f5c542 0%, transparent 60%);"></div>
    <div class="container relative mx-auto px-6 text-center z-10">
        <span class="text-[#f5c542] font-bold tracking-widest uppercase text-sm">Penerimaan Murid Baru</span>
        <h1 class="mt-4 text-4xl md:text-5xl font-extrabold tracking-tight">PPDB TA 2026 / 2027</h1>
        <p class="mt-6 text-lg md:text-xl text-gray-300 max-w-2xl mx-auto font-light">
            Bergabunglah bersama kami untuk mencetak masa depan yang kreatif, santun, dan berkarakter.
        </p>
    </div>
</section>

{{-- 2. Konten Utama PPDB --}}
<section class="py-24 bg-gray-50">
    <div class="container mx-auto px-6 grid gap-12 lg:grid-cols-3">
        
        <div class="lg:col-span-2 space-y-12">
            
            {{-- Alur Pendaftaran (Sesuai Foto 3) --}}
            <div class="bg-white rounded-3xl p-8 md:p-10 shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold text-[#1e3a8a] mb-8 flex items-center gap-3">
                    <span class="w-2 h-8 bg-[#f5c542] rounded-full"></span>
                    Alur Pendaftaran
                </h2>
                <div class="grid gap-6">
                    @php
                        $alur = [
                            'Mengisi formulir pendaftaran secara online atau datang langsung ke sekolah.',
                            'Melengkapi berkas persyaratan administrasi.',
                            'Melakukan verifikasi data dan wawancara.',
                            'Pengumuman hasil seleksi.',
                            'Daftar ulang bagi calon siswa yang diterima.'
                        ];
                    @endphp
                    @foreach ($alur as $index => $step)
                        <div class="flex gap-5 items-start group">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#1e3a8a] text-[#f5c542] flex items-center justify-center font-bold shadow-md group-hover:bg-[#f5c542] group-hover:text-[#1e3a8a] transition-colors duration-300">
                                {{ $index + 1 }}
                            </div>
                            <p class="text-gray-700 font-medium pt-2">{{ $step }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Persyaratan (Sesuai Foto 3) --}}
            <div class="bg-white rounded-3xl p-8 md:p-10 shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold text-[#1e3a8a] mb-8 flex items-center gap-3">
                    <span class="w-2 h-8 bg-[#f5c542] rounded-full"></span>
                    Persyaratan Berkas
                </h2>
                <div class="grid sm:grid-cols-2 gap-4">
                    @foreach ([
                        'Mengisi formulir pendaftaran',
                        'Fotocopy Akta Kelahiran',
                        'Fotocopy Kartu Keluarga',
                        'Fotocopy KTP Orang Tua',
                        'Pas photo 3x4 (2 Lembar)',
                        'Fotocopy ijazah legalisir (menyusul)',
                    ] as $syarat)
                        <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-xl border border-gray-100 hover:border-[#f5c542] transition-colors">
                            <svg class="w-5 h-5 text-[#f5c542]" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <span class="text-sm font-semibold text-gray-700">{{ $syarat }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Jadwal Gelombang (Sesuai Foto 3) --}}
            <div class="bg-white rounded-3xl p-8 md:p-10 shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold text-[#1e3a8a] mb-6 flex items-center gap-3">
                    <span class="w-2 h-8 bg-[#f5c542] rounded-full"></span>
                    Jadwal Gelombang
                </h2>
                <div class="overflow-hidden rounded-2xl border border-gray-100">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-[#1e3a8a] text-[#f5c542]">
                            <tr>
                                <th class="p-4 font-bold uppercase tracking-wider text-sm">Gelombang</th>
                                <th class="p-4 font-bold uppercase tracking-wider text-sm">Periode Pendaftaran</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="bg-blue-50/50">
                                <td class="p-4 font-bold text-[#1e3a8a]">Gelombang 1</td>
                                <td class="p-4 text-gray-700 font-medium">08 Januari – 08 Maret 2026</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-gray-400">Gelombang 2</td>
                                <td class="p-4 text-gray-400 italic">Segera Dibuka</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Sidebar Info --}}
        <aside class="space-y-6">
            <div class="bg-gradient-to-br from-[#1e3a8a] to-[#3b1d6b] rounded-3xl p-8 text-white shadow-xl relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-[#f5c542] rounded-full opacity-10 blur-2xl"></div>
                
                <h3 class="text-xl font-bold mb-4 relative z-10">Daftar Sekarang</h3>
                <p class="text-sm text-gray-300 leading-relaxed mb-8 relative z-10">Hubungi panitia PPDB melalui WhatsApp untuk mendapatkan link formulir online atau informasi biaya pendidikan.</p>
                
                <a href="https://wa.me/6285777119248" target="_blank" class="flex items-center justify-center gap-3 bg-[#f5c542] hover:bg-[#eab308] text-[#1e3a8a] font-black py-4 rounded-full shadow-lg transition transform hover:-translate-y-1 mb-8 relative z-10">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" class="w-5 h-5" alt="WA">
                    WhatsApp Panitia
                </a>

                <div class="space-y-4 pt-6 border-t border-white/10 relative z-10">
                    <div class="flex items-center gap-4 text-sm">
                        <span class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center text-lg">📞</span>
                        <span class="font-semibold">0857-7711-9248</span>
                    </div>
                    <div class="flex items-center gap-4 text-sm">
                        <span class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center text-lg">📷</span>
                        <a href="https://instagram.com/smkcimdepok" target="_blank" class="font-semibold hover:text-[#f5c542]">@smkcimdepok</a>
                    </div>
                    <div class="flex items-center gap-4 text-sm">
                        <span class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center text-lg">📍</span>
                        <span class="font-semibold leading-tight text-xs uppercase">Tanah Baru, Beji, Depok</span>
                    </div>
                </div>
            </div>

            {{-- Info Tambahan Card --}}
            <div class="bg-[#f5c542]/10 border-2 border-dashed border-[#f5c542] rounded-3xl p-6">
                <p class="text-[#1e3a8a] text-sm font-bold leading-relaxed">
                    "Kuota terbatas untuk setiap Program Keahlian. Pastikan kamu melakukan pendaftaran lebih awal untuk mengamankan bangku di sekolah impianmu!"
                </p>
            </div>
        </aside>

    </div>
</section>
@endsection