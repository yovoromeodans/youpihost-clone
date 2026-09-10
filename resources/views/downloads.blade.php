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
                </svg>
                <p class="text-xl sm:text-2xl font-semibold text-slate-900">
                    No Downloads to Display
                </p>
            </div>

        </main>

        {{-- ---- SIDEBAR (en bas sur mobile/tablette, à gauche sur desktop) --}}
        <aside class="w-full lg:w-56 shrink-0 order-2 lg:order-1">

            {{-- Support --}}
            <x-ui.support-sidebar active="Downloads" />
        </aside>
    </div>
</div>
</div>

@endsection
