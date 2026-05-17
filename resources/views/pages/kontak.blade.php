@extends('layouts.app')
@section('title', 'Kontak')
@section('description', 'Hubungi SMKS Cipta Insani Mandiri di Beji, Depok.')

@section('content')
<section class="relative bg-[#1e3a8a] text-white py-14 md:py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 50% -20%, #f5c542 0%, transparent 70%);"></div>
    <div class="container relative mx-auto px-4 md:px-6 text-center z-10">
        <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4 text-white">Kontak Kami</h1>
        <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto font-light leading-relaxed">
            Kunjungi atau hubungi kami — kami siap menjawab pertanyaan Anda.
        </p>
    </div>
</section>
<section class="py-14 md:py-24">
    <div class="container mx-auto px-4 md:px-6 grid gap-6 md:gap-10 lg:grid-cols-2">
        <div class="space-y-5">
            @foreach ([
                ['📍', 'Alamat',    'Jl. Curugan No 94 RT 06/12 Tanah Baru, Beji, Kota Depok, Jawa Barat'],
                ['📞', 'Telepon',   '0857-7711-9248'],
                ['✉️', 'Email',     'info@smkcim.sch.id'],
                ['📷', 'Instagram', '@smkcimdepok'],
            ] as [$icon, $label, $value])
                <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm hover:shadow-md hover:border-[#f5c542]/50 transition-all duration-300">
                    <p class="text-xs uppercase tracking-wider font-bold text-[#1e3a8a] flex items-center gap-2">
                        <span>{{ $icon }}</span> {{ $label }}
                    </p>
                    <p class="mt-2 text-gray-700 font-medium">{{ $value }}</p>
                </div>
            @endforeach

            <a href="https://wa.me/6285777119248" target="_blank"
               class="flex items-center justify-center gap-3 bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-6 rounded-2xl shadow-sm transition-all duration-300 hover:-translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.272-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004a9.87 9.87 0 00-4.946 1.196c-1.54.892-2.776 2.577-2.776 4.761 0 1.464.356 2.84 1.02 4.033l-1.052 3.851 3.947-1.053c1.095.628 2.475.974 3.9.974h.004c5.444 0 9.944-4.467 9.944-9.986 0-2.66-.992-5.159-2.795-7.055a9.832 9.832 0 00-7.278-2.721"/>
                </svg>
                Chat via WhatsApp
            </a>
        </div>
        <div class="rounded-2xl border border-gray-100 bg-white p-2 shadow-sm overflow-hidden">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1778224239856!2d106.7965392760229!3d-6.371028893619143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef9b21d690a1%3A0x487b90edfe5abfd1!2sSMK%20Cipta%20Insani%20Mandiri!5e0!3m2!1sid!2sid!4v1778122828805!5m2!1sid!2sid"
                class="w-full h-[300px] md:h-[450px] rounded-xl"
                style="border:0" allowfullscreen loading="lazy"></iframe>
        </div>
    </div>
</section>
@endsection
