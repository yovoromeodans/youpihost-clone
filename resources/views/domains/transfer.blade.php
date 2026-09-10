@extends('layouts.app')

@section('title', 'Transfer Domain — YoupiHost')

@section('content')

@php
    $categories = [
        ['label' => 'Shared Hosting',     'icon' => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>'],
        ['label' => 'Professional Email', 'icon' => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>'],
        ['label' => 'VPS Server',         'icon' => '<rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>'],
        ['label' => 'SSL certificate',    'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'],
    ];
    $actions = [
        ['label' => 'Register a New Domain', 'href' => '#',                      'icon' => '<path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/>'],
        ['label' => 'Transfer in a Domain',  'href' => route('domain.transfer'), 'icon' => '<line x1="4" y1="21" x2="4" y2="14"/><line x1="4" y1="10" x2="4" y2="3"/><line x1="12" y1="21" x2="12" y2="12"/><line x1="12" y1="8" x2="12" y2="3"/><line x1="20" y1="21" x2="20" y2="16"/><line x1="20" y1="12" x2="20" y2="3"/><line x1="1" y1="14" x2="7" y2="14"/><line x1="9" y1="8" x2="15" y2="8"/><line x1="17" y1="16" x2="23" y2="16"/>'],
        ['label' => 'View Cart',             'href' => '#',                      'icon' => '<circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>'],
    ];
@endphp

<div class="min-h-screen">
<div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

    {{-- Titre --}}
    <div class="mb-6">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900">Transfer Domain</h1>
    </div>

    {{-- ══ DROPDOWN MOBILE (visible < lg, juste sous le titre) ══ --}}
    <div class="lg:hidden mb-6 relative" id="mobile-sidebar-wrapper">
        <button type="button"
                onclick="toggleMobileSidebar()"
                class="flex items-center gap-2 px-4 py-2 border border-slate-300
                       rounded text-sm text-slate-700 cursor-pointer
                       hover:border-slate-400 transition-colors duration-150">
            <span>Transfer in a Domain</span>
            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor"
                 stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>
        <div id="mobile-sidebar-dropdown"
             class="hidden absolute top-full left-0 mt-1 w-56 bg-white border border-slate-200
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
                          {{ $action['label'] === 'Transfer in a Domain'
                              ? 'text-primary font-medium'
                              : 'text-slate-600 hover:text-primary' }}">
                    {{ $action['label'] }}
                </a>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ══ LAYOUT DESKTOP : Sidebar + Contenu ══ --}}
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
                                  text-primary hover:text-blue-700 hover:translate-x-1
                                  transition-all duration-150">
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
                                  {{ $action['label'] === 'Transfer in a Domain'
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
    </div>
</div>
</div>

@push('scripts')
<script>
function toggleMobileSidebar() {
    var dd = document.getElementById('mobile-sidebar-dropdown');
    dd.classList.toggle('hidden');
}
document.addEventListener('click', function(e) {
    var wrapper = document.getElementById('mobile-sidebar-wrapper');
    var dd = document.getElementById('mobile-sidebar-dropdown');
    if (wrapper && !wrapper.contains(e.target)) {
        if (dd) dd.classList.add('hidden');
    }
});
</script>
@endpush

@endsection
