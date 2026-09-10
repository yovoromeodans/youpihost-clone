@extends('layouts.app')

@section('title', 'Register a New Domain — YoupiHost')

@section('content')

@php
    $categories = [
        ['label' => 'Shared Hosting',     'icon' => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>'],
        ['label' => 'Professional Email', 'icon' => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>'],
        ['label' => 'VPS Server',         'icon' => '<rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>'],
        ['label' => 'SSL certificate',    'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'],
    ];
    $actions = [
        ['label' => 'Register a New Domain', 'href' => route('domain.register'), 'icon' => '<path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/>'],
        ['label' => 'Transfer in a Domain',  'href' => route('domain.transfer'),  'icon' => '<line x1="4" y1="21" x2="4" y2="14"/><line x1="4" y1="10" x2="4" y2="3"/><line x1="12" y1="21" x2="12" y2="12"/><line x1="12" y1="8" x2="12" y2="3"/><line x1="20" y1="21" x2="20" y2="16"/><line x1="20" y1="12" x2="20" y2="3"/><line x1="1" y1="14" x2="7" y2="14"/><line x1="9" y1="8" x2="15" y2="8"/><line x1="17" y1="16" x2="23" y2="16"/>'],
        ['label' => 'View Cart',             'href' => '#',                       'icon' => '<circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>'],
    ];

    $domains = [
        ['tld' => '.biz',  'new_price' => '8.732,10FCFA',  'transfer' => '31.435,56FCFA', 'renewal' => '27.942,72FCFA'],
        ['tld' => '.blog', 'new_price' => '10.253,10FCFA', 'transfer' => '36.911,16FCFA', 'renewal' => '32.809,92FCFA'],
        ['tld' => '.ca',   'new_price' => '11.770,20FCFA', 'transfer' => '11.770,20FCFA', 'renewal' => '14.500,20FCFA'],
        ['tld' => '.de',   'new_price' => '2.882,10FCFA',  'transfer' => '10.375,56FCFA', 'renewal' => '9.222,72FCFA'],
        ['tld' => '.eu',   'new_price' => '3.272,10FCFA',  'transfer' => '11.779,56FCFA', 'renewal' => '10.470,72FCFA'],
        ['tld' => '.icu',  'new_price' => '11.146,20FCFA', 'transfer' => '11.146,20FCFA', 'renewal' => '11.848,20FCFA'],
    ];

    $perPage     = 10;
    $totalPages  = 62;
    $currentPage = 1;
    $total       = 616;
@endphp

<div class="min-h-screen">
<div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

    {{-- Titre --}}
    <div class="mb-8">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900">
            Register Domain
        </h1>
    </div>

    {{-- ══ DROPDOWN MOBILE ══ --}}
    <div class="lg:hidden mb-6 relative" id="mobile-sidebar-wrapper">
        <button type="button"
                onclick="toggleMobileSidebar()"
                class="w-full flex items-center justify-between px-4 py-2 border border-slate-300
                       rounded text-sm text-slate-700 cursor-pointer
                       hover:border-slate-400 transition-colors duration-150">
            <span>Register a New Domain</span>
            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor"
                 stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>
        <div id="mobile-sidebar-dropdown"
             class="hidden absolute top-full left-0 right-0 mt-1 bg-white border border-slate-200
                    rounded-lg shadow-xl z-50 py-2">
            <div class="px-4 py-2">
                <p class="text-sm font-semibold text-slate-800 mb-1">Categories</p>
                @foreach ($categories as $cat)
                <a href="#" class="block py-1.5 text-sm text-slate-600 hover:text-primary transition-colors duration-150">
                    {{ $cat['label'] }}
                </a>
                @endforeach
            </div>
            <div class="border-t border-slate-100 px-4 py-2">
                <p class="text-sm font-semibold text-slate-800 mb-1">Actions</p>
                @foreach ($actions as $action)
                <a href="{{ $action['href'] }}"
                   class="block py-1.5 text-sm transition-colors duration-150
                          {{ $action['label'] === 'Register a New Domain' ? 'text-primary font-medium' : 'text-slate-600 hover:text-primary' }}">
                    {{ $action['label'] }}
                </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ══ LAYOUT DESKTOP ══ --}}
    <div class="flex flex-col lg:flex-row gap-8">

        {{-- ── SIDEBAR DESKTOP ── --}}
        <aside class="hidden lg:block w-56 shrink-0">

            {{-- Categories --}}
            <div class="mb-8">
                <h3 class="text-base font-semibold text-slate-700 mb-3">Categories</h3>
                <ul class="space-y-0.5">
                    @foreach ($categories as $cat)
                    <li>
                        <a href="#"
                           class="flex items-center gap-2.5 px-2 py-2 rounded text-base
                                  transition-all duration-150
                                  text-primary hover:text-blue-700 hover:translate-x-1">
                            <svg class="w-4 h-4 shrink-0 text-primary" fill="none" stroke="currentColor"
                                 stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                {!! $cat['icon'] !!}
                            </svg>
                            {{ $cat['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Actions --}}
            <div class="mb-8">
                <h3 class="text-base font-semibold text-slate-700 mb-3">Actions</h3>
                <ul class="space-y-0.5">
                    @foreach ($actions as $action)
                    <li>
                        <a href="{{ $action['href'] }}"
                           class="flex items-center gap-2.5 px-2 py-2 rounded text-base
                                  transition-all duration-150
                                  {{ $action['label'] === 'Register a New Domain'
                                      ? 'bg-blue-50 text-primary font-medium'
                                      : 'text-primary hover:text-blue-700 hover:translate-x-1' }}">
                            <svg class="w-4 h-4 shrink-0 text-primary" fill="none" stroke="currentColor"
                                 stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                {!! $action['icon'] !!}
                            </svg>
                            {{ $action['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Choose Currency --}}
            <div>
                <h3 class="text-base font-semibold text-slate-700 mb-3">Choose Currency</h3>
                <select class="w-full border border-slate-300 rounded px-3 py-2 text-sm text-slate-700
                               focus:outline-none focus:border-primary focus:ring-0 [&:focus]:shadow-none
                               bg-white cursor-pointer">
                    <option value="XOF">XOF</option>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                </select>
            </div>

        </aside>

        {{-- ── CONTENU PRINCIPAL ── --}}
        <main class="flex-1 min-w-0">

            {{-- ═══ Barre de recherche bleue ═══ --}}
            <x-ui.search-bar
                placeholder="Register your new domain name"
                tooltip="Enter a domain or keyword"
            />

            {{-- ═══ Browse extensions by category ═══ --}}
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 mb-6">
                <h2 class="text-2xl sm:text-3xl text-slate-800 font-medium">Browse extensions by category</h2>

                {{-- Champ de recherche --}}
                <div class="flex items-center gap-2 border border-slate-300 rounded px-3 py-2.5
                            bg-white w-full sm:w-72 hover:border-slate-400 transition-colors duration-150">
                    <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                         stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="m21 21-4.35-4.35" stroke-linecap="round"/>
                    </svg>
                    <input type="text"
                           placeholder="Enter search term..."
                           class="w-full text-sm text-slate-700 placeholder-slate-400 bg-transparent
                                  focus:outline-none focus:ring-0 [&:focus]:shadow-none border-0">
                </div>
            </div>

            {{-- ═══ Filtre catégorie ═══ --}}
            <div class="mb-6">
                <div class="relative w-full" id="filter-wrapper">
                    <button type="button"
                            onclick="toggleFilter()"
                            class="w-full flex items-center justify-between gap-2 px-4 py-2.5
                                   border border-slate-300 rounded text-sm text-slate-700 bg-white
                                   hover:border-slate-400 cursor-pointer transition-colors duration-150">
                        <span>
                            All ({{ $total }})
                            <span class="ml-2 inline-flex items-center justify-center w-4 h-4
                                         bg-slate-200 rounded-full text-xs text-slate-500 cursor-pointer"
                                  onclick="event.stopPropagation()">✕</span>
                        </span>
                        <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                             stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="filter-dropdown"
                         class="hidden absolute top-full left-0 right-0 mt-1 bg-white border border-slate-200
                                rounded-lg shadow-xl z-50 py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary">All ({{ $total }})</a>
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary">Popular</a>
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary">New TLDs</a>
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-primary">Country</a>
                    </div>
                </div>
            </div>

            {{-- ═══ Tableau des domaines ═══ --}}
            <div class="bg-white border border-slate-200 rounded-lg overflow-hidden shadow-md">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        {{-- En-tête --}}
                        <thead>
                            <tr class="border-b border-slate-200">
                                <th class="text-left px-5 py-3 text-slate-500 font-medium">Domain</th>
                                <th class="text-left px-5 py-3 text-slate-500 font-medium">New Price</th>
                                <th class="text-left px-5 py-3 text-slate-500 font-medium">Transfer</th>
                                <th class="text-left px-5 py-3 text-slate-500 font-medium">Renewal</th>
                                <th class="text-right px-5 py-3 text-slate-500 font-medium"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($domains as $i => $domain)
                            <tr class="border-b border-slate-100">
                                {{-- Domain (TLD) --}}
                                <td class="px-5 py-4">
                                    <span class="text-base font-bold text-slate-900">{{ $domain['tld'] }}</span>
                                </td>
                                {{-- New Price --}}
                                <td class="px-5 py-4">
                                    <div class="font-medium text-slate-800">{{ $domain['new_price'] }}</div>
                                    <div class="text-xs text-slate-500">1 Year</div>
                                </td>
                                {{-- Transfer --}}
                                <td class="px-5 py-4">
                                    <div class="font-medium text-slate-800">{{ $domain['transfer'] }}</div>
                                    <div class="text-xs text-slate-500">1 Year</div>
                                </td>
                                {{-- Renewal --}}
                                <td class="px-5 py-4">
                                    <div class="font-medium text-slate-800">{{ $domain['renewal'] }}</div>
                                    <div class="text-xs text-slate-500">1 Year</div>
                                </td>
                                {{-- Register Button --}}
                                <td class="px-5 py-4 text-right">
                                    <button type="button"
                                            class="px-3 py-1 border border-blue-200 bg-blue-50 text-primary text-sm font-medium
                                                   rounded transition-colors duration-150 cursor-pointer whitespace-nowrap
                                                   hover:bg-blue-100">
                                        Register
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Barre de pagination --}}
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4 px-5 py-4 border-t border-slate-200">

                    {{-- Show X entries --}}
                    <div class="flex items-center gap-2 text-sm text-slate-600">
                        <span>Show</span>
                        <div class="relative" id="perpage-wrapper">
                            <button type="button"
                                    onclick="togglePerPage()"
                                    class="flex items-center gap-1 px-3 py-1 border border-slate-300 rounded
                                           text-sm text-slate-700 bg-white hover:border-slate-400 cursor-pointer">
                                {{ $perPage }}
                                <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor"
                                     stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div id="perpage-dropdown"
                                 class="hidden absolute bottom-full left-0 mb-1 w-16 bg-white border border-slate-200
                                        rounded-lg shadow-xl z-50 py-1">
                                @foreach ([10, 25, 50, 100] as $n)
                                <button type="button"
                                        class="w-full text-left px-3 py-1.5 text-sm
                                               {{ $n === $perPage ? 'text-primary font-medium' : 'text-slate-700 hover:text-primary' }}">
                                    {{ $n }}
                                </button>
                                @endforeach
                            </div>
                        </div>
                        <span>entries</span>
                    </div>

                    {{-- Pagination --}}
                    <div class="flex items-center gap-1 text-sm">
                        <a href="#"
                           class="px-3 py-1.5 border border-slate-300 rounded text-slate-600
                                  hover:border-primary hover:text-primary transition-colors duration-150">
                            Previous
                        </a>

                        @foreach ([1,2,3,4,5] as $page)
                        <a href="#"
                           class="w-8 h-8 flex items-center justify-center border rounded text-sm
                                  transition-colors duration-150
                                  {{ $page === $currentPage
                                      ? 'border-primary bg-primary text-white'
                                      : 'border-slate-300 text-slate-600 hover:border-primary hover:text-primary' }}">
                            {{ $page }}
                        </a>
                        @endforeach

                        <span class="px-2 text-slate-400">...</span>

                        <a href="#"
                           class="w-8 h-8 flex items-center justify-center border border-slate-300 rounded
                                  text-slate-600 hover:border-primary hover:text-primary transition-colors duration-150">
                            {{ $totalPages }}
                        </a>

                        <a href="#"
                           class="px-3 py-1.5 border border-slate-300 rounded text-slate-600
                                  hover:border-primary hover:text-primary transition-colors duration-150">
                            Next
                        </a>
                    </div>

                </div>
            </div>

            {{-- ═══ Section Cards : Add Web Hosting + Transfer Domain ═══ --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">

                {{-- Card 1 : Add Web Hosting --}}
                <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow duration-200">
                    <div class="flex flex-col h-full">
                        <div class="flex items-start gap-4 mb-6">
                            {{-- Icône : serveur / boîtes empilées --}}
                            <div class="w-16 h-16 shrink-0 flex items-center justify-center text-primary">
                                <svg class="w-16 h-16" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 24 L32 8 L56 24 L32 40 Z" fill="currentColor" opacity="0.15" stroke="none"/>
                                    <path d="M8 24 L32 40 L56 24" stroke="currentColor"/>
                                    <path d="M32 40 L32 56" stroke="currentColor"/>
                                    <path d="M8 24 L8 40 L32 56 L56 40 L56 24" fill="currentColor" opacity="0.25" stroke="none"/>
                                    <path d="M8 24 L8 40 L32 56 L56 40 L56 24" stroke="currentColor"/>
                                    <path d="M8 40 L32 56 L56 40" stroke="currentColor"/>
                                    <path d="M8 24 L32 8 L56 24" stroke="currentColor"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl sm:text-2xl font-semibold text-slate-900 mb-1">Add Web Hosting</h3>
                                <p class="text-base text-slate-600">Choose from a range of web hosting packages</p>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mt-auto">
                            <p class="text-base text-slate-600">
                                We have packages designed to fit<br/>every budget
                            </p>
                            <x-ui.button-primary href="{{ route('hebergement.mutualise') }}" text="Explore packages now">
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </x-ui.button-primary>
                        </div>
                    </div>
                </div>

                {{-- Card 2 : Transfer your domain to us --}}
                <div class="bg-white border border-slate-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow duration-200">
                    <div class="flex flex-col h-full">
                        <div class="flex items-start gap-4 mb-6">
                            {{-- Icône : transfert de domaine (flèche + boîte) --}}
                            <div class="w-16 h-16 shrink-0 flex items-center justify-center text-primary">
                                <svg class="w-16 h-16" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 32 L28 32" stroke="currentColor"/>
                                    <path d="M22 22 L12 32 L22 42" stroke="currentColor"/>
                                    <path d="M16 44 L32 60 L56 44 L56 20 L32 4 L8 20 L8 36" fill="currentColor" opacity="0.15" stroke="none"/>
                                    <path d="M16 44 L32 60 L56 44 L56 20 L32 4 L8 20 L8 36" stroke="currentColor"/>
                                    <path d="M8 20 L32 36 L56 20" stroke="currentColor"/>
                                    <path d="M32 36 L32 60" stroke="currentColor"/>
                                    <path d="M36 16 L52 16" stroke="currentColor" opacity="0.6"/>
                                    <path d="M42 10 L52 16 L42 22" stroke="currentColor" opacity="0.6"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-xl sm:text-2xl font-semibold text-slate-900 mb-1">Transfer your domain to us</h3>
                                <p class="text-base text-slate-600">
                                    <a href="{{ route('domain.transfer') }}" class="text-primary font-medium hover:text-blue-800 transition-colors duration-150">
                                        Transfer now
                                    </a>
                                    to extend your domain by 1 year!*
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mt-auto">
                            <p class="text-sm text-slate-500">
                                * Excludes certain TLDs and<br/>recently renewed domains
                            </p>
                            <x-ui.button-primary href="{{ route('domain.transfer') }}" text="Transfer a domain">
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </x-ui.button-primary>
                        </div>
                    </div>
                </div>

            </div>

        </main>
    </div>
</div>
</div>

@push('scripts')
<script>
function toggleMobileSidebar() {
    var dd = document.getElementById('mobile-sidebar-dropdown');
    dd.classList.toggle('hidden');
}
function toggleFilter() {
    document.getElementById('filter-dropdown').classList.toggle('hidden');
}
function togglePerPage() {
    document.getElementById('perpage-dropdown').classList.toggle('hidden');
}
document.addEventListener('click', function(e) {
    var wrapper = document.getElementById('mobile-sidebar-wrapper');
    var dd = document.getElementById('mobile-sidebar-dropdown');
    if (wrapper && !wrapper.contains(e.target)) {
        if (dd) dd.classList.add('hidden');
    }
    ['filter-wrapper','perpage-wrapper'].forEach(function(id) {
        var w = document.getElementById(id);
        var dd = document.getElementById(id.replace('wrapper','dropdown').replace('-wrapper', '-dropdown'));
        if (id === 'filter-wrapper') dd = document.getElementById('filter-dropdown');
        if (id === 'perpage-wrapper') dd = document.getElementById('perpage-dropdown');
        if (w && dd && !w.contains(e.target)) dd.classList.add('hidden');
    });
});
</script>
@endpush

@endsection
