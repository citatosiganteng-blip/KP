@props(['title', 'subtitle' => null])
<section class="relative overflow-hidden bg-gradient-hero text-primary-foreground">
    <div class="absolute inset-0 opacity-30" style="background-image: radial-gradient(circle at 20% 20%, rgba(245,197,66,0.4), transparent 40%), radial-gradient(circle at 80% 60%, rgba(123,76,184,0.5), transparent 45%);"></div>
    <div class="container relative mx-auto py-20 md:py-28">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-white">{{ $title }}</h1>
        @if ($subtitle)
            <p class="mt-4 text-lg opacity-90 max-w-2xl">{{ $subtitle }}</p>
        @endif
    </div>
</section>
