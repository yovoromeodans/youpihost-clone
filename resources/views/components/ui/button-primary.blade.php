{{--
    Composant Bouton Primaire - YoupiHost Clone
    Usage : <x-button-primary href="#" text="Connexion" />
            <x-button-primary text="Connexion" type="submit" />
    Props :
      - text    : texte du bouton (requis)
      - href    : si défini, rendu en <a>, sinon en <button>
      - type    : type du bouton (default: "button")
      - class   : classes supplémentaires
--}}
@props([
    'text'  => '',
    'href'  => null,
    'type'  => 'button',
])

@if ($href)
    <a href="{{ $href }}"
       {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-4 py-2 bg-primary text-white text-sm font-medium rounded hover:bg-blue-800 transition-colors duration-200 cursor-pointer whitespace-nowrap']) }}>
        {{ $text }}{{ $slot }}
    </a>
@else
    <button type="{{ $type }}"
            {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-4 py-2 bg-primary text-white text-sm font-medium rounded hover:bg-blue-800 transition-colors duration-200 cursor-pointer whitespace-nowrap']) }}>
        {{ $text }}{{ $slot }}
    </button>
@endif
