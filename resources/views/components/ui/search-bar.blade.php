{{--
    Barre de recherche bleue (générique)
    Usage : <x-ui.search-bar placeholder="..." tooltip="..." />
    Props :
        - placeholder : texte du champ (requis)
        - tooltip     : texte du tooltip au focus (optionnel, null = pas de tooltip)
--}}
@props([
    'placeholder' => 'Search...',
    'tooltip'     => null,
])

<div class="rounded-xl px-4 sm:px-6 lg:px-8 py-6 sm:py-8 mb-6 sm:mb-8" style="background: linear-gradient(135deg, #1e40af 0%, #1d4ed8 50%, #2563eb 100%);">
    <form class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
        <div class="flex-1 flex items-center bg-white rounded-lg px-3 sm:px-4 py-2.5 sm:py-3.5 gap-3 relative search-bar-wrapper">
            @if ($tooltip)
            <div class="search-bar-tooltip pointer-events-none absolute left-1/2 -translate-x-1/2 bottom-full mb-2
                        bg-white text-slate-700 text-sm px-4 py-2.5 rounded-lg shadow-lg whitespace-nowrap
                        opacity-0 translate-y-1 transition-all duration-200">
                {{ $tooltip }}
                <span class="absolute top-full left-1/2 -translate-x-1/2 -mt-px w-0 h-0
                             border-l-[6px] border-l-transparent
                             border-r-[6px] border-r-transparent
                             border-t-[6px] border-t-white"></span>
            </div>
            @endif
            <svg class="w-4 h-4 text-primary shrink-0" fill="none" stroke="currentColor"
                 stroke-width="2.5" viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="8"/>
                <path d="m21 21-4.35-4.35" stroke-linecap="round"/>
            </svg>
            <input type="text"
                   placeholder="{{ $placeholder }}"
                   class="w-full text-sm text-slate-700 placeholder-slate-400 bg-transparent
                          focus:outline-none focus:ring-0 [&:focus]:shadow-none border-0">
        </div>
        <button type="submit"
                class="w-full sm:w-auto px-5 sm:px-6 py-2.5 sm:py-3.5 bg-primary hover:bg-blue-700 text-white text-sm
                       font-medium rounded-lg transition-colors duration-150 cursor-pointer whitespace-nowrap">
            Search
        </button>
    </form>
</div>

@push('styles')
<style>
    .search-bar-wrapper:focus-within .search-bar-tooltip {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
    }
</style>
@endpush