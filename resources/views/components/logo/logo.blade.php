{{--
    Composant Logo - YoupiHost Clone
    Usage : <x-logo.logo />                    (lien vers "/", hauteur h-8)
            <x-logo.logo href="#" size="h-7 w-auto" />
    Props :
      - href : destination du lien (défaut: "/")
      - size : classes de taille de l'image (défaut: "h-8 w-auto")
      - class : classes supplémentaires appliquées au <a>
--}}
@props([
    'href' => '/',
    'size' => 'h-8 w-auto',
])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center shrink-0']) }}>
    <img src="{{ asset('assets/images/logo/logo_big.198293982.png') }}"
         alt="YoupiHost" class="{{ $size }}">
</a>