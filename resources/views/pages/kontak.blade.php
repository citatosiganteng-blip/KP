@extends('layouts.app')
@section('title', 'Kontak')
@section('description', 'Hubungi SMKS Cipta Insani Mandiri di Beji, Depok.')

@section('content')
<section class="relative bg-[#1e3a8a] text-white py-24 overflow-hidden">
    <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 50% -20%, #f5c542 0%, transparent 70%);"></div>
    <div class="container relative mx-auto px-6 text-center z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-4 text-white">Kontak Kami</h1>
        <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto font-light leading-relaxed">
            Kunjungi atau hubungi kami — kami siap menjawab pertanyaan Anda.
        </p>
    </div>
</section>
<section class="section">
    <div class="container mx-auto grid gap-10 lg:grid-cols-2">
        <div class="space-y-5">
            @foreach ([
                ['📍 Alamat',   'Jl. Curugan No 94 RT 06/12 Tanah Baru, Beji, Kota Depok, Jawa Barat'],
                ['📞 Telepon',  '0857-7711-9248'],
                ['✉️ Email',    'info@smkcim.sch.id'],
                ['📷 Instagram','@smkcimdepok'],
            ] as [$l,$v])
                <div class="card">
                    <p class="text-xs uppercase tracking-wider font-bold text-primary">{{ $l }}</p>
                    <p class="mt-2 text-slate-700">{{ $v }}</p>
                </div>
            @endforeach
        </div>
        <div class="card !p-2 overflow-hidden">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1778224239856!2d106.7965392760229!3d-6.371028893619143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef9b21d690a1%3A0x487b90edfe5abfd1!2sSMK%20Cipta%20Insani%20Mandiri!5e0!3m2!1sid!2sid!4v1778122828805!5m2!1sid!2sid"
                class="w-full h-[450px] rounded-xl"
                style="border:0" allowfullscreen loading="lazy"></iframe>
        </div>
    </div>
</section>
@endsection
