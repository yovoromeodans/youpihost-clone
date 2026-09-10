@extends('layouts.app')

@section('title', 'News — YoupiHost')

@section('content')

<div class="min-h-screen">
<div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

    {{-- === Titre + Breadcrumb === --}}
    <div class="mb-6 sm:mb-8">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900 mb-2">News</h1>
        <p class="text-sm">
            <a href="/" class="text-slate-500 hover:text-primary">Portal Home</a>
            <span class="text-slate-400 mx-1">/</span>
            <a href="{{ route('announcements') }}" class="text-slate-500 hover:text-primary">Announcements</a>
            <span class="text-slate-400 mx-1">/</span>
            <span class="text-primary">Sept 2026</span>
        </p>
    </div>

    {{-- === Layout : Sidebar + Contenu === --}}
    <div class="flex flex-col lg:flex-row gap-8">

        {{-- ── CONTENU PRINCIPAL ── --}}
        <main class="flex-1 min-w-0 order-1 lg:order-2">

            @php
                $articles = [
                    [
                        'date'    => '17th Apr 2026',
                        'title'   => 'Déployer son projet Laravel sur youpihost',
                        'excerpt' => "Tutoriel : Déployer son projet Laravel sur Youpihost.com Phase 1 : Préparation du projet localement Étape 1 : Nettoyer votre projet Laravel Avant de déployer, assurez-vous que votre projet fonctionne en local. Supprimez les fichiers inutiles : node_modules/ (sera réinstallé sur le serveur si ...",
                    ],
                    [
                        'date'    => '14th Apr 2026',
                        'title'   => 'Déployer un projet Vue.js sur son hébergement YoupiHost',
                        'excerpt' => "Déploiement d'un projet Vue sur YoupiHost (via Plesk) Guide de déploiement : Application Vue sur YoupiHost (via Plesk) Ce guide détaille la procédure complète pour déployer votre application Vue sur votre hébergement YoupiHost via le gestionnaire de fichiers Plesk. Prérequis • Un compte YoupiHost actif avec un ...",
                    ],
                    [
                        'date'    => '8th Apr 2026',
                        'title'   => 'DÉPLOIEMENT D\'UN PROJET SYMFONY',
                        'excerpt' => "Ce guide détaille la procédure complète pour déployer votre site Symfony, depuis la connexion à votre espace client YoupiHost jusqu'à l'accès au tableau de bord administrateur. Phase 1 : Accès à l'espace client YoupiHost ...",
                    ],
                    [
                        'date'    => '7th Apr 2026',
                        'title'   => 'Déploiement d\'un projet React',
                        'excerpt' => "Déploiement d'un projet React sur YoupiHost (via Plesk) Guide de déploiement : Application React sur YoupiHost (via Plesk) Ce guide détaille la procédure complète pour déployer votre application React sur votre hébergement YoupiHost via le gestionnaire de fichiers Plesk. Prérequis • Un compte YoupiHost actif avec un ...",
                    ],
                    [
                        'date'    => '1st Mar 2026',
                        'title'   => 'Mise à jour des serveurs YoupiHost — Mars 2026',
                        'excerpt' => "Nous avons effectué une mise à jour majeure de notre infrastructure serveur. Cette mise à jour améliore les performances globales, renforce la sécurité et optimise la stabilité de tous nos services d'hébergement ...",
                    ],
                    [
                        'date'    => '15th Oct 2025',
                        'title'   => 'Nouveau plan d\'hébergement Elite disponible',
                        'excerpt' => "YoupiHost est fier d'annoncer le lancement de son nouveau plan Elite, offrant 15 Go de stockage SSD NVMe ultra-rapide, 32 Go de RAM dédiée et des performances optimisées pour les entreprises ...",
                    ],
                ];

                $currentPage = 1;
                $totalPages  = 3;
                $perPage     = 4;
                $paginatedArticles = array_slice($articles, 0, $perPage);
            @endphp

            {{-- Liste des articles — une seule carte avec border-t séparateurs --}}
            <div class="bg-white border border-slate-200 rounded-lg overflow-hidden">
                @foreach ($paginatedArticles as $i => $article)
                <div class="px-6 py-6 hover:bg-slate-50 transition-colors duration-150
                            {{ $i > 0 ? 'border-t border-slate-200' : '' }}">

                    {{-- Date --}}
                    <div class="flex items-center gap-2 text-sm text-slate-500 mb-3">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor"
                             stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/>
                            <line x1="8"  y1="2" x2="8"  y2="6"/>
                            <line x1="3"  y1="10" x2="21" y2="10"/>
                        </svg>
                        {{ $article['date'] }}
                    </div>

                    {{-- Titre avec flèche --}}
                    <h2 class="flex items-start gap-2 text-lg text-primary font-medium mb-3 leading-snug">
                        <span class="shrink-0 mt-0.5">→</span>
                        <a href="#" class="hover:text-blue-700 transition-colors duration-150">
                            {{ $article['title'] }}
                        </a>
                    </h2>

                    {{-- Excerpt --}}
                    <p class="text-sm text-slate-600 leading-relaxed mb-4">
                        {{ $article['excerpt'] }}
                    </p>

                    {{-- Bouton Read More --}}
                    <a href="#"
                       class="inline-block px-4 py-1.5 text-sm text-slate-700 bg-slate-100
                              hover:bg-slate-200 border border-slate-300 rounded
                              transition-colors duration-150">
                        Read More
                    </a>
                </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="flex justify-end items-center gap-1 mt-8">
                @php
                    $pages = range(1, $totalPages);
                @endphp

                {{-- « First --}}
                <a href="#"
                   class="w-9 h-9 flex items-center justify-center border border-slate-300 rounded
                          text-slate-500 hover:border-primary hover:text-primary transition-colors duration-150">
                    «
                </a>
                {{-- < Prev --}}
                <a href="#"
                   class="w-9 h-9 flex items-center justify-center border border-slate-300 rounded
                          text-slate-500 hover:border-primary hover:text-primary transition-colors duration-150">
                    ‹
                </a>

                {{-- Pages --}}
                @foreach ($pages as $page)
                <a href="#"
                   class="w-9 h-9 flex items-center justify-center border rounded text-sm
                          transition-colors duration-150
                          {{ $page === $currentPage
                              ? 'border-primary bg-primary text-white'
                              : 'border-slate-300 text-slate-600 hover:border-primary hover:text-primary' }}">
                    {{ $page }}
                </a>
                @endforeach

                {{-- > Next --}}
                <a href="#"
                   class="w-9 h-9 flex items-center justify-center border border-slate-300 rounded
                          text-slate-500 hover:border-primary hover:text-primary transition-colors duration-150">
                    ›
                </a>
                {{-- » Last --}}
                <a href="#"
                   class="w-9 h-9 flex items-center justify-center border border-slate-300 rounded
                          text-slate-500 hover:border-primary hover:text-primary transition-colors duration-150">
                    »
                </a>
            </div>

        </main>

        {{-- ── SIDEBAR ── --}}
        <aside class="w-full lg:w-56 shrink-0 order-2 lg:order-1">

            {{-- By Month --}}
            <div class="mb-8">
                <h3 class="text-xl font-semibold text-slate-800 mb-3">By Month</h3>
                @php
                    $months = [
                        ['label' => 'Apr 2026', 'href' => '#'],
                        ['label' => 'Mar 2026', 'href' => '#'],
                        ['label' => 'Oct 2025', 'href' => '#'],
                        ['label' => 'Sept 2025', 'href' => '#'],
                        ['label' => 'Aug 2025', 'href' => '#'],
                        ['label' => 'Older Announcements...', 'href' => '#'],
                        ['label' => 'View RSS Feed', 'href' => '#'],
                    ];
                @endphp
                <ul class="space-y-0.5 hidden lg:block">
                    @foreach ($months as $i => $month)
                    <li>
                        <a href="{{ $month['href'] }}"
                           class="flex items-center gap-2.5 px-2 py-2 rounded text-base
                                  text-primary hover:text-blue-700 hover:translate-x-1
                                  transition-all duration-150">
                            <svg class="w-4 h-4 shrink-0 {{ $i === count($months)-1 ? 'text-slate-400' : 'text-primary' }}"
                                 fill="none" stroke="currentColor" stroke-width="1.8"
                                 viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                @if($i === count($months)-1)
                                    <path d="M4 11a9 9 0 0 1 9 9"/><path d="M4 4a16 16 0 0 1 16 16"/>
                                    <circle cx="5" cy="19" r="1" fill="currentColor"/>
                                @else
                                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/>
                                @endif
                            </svg>
                            {{ $month['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                {{-- Mobile --}}
                <ul class="grid grid-cols-3 gap-x-4 gap-y-1 lg:hidden">
                    @foreach ($months as $i => $month)
                    <li>
                        <a href="{{ $month['href'] }}"
                           class="flex items-center gap-2 py-2 text-sm text-primary
                                  hover:text-blue-700 transition-colors duration-150">
                            <svg class="w-4 h-4 shrink-0 {{ $i === count($months)-1 ? 'text-slate-400' : 'text-primary' }}"
                                 fill="none" stroke="currentColor" stroke-width="1.8"
                                 viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                @if($i === count($months)-1)
                                    <path d="M4 11a9 9 0 0 1 9 9"/><path d="M4 4a16 16 0 0 1 16 16"/>
                                    <circle cx="5" cy="19" r="1" fill="currentColor"/>
                                @else
                                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/>
                                @endif
                            </svg>
                            {{ $month['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

{{-- Support --}}
            <x-ui.support-sidebar active="Announcements" />
        </aside>
    </div>
</div>
</div>

@endsection
