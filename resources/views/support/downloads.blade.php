@extends('layouts.app')

@section('title', 'Downloads — YoupiHost')

@section('content')

<div class="min-h-screen">
<div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

    {{-- === Titre + Breadcrumb === --}}
    <div class="mb-6 sm:mb-8">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-2 sm:mb-3">Downloads</h1>
        <p class="text-sm sm:text-base">
            <a href="/" class="text-slate-500 hover:text-primary">Portal Home</a>
            <span class="text-slate-400 mx-1">/</span>
            <span class="text-primary">Downloads</span>
        </p>
    </div>

    {{-- === Layout : Sidebar + Contenu === --}}
    <div class="flex flex-col lg:flex-row gap-8">

        {{-- ---- CONTENU PRINCIPAL (en haut sur mobile/tablette) --}}
        <main class="flex-1 min-w-0 order-1 lg:order-2">

            {{-- Carte : No Downloads to Display --}}
            <div class="bg-white border border-slate-100 rounded-2xl shadow-sm
                        px-6 py-16 sm:px-10 sm:py-24 flex flex-col items-center justify-center text-center">
                {{-- Icône cube --}}
                <svg class="w-16 h-16 sm:w-20 sm:h-20 text-slate-900 mb-6 sm:mb-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                    <line x1="12" y1="22.08" x2="12" y2="12"/>
                    {{-- Flèche de download à l'intérieur du cube --}}
                    <g transform="translate(7.2 8) scale(0.75)">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" stroke="#065cfe" stroke-width="2.2"/>
                        <polyline points="7 10 12 15 17 10" stroke="#065cfe" stroke-width="2.2"/>
                        <line x1="12" y1="15" x2="12" y2="3" stroke="#065cfe" stroke-width="2.2"/>
                    </g>
                </svg>
                <p class="text-xl sm:text-2xl font-semibold text-slate-900">
                    No Downloads to Display
                </p>
            </div>

        </main>

        {{-- ---- SIDEBAR (en bas sur mobile/tablette, à gauche sur desktop) --}}
        <aside class="w-full lg:w-56 shrink-0 order-2 lg:order-1">

            {{-- Support --}}
            <div>
                <h3 class="text-xl font-semibold text-slate-800 mb-3">Support</h3>
                @php
                    $sidebarLinks = [
                        [
                            'label'  => 'My Support Tickets',
                            'href'   => '#',
                            'active' => false,
                            'icon'   => '<path d="M20 12V22H4V12"/><path d="M22 7H2v5h20V7z"/><path d="M12 22V7"/><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/>',
                            'color'  => 'text-primary',
                        ],
                        [
                            'label'  => 'Announcements',
                            'href'   => '#',
                            'active' => false,
                            'icon'   => '<path d="M12 5v14M18 5v14M6 5v14"/><path d="M2 9h20M2 15h20"/>',
                            'color'  => 'text-primary',
                        ],
                        [
                            'label'  => 'Knowledgebase',
                            'href'   => route('knowledgebase'),
                            'active' => false,
                            'icon'   => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>',
                            'color'  => 'text-primary',
                        ],
                        [
                            'label'  => 'Downloads',
                            'href'   => route('downloads'),
                            'active' => true,
                            'icon'   => '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/>',
                            'color'  => 'text-primary',
                        ],
                        [
                            'label'  => 'Network Status',
                            'href'   => '#',
                            'active' => false,
                            'icon'   => '<path d="M5 12.55a11 11 0 0 1 14.08 0"/><path d="M1.42 9a16 16 0 0 1 21.16 0"/><path d="M8.53 16.11a6 6 0 0 1 6.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/>',
                            'color'  => 'text-primary',
                        ],
                        [
                            'label'  => 'Open Ticket',
                            'href'   => '#',
                            'active' => false,
                            'icon'   => '<path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/>',
                            'color'  => 'text-primary',
                        ],
                    ];
                @endphp

                {{-- Desktop : liste verticale --}}
                <ul class="space-y-0.5 lg:block hidden">
                    @foreach ($sidebarLinks as $link)
                    <li>
                        <a href="{{ $link['href'] }}"
                           class="flex items-center gap-2.5 px-2 py-2 rounded text-base
                                  transition-all duration-150
                                  {{ $link['active']
                                      ? 'bg-blue-50 text-primary font-medium'
                                      : 'text-primary hover:text-blue-700 hover:translate-x-1' }}">
                            <svg class="w-4 h-4 shrink-0 {{ $link['color'] }}"
                                 fill="none" stroke="currentColor" stroke-width="1.8"
                                 viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                {!! $link['icon'] !!}
                            </svg>
                            {{ $link['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>

                {{-- Version mobile/tablette : grille --}}
                <ul class="grid grid-cols-2 sm:grid-cols-3 gap-2 lg:hidden">
                    @foreach ($sidebarLinks as $link)
                    <li>
                        <a href="{{ $link['href'] }}"
                           class="flex items-center gap-2.5 px-3 py-3 rounded-lg text-base
                                  transition-all duration-150
                                  {{ $link['active']
                                      ? 'bg-blue-50 text-primary font-medium'
                                      : 'text-primary hover:text-blue-700 hover:bg-blue-50' }}">
                            <svg class="w-5 h-5 shrink-0 {{ $link['color'] }}"
                                 fill="none" stroke="currentColor" stroke-width="1.8"
                                 viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                {!! $link['icon'] !!}
                            </svg>
                            <span class="text-base">{{ $link['label'] }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </div>
</div>
</div>

@endsection
