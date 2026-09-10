{{--
    Composant Nav Dropdown - YoupiHost Clone
    Utilisation :
        <x-nav-dropdown label="Hébergements" width="w-72">
            <x-nav-dropdown-item href="#" label="Hébergement Web" separator-after />
            <x-nav-dropdown-item href="#" label="Serveur privé virtuel" />
        </x-nav-dropdown>

    Props :
        - label  : texte du bouton déclencheur
        - width  : largeur du panneau (default: w-64)
        - align  : alignement du panneau left-0 ou right-0 (default: left-0)
--}}
@props([
    'label'    => '',
    'width'    => 'w-64',
    'align'    => 'left-0',
    'btnClass' => 'px-3',
])

<div class="relative header-dropdown-wrapper">

    {{-- Bouton déclencheur --}}
    <button type="button"
            class="header-nav-btn flex items-center gap-1 {{ $btnClass }} py-2 text-base text-slate-700 hover:text-primary transition-colors duration-150 cursor-pointer"
            aria-haspopup="true"
            aria-expanded="false">
        {{ $label }}
        {{-- Chevron --}}
        <svg class="w-3.5 h-3.5 header-chevron transition-transform duration-200"
             fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    {{-- Panneau --}}
    <div class="header-dropdown hidden absolute top-full {{ $align }} mt-6 {{ $width }} bg-white border border-slate-200 rounded-lg shadow-xl z-50 py-2">
        {{ $slot }}
    </div>

</div>
