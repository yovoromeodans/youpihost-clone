@extends('layouts.app')

@section('title', 'Transfer Domain — YoupiHost')

@section('content')

<div class="min-h-screen">
<div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

    {{-- Titre --}}
    <div class="mb-6">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900">Transfer Domain</h1>
    </div>

    {{-- ══ SIDEBAR + CONTENU ══ --}}
    <x-ui.store-sidebar active="Transfer in a Domain">

        {{-- ── CONTENU PRINCIPAL ── --}}
        <main class="flex-1 min-w-0">

            <p class="text-sm text-slate-600 mb-4">
                Transfer now to extend your domain by 1 year!*
            </p>

            <div class="bg-white rounded-lg shadow-md p-8">
                <form class="space-y-4">
                    <div>
                        <label for="domain" class="block text-base font-medium text-slate-700 mb-2">Domain Name</label>
                        <input type="text" id="domain" name="domain"
                               placeholder="example.com"
                               class="w-full border border-slate-300 rounded-md px-4 py-3 text-base text-slate-900 placeholder-slate-400
                                      focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary
                                      transition-colors duration-150">
                    </div>
                    <div>
                        <x-ui.button-primary type="submit" class="px-6 py-3 text-base rounded-md">
                            <svg class="w-4 h-4 mr-2 inline-block" fill="currentColor"
                                 viewBox="0 0 24 24">
                                <circle cx="9" cy="21" r="1" fill="currentColor"/><circle cx="20" cy="21" r="1" fill="currentColor"/>
                                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" fill="currentColor"/>
                            </svg>
                            Order Now
                        </x-ui.button-primary>
                    </div>
                </form>
            </div>

            <p class="text-xs text-slate-500 mt-3">
                * Excludes certain TLDs and recently renewed domains
            </p>

        </main>
    </x-ui.store-sidebar>
</div>
</div>

@endsection
