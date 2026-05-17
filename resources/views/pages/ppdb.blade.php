@extends('layouts.app')
@section('title', 'PPDB 2026/2027 - SMKS Cipta Insani Mandiri')
@section('description', 'Informasi pendaftaran, alur, dan persyaratan pendaftaran peserta didik baru SMKS CIM tahun ajaran 2026/2027.')

@section('content')
{{-- 1. Hero PPDB --}}
<section class="relative bg-[#1e3a8a] text-white py-14 md:py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 50% 120%, #f5c542 0%, transparent 60%);"></div>
    <div class="container relative mx-auto px-4 md:px-6 text-center z-10">
        <span class="text-[#f5c542] font-bold tracking-widest uppercase text-sm">Penerimaan Murid Baru</span>
        <h1 class="mt-4 text-3xl md:text-5xl font-extrabold tracking-tight text-white">PPDB TA 2026 / 2027</h1>
        <p class="mt-6 text-lg md:text-xl text-gray-300 max-w-2xl mx-auto font-light">
            Bergabunglah bersama kami untuk mencetak masa depan yang kreatif, santun, dan berkarakter.
        </p>
    </div>
</section>

{{-- 2. Konten Utama PPDB --}}
<section class="py-14 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6 grid gap-8 md:gap-12 lg:grid-cols-3">
        
        <div class="lg:col-span-2 space-y-12">
            
            {{-- Alur Pendaftaran (Sesuai Foto 3) --}}
            <div class="bg-white rounded-2xl md:rounded-3xl p-5 md:p-10 shadow-sm border border-gray-100">
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
            <div class="bg-white rounded-2xl md:rounded-3xl p-5 md:p-10 shadow-sm border border-gray-100">
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
            <div class="bg-white rounded-2xl md:rounded-3xl p-5 md:p-10 shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold text-[#1e3a8a] mb-6 flex items-center gap-3">
                    <span class="w-2 h-8 bg-[#f5c542] rounded-full"></span>
                    Jadwal Gelombang
                </h2>
                <div class="overflow-hidden rounded-2xl border border-gray-100">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-[#1e3a8a] text-[#f5c542]">
                            <tr>
                                <th class="p-3 md:p-4 font-bold uppercase tracking-wider text-xs md:text-sm">Gelombang</th>
                                <th class="p-3 md:p-4 font-bold uppercase tracking-wider text-xs md:text-sm">Periode Pendaftaran</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="bg-blue-50/50">
                                <td class="p-3 md:p-4 font-bold text-[#1e3a8a] text-sm">Gelombang 1</td>
                                <td class="p-3 md:p-4 text-gray-700 font-medium text-sm">08 Januari – 08 Maret 2026</td>
                            </tr>
                            <tr>
                                <td class="p-3 md:p-4 font-bold text-gray-400 text-sm">Gelombang 2</td>
                                <td class="p-3 md:p-4 text-gray-400 italic text-sm">Segera Dibuka</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Sidebar Info --}}
        <aside class="space-y-6">
            <div class="bg-gradient-to-br from-[#1e3a8a] to-[#3b1d6b] rounded-2xl md:rounded-3xl p-6 md:p-8 text-white shadow-xl relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-[#f5c542] rounded-full opacity-10 blur-2xl"></div>
                
                <h3 class="text-xl font-bold mb-4 relative z-10 text-white">Daftar Sekarang</h3>
                <p class="text-sm text-gray-300 leading-relaxed mb-8 relative z-10">Hubungi panitia PPDB melalui WhatsApp untuk mendapatkan link formulir online atau informasi biaya pendidikan.</p>
                
                <a href="https://wa.me/6285777119248" target="_blank" class="flex items-center justify-center gap-3 bg-[#f5c542] hover:bg-[#eab308] text-[#1e3a8a] font-black py-4 rounded-full shadow-lg transition transform hover:-translate-y-1 mb-4 relative z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.272-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004a9.87 9.87 0 00-4.946 1.196c-1.54.892-2.776 2.577-2.776 4.761 0 1.464.356 2.84 1.02 4.033l-1.052 3.851 3.947-1.053c1.095.628 2.475.974 3.9.974h.004c5.444 0 9.944-4.467 9.944-9.986 0-2.66-.992-5.159-2.795-7.055a9.832 9.832 0 00-7.278-2.721"/>
                    </svg>
                    WhatsApp Panitia
                </a>
                <a href="https://wa.me/6285777119248" target="_blank" class="flex items-center justify-center gap-3 bg-white/10 hover:bg-white/20 text-white font-bold py-4 rounded-full border border-white/30 transition transform hover:-translate-y-1 mb-8 relative z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                    </svg>
                    Formulir Pendaftaran
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