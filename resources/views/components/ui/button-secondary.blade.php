{{--
    Composant Bouton Secondaire - YoupiHost Clone
    Usage : <x-button-secondary href="#" text="Inscription" />
            <x-button-secondary text="Inscription" type="button" />
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
       {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-4 py-2 bg-white text-slate-800 text-sm font-medium rounded border border-slate-300 hover:bg-slate-50 hover:border-slate-400 hover:text-slate-900 transition-colors duration-200 cursor-pointer whitespace-nowrap']) }}>
        {{ $text }}{{ $slot }}
    </a>
@else
    <button type="{{ $type }}"
            {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-4 py-2 bg-white text-slate-800 text-sm font-medium rounded border border-slate-300 hover:bg-slate-50 hover:border-slate-400 hover:text-slate-900 transition-colors duration-200 cursor-pointer whitespace-nowrap']) }}>
        {{ $text }}{{ $slot }}
    </button>
@endif
