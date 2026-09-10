{{--
    Bouton "Retour en haut" réutilisable — utilisé dans footer.blade.php et home-footer.blade.php
    Props :
        - btnClass : classes supplémentaires (ex: tailles responsive des icônes via sm:…)
--}}
@props([
    'btnClass' => '',
    'svgClass' => 'w-5 h-5',
])

<button
    type="button"
    onclick="scrollTop()"
    class="flex items-center justify-center {{ $btnClass }} text-slate-500 hover:text-primary transition-colors duration-200 p-1 cursor-pointer"
    aria-label="Retour en haut"
    title="Back to top">
    <svg class="{{ $svgClass }}" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <rect x="3" y="3" width="14" height="1.8" rx="0.9"/>
        <path d="M10 17.5V7M10 7l-4 4M10 7l4 4" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round" fill="none"/>
    </svg>
</button>

@once
@push('scripts')
<script>
window.scrollTop = function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};
</script>
@endpush
@endonce