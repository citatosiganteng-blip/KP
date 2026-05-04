@extends('layouts.app')
@section('title', 'Kontak')
@section('description', 'Hubungi SMKS Cipta Insani Mandiri di Beji, Depok.')

@section('content')
<x-page-hero title="Kontak Kami" subtitle="Kunjungi atau hubungi kami — kami siap menjawab pertanyaan Anda." />

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
                src="https://www.google.com/maps?q=Tanah+Baru+Beji+Depok&output=embed"
                class="w-full h-[450px] rounded-xl"
                style="border:0" allowfullscreen loading="lazy"></iframe>
        </div>
    </div>
</section>
@endsection
