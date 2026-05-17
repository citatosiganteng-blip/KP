@props(['class' => 'aspect-video'])
<div {{ $attributes->merge(['class' => $class . ' flex items-center justify-center rounded-2xl bg-gradient-to-br from-primary-50 to-accent-soft text-primary/60 text-sm font-medium border border-primary-100']) }}>
    <span>📷 {{ $slot ?? 'Foto Sekolah' }}</span>
</div>
