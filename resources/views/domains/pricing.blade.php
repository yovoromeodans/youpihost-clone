@extends('layouts.app')

@section('title', 'Domain Pricing — YoupiHost')

@section('content')

@php
$domains = [
    [
        'tld' => '.biz', 'category' => 'Popular',
        'new_price' => '8.732,10FCFA', 'transfer' => '31.435,56FCFA',
        'renewal' => '27.942,72FCFA',
        'grace' => ['days' => '30 Days', 'price' => '(0,00FCFA)'],
        'redemption' => ['days' => '30 Days', 'price' => '(569.978,50FCFA)'],
    ],
    [
        'tld' => '.blog', 'category' => 'Popular',
        'new_price' => '10.253,10FCFA', 'transfer' => '36.911,16FCFA',
        'renewal' => '32.809,92FCFA',
        'grace' => ['days' => '40 Days', 'price' => '(0,00FCFA)'],
        'redemption' => ['days' => '30 Days', 'price' => '(578.038,50FCFA)'],
    ],
    [
        'tld' => '.ca', 'category' => 'Popular',
        'new_price' => '11.770,20FCFA', 'transfer' => '11.770,20FCFA',
        'renewal' => '14.500,20FCFA',
        'grace' => ['days' => '30 Days', 'price' => '(0,00FCFA)'],
        'redemption' => ['days' => '30 Days', 'price' => '(538.583,50FCFA)'],
    ],
    [
        'tld' => '.club', 'category' => 'Popular',
        'new_price' => '15.592,20FCFA', 'transfer' => '15.592,20FCFA',
        'renewal' => '18.556,20FCFA',
        'grace' => ['days' => '40 Days', 'price' => '(0,00FCFA)'],
        'redemption' => ['days' => '30 Days', 'price' => '(580.963,50FCFA)'],
    ],
    [
        'tld' => '.cn', 'category' => 'Popular',
        'new_price' => '6.154,20FCFA', 'transfer' => '6.154,20FCFA',
        'renewal' => '7.714,20FCFA',
        'grace' => ['days' => '0 Days', 'price' => '(0,00FCFA)'],
        'redemption' => ['days' => '15 Days', 'price' => '(575.113,50FCFA)'],
    ],
    [
        'tld' => '.co.uk', 'category' => 'Popular',
        'new_price' => '6.856,20FCFA', 'transfer' => '0,00FCFA',
        'renewal' => '8.494,20FCFA',
        'grace' => ['days' => '0 Days', 'price' => '(0,00FCFA)'],
        'redemption' => ['days' => '-', 'price' => ''],
    ],
    [
        'tld' => '.com', 'category' => 'Popular',
        'new_price' => '5.261,10FCFA', 'transfer' => '18.939,96FCFA',
        'renewal' => '16.835,52FCFA',
        'grace' => ['days' => '30 Days', 'price' => '(0,00FCFA)'],
        'redemption' => ['days' => '30 Days', 'price' => '(560.293,50FCFA)'],
    ],
    [
        'tld' => '.de', 'category' => 'Popular',
        'new_price' => '2.882,10FCFA', 'transfer' => '10.375,56FCFA',
        'renewal' => '9.222,72FCFA',
        'grace' => ['days' => '0 Days', 'price' => '(0,00FCFA)'],
        'redemption' => ['days' => '0 Days', 'price' => '(187.200,00FCFA)'],
    ],
    [
        'tld' => '.eu', 'category' => 'Popular',
        'new_price' => '3.272,10FCFA', 'transfer' => '11.779,56FCFA',
        'renewal' => '10.470,72FCFA',
        'grace' => ['days' => '0 Days', 'price' => '(0,00FCFA)'],
        'redemption' => ['days' => '40 Days', 'price' => '(543.913,50FCFA)'],
    ],
    [
        'tld' => '.icu', 'category' => 'Popular',
        'new_price' => '11.146,20FCFA', 'transfer' => '11.146,20FCFA',
        'renewal' => '11.848,20FCFA',
        'grace' => ['days' => '40 Days', 'price' => '(0,00FCFA)'],
        'redemption' => ['days' => '30 Days', 'price' => '(601.893,50FCFA)'],
    ],
];

$perPage     = 10;
$totalPages  = 62;
$currentPage = 1;
$total       = 616;
@endphp

<div class="min-h-screen">
<div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

    {{-- Titre + Breadcrumb --}}
    <div class="mb-8">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900 mb-2">Domain Pricing</h1>
        <p class="text-sm">
            <a href="/" class="text-slate-500 hover:text-primary">Portal Home</a>
            <span class="text-slate-400 mx-1">/</span>
            <a href="{{ route('domain.pricing') }}" class="text-primary">Domain Pricing</a>
        </p>
    </div>

    {{-- Filtre + Recherche --}}
    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 mb-6">

        {{-- Dropdown filtre catégorie --}}
        <div class="relative flex-1 w-full" id="filter-wrapper">
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

    {{-- Tableau --}}
    <div class="bg-white border border-slate-200 rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                {{-- En-tête --}}
                <thead>
                    <tr class="border-b border-slate-200">
                        <th class="text-left px-5 py-3 text-slate-500 font-medium">TLD</th>
                        <th class="text-left px-5 py-3 text-slate-500 font-medium">Category</th>
                        <th class="text-left px-5 py-3 text-slate-500 font-medium">New Price</th>
                        <th class="text-left px-5 py-3 text-slate-500 font-medium">Transfer</th>
                        <th class="text-left px-5 py-3 text-slate-500 font-medium">Renewal</th>
                        <th class="text-left px-5 py-3 text-slate-500 font-medium">Grace Period</th>
                        <th class="text-left px-5 py-3 text-slate-500 font-medium">Redemption Period</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($domains as $i => $domain)
                    <tr class="border-b border-slate-100 hover:bg-slate-50 transition-colors duration-150">
                        {{-- TLD --}}
                        <td class="px-5 py-4">
                            <span class="text-base font-bold text-slate-900">{{ $domain['tld'] }}</span>
                        </td>
                        {{-- Category --}}
                        <td class="px-5 py-4 text-slate-600">{{ $domain['category'] }}</td>
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
                        {{-- Grace Period --}}
                        <td class="px-5 py-4">
                            <div class="font-medium text-slate-800">{{ $domain['grace']['days'] }}</div>
                            <div class="text-xs text-slate-500">{{ $domain['grace']['price'] }}</div>
                        </td>
                        {{-- Redemption Period --}}
                        <td class="px-5 py-4">
                            <div class="font-medium text-slate-800">{{ $domain['redemption']['days'] }}</div>
                            @if($domain['redemption']['price'])
                            <div class="text-xs text-slate-500">{{ $domain['redemption']['price'] }}</div>
                            @endif
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

</div>
</div>

@push('scripts')
<script>
function toggleFilter() {
    document.getElementById('filter-dropdown').classList.toggle('hidden');
}
function togglePerPage() {
    document.getElementById('perpage-dropdown').classList.toggle('hidden');
}
document.addEventListener('click', function(e) {
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
