@extends('layouts.app')

@section('title', 'Knowledgebase — YoupiHost')

@section('content')

<div class="min-h-screen">
<div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

    {{-- === Titre + Breadcrumb === --}}
    <div class="mb-6 sm:mb-8">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900 mb-2 sm:mb-3">Knowledgebase</h1>
        <p class="text-sm">
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
                <h3 class="text-lg text-slate-800 mb-3">Tag Cloud</h3>
                <a href="#"
                   class="inline-block text-xs text-slate-600 border border-slate-300
                          px-2.5 py-0.5 rounded hover:border-primary hover:text-primary
                          transition-colors duration-150">
                    Domaine
                </a>
            </div>

            {{-- Support --}}
            <x-ui.support-sidebar active="Knowledgebase" />
        </aside>
    </div>
</div>
</div>

@endsection
