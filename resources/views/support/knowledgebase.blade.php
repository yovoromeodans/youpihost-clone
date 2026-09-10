@extends('layouts.app')

@section('title', 'Knowledgebase — YoupiHost')

@section('content')

<div class="min-h-screen">
<div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

    {{-- === Titre + Breadcrumb === --}}
    <div class="mb-6 sm:mb-8">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900 mb-2 sm:mb-3">Knowledgebase</h1>
        <p class="text-sm sm:text-base">
            <a href="/" class="text-slate-500 hover:text-primary">Portal Home</a>
            <span class="text-slate-400 mx-1">/</span>
            <a href="{{ route('knowledgebase') }}" class="text-primary">Knowledgebase</a>
        </p>
    </div>

    {{-- === Layout : Sidebar + Contenu === --}}
    <div class="flex flex-col lg:flex-row gap-8">

        {{-- ---- CONTENU PRINCIPAL (en haut sur mobile/tablette --}}
        <main class="flex-1 min-w-0 order-1 lg:order-2">

            {{-- Barre de recherche --}}
            <x-ui.search-bar
                placeholder="How can we help today?"
                tooltip="How can we help today?"
            />

            {{-- Categories --}}
            <section class="mb-10">
                <h2 class="text-xl text-slate-800 mb-4">Categories</h2>

                @php
                    $categories = [
                        ['label' => 'Fonctionnalités Techniques',        'count' => 3],
                        ['label' => 'GLOBAL / COMPTE & SUPPORT',         'count' => 1],
                        ['label' => 'NOM DE DOMAINE',                    'count' => 4],
                        ['label' => "Plans d'Hébergement et Tarification", 'count' => 4],
                        ['label' => 'Sécurité et Protection',            'count' => 1],
                        ['label' => 'Support et Services',               'count' => 4],
                    ];
                @endphp

                {{-- Une seule carte avec séparateurs --}}
                <div class="bg-white border border-slate-200 rounded-lg overflow-hidden">
                    @foreach ($categories as $i => $cat)
                    <a href="#"
                       class="flex items-center gap-3 px-5 py-4 text-base text-primary
                              hover:bg-slate-50 transition-colors duration-150
                              {{ $i < count($categories) - 1 ? 'border-b border-slate-100' : '' }}">
                        {{-- Icône dossier bleue remplie --}}
                        <svg class="w-5 h-5 text-primary shrink-0" fill="currentColor"
                             viewBox="0 0 24 24">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/>
                        </svg>
                        {{ $cat['label'] }} ({{ $cat['count'] }})
                    </a>
                    @endforeach
                </div>
            </section>

            {{-- Most Popular Articles --}}
            <section>
                <h2 class="text-xl text-slate-800 mb-4">Most Popular Articles</h2>

                @php
                    $articles = [
                        [
                            'title'   => 'Créer un Compte Client',
                            'excerpt' => 'Pour commander des services chez YoupiHost, vous devez préalablement créer un compte client....',
                        ],
                        [
                            'title'   => 'Quels modes de paiement sont acceptés par YoupiHost ?',
                            'excerpt' => "YoupiHost propose une grande flexibilité dans les moyens de paiement pour s'adapter au contexte...",
                        ],
                        [
                            'title'   => 'Enregistrer un Nouveau Nom de Domaine',
                            'excerpt' => "YoupiHost vous permet de rechercher et d'enregistrer votre nom de domaine en quelques clics....",
                        ],
                        [
                            'title'   => "Quels sont les différents plans d'hébergement proposés par YoupiHost et leurs prix ?",
                            'excerpt' => "YoupiHost propose trois formules d'hébergement adaptées à différents besoins : Plan Starter (1...",
                        ],
                        [
                            'title'   => "Puis-je changer de plan d'hébergement après ma souscription ?",
                            'excerpt' => "Oui, vous pouvez faire évoluer votre plan d'hébergement à tout moment selon l'évolution de vos...",
                        ],
                    ];
                @endphp

                {{-- Une seule carte avec séparateurs --}}
                <div class="bg-white border border-slate-200 rounded-lg overflow-hidden">
                    @foreach ($articles as $i => $article)
                    <a href="#"
                       class="flex items-start gap-3 px-5 py-5 hover:bg-slate-50
                              transition-colors duration-150
                              {{ $i < count($articles) - 1 ? 'border-b border-slate-100' : '' }}">
                        {{-- Icône document bleue remplie --}}
                        <svg class="w-4 h-4 text-primary shrink-0 mt-0.5" fill="currentColor"
                             viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/>
                        </svg>
                        <div>
                            <p class="text-base text-primary font-medium leading-snug mb-1">
                                {{ $article['title'] }}
                            </p>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                {{ $article['excerpt'] }}
                            </p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </section>

        </main>

        {{-- ---- SIDEBAR (en bas sur mobile/tablette, à gauche sur desktop) --}}
        <aside class="w-full lg:w-56 shrink-0 order-2 lg:order-1">

            {{-- Tag Cloud --}}
            <div class="mb-8 lg:mb-6">
                <h3 class="text-xl font-semibold text-slate-800 mb-3">Tag Cloud</h3>
                <a href="#"
                   class="inline-block text-sm text-slate-600 border border-slate-300
                          px-3 py-1 rounded hover:border-primary hover:text-primary
                          transition-colors duration-150">
                    Domaine
                </a>
            </div>

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
                            'color'  => 'text-red-500',
                        ],
                        [
                            'label'  => 'Announcements',
                            'href'   => '#',
                            'active' => false,
                            'icon'   => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>',
                            'color'  => 'text-primary',
                        ],
                        [
                            'label'  => 'Knowledgebase',
                            'href'   => route('knowledgebase'),
                            'active' => true,
                            'icon'   => '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>',
                            'color'  => 'text-primary',
                        ],
                        [
                            'label'  => 'Downloads',
                            'href'   => '#',
                            'active' => false,
                            'icon'   => '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/>',
                            'color'  => 'text-primary',
                        ],
                        [
                            'label'  => 'Network Status',
                            'href'   => '#',
                            'active' => false,
                            'icon'   => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
                            'color'  => 'text-slate-500',
                        ],
                        [
                            'label'  => 'Open Ticket',
                            'href'   => route('contact'),
                            'active' => false,
                            'icon'   => '<path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/>',
                            'color'  => 'text-primary',
                        ],
                    ];
                @endphp

                {{-- Desktop : liste verticale. Mobile/Tablette (< lg : grille 2 puis 3 colonnes --}}
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

                {{-- Version mobile/tablette : grille (comme la capture) --}}
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
