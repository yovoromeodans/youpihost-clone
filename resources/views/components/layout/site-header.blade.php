{{--
    Composant Header - YoupiHost Clone
    Utilisation : x-site-header
--}}<header class="bg-white shadow-sm font-sans mb-3" id="site-header">

    <div style="max-width:1360px;margin-left:auto;margin-right:auto;" class="px-4 sm:px-6 lg:px-8">

        {{-- ══════════════════════════════════════════
             LIGNE 1 : Logo  |  Panier  XOF ▼
             Visible desktop uniquement
        ══════════════════════════════════════════ --}}
        <div class="hidden lg:flex items-center justify-between py-3">

            {{-- Logo --}}
            <a href="/" class="flex items-center shrink-0">
                <img src="{{ asset('assets/images/logo/logo_big.198293982.png') }}"
                     alt="YoupiHost" class="h-8 w-auto">
            </a>

            {{-- Panier + Devise --}}
            <div class="flex items-center gap-1.5 text-sm text-slate-600">

                {{-- Icône panier (shopping bag style) --}}
                <a href="{{ route('cart') }}" class="flex items-center gap-1 hover:text-primary transition-colors duration-150">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                    </svg>
                    Panier
                </a>

                {{-- Séparateur --}}
                <span class="text-slate-300 mx-1">|</span>

                {{-- Dropdown devise --}}
                <div class="relative" id="header-currency-wrapper">
                    <button type="button"
                            id="header-currency-btn"
                            onclick="headerToggleCurrency(event)"
                            class="flex items-center gap-0.5 text-sm text-slate-600 hover:text-primary transition-colors duration-150 cursor-pointer select-none"
                            aria-haspopup="true" aria-expanded="false">
                        <span id="header-currency-label">XOF</span>
                        <svg id="header-currency-chevron"
                             class="w-3 h-3 transition-transform duration-200 shrink-0"
                             fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="header-currency-dropdown"
                         class="hidden absolute top-full right-0 mt-1 w-32 bg-white border border-slate-200 rounded-lg shadow-xl z-50 py-1"
                         role="listbox">
                        @php $currencies = ['USD','XOF','EUR']; @endphp
                        @foreach ($currencies as $cur)
                        <button type="button"
                                onclick="headerSelectCurrency('{{ $cur }}')"
                                data-currency="{{ $cur }}"
                                class="w-full text-left px-4 py-2.5 text-sm transition-colors duration-150 cursor-pointer
                                       {{ $cur === 'XOF' ? 'text-primary bg-blue-50 font-medium' : 'text-slate-700 hover:text-primary' }}">
                            <span class="block translate-x-0 hover:translate-x-2 transition-transform duration-150">
                                {{ $cur }}
                            </span>
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- ══════════════════════════════════════════
             LIGNE 2 DESKTOP : Nav  |  Inscription  Connexion
             + LIGNE UNIQUE MOBILE : Burger Logo | Panier XOF
        ══════════════════════════════════════════ --}}
        <div class="flex items-center justify-between h-14 lg:h-16">

            {{-- ── MOBILE : Burger + Logo ── --}}
            <div class="flex items-center gap-3 lg:hidden">
                <button type="button" onclick="headerOpenDrawer()"
                        class="text-slate-600 hover:text-primary transition-colors duration-200 cursor-pointer"
                        aria-label="Menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="6"  x2="21" y2="6"/>
                        <line x1="3" y1="12" x2="21" y2="12"/>
                        <line x1="3" y1="18" x2="21" y2="18"/>
                    </svg>
                </button>
                <a href="/" class="flex items-center gap-1">
                    <img src="{{ asset('assets/images/logo/logo_big.198293982.png') }}"
                         alt="YoupiHost" class="h-7 w-auto">
                </a>
            </div>

            {{-- ── DESKTOP : Navigation ── --}}
            <nav class="hidden lg:flex items-center gap-0" aria-label="Navigation principale">

                {{-- Hébergements ▼ --}}
                <x-ui.nav-dropdown label="Hébergements" width="w-72" btn-class="pl-0 pr-3">
                    <x-ui.nav-dropdown-item href="{{ route('hebergement.mutualise') }}" label="Hébergement Web">
                        <x-slot name="icon"><svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg></x-slot>
                    </x-ui.nav-dropdown-item>
                    <x-ui.nav-dropdown-item href="{{ route('vps') }}" label="Serveur privé virtuel">
                        <x-slot name="icon"><svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg></x-slot>
                    </x-ui.nav-dropdown-item>
                    <x-ui.nav-dropdown-item href="{{ route('hebergement.mutualise') }}" label="Hébergement pour WordPress">
                        <x-slot name="icon"><svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></x-slot>
                    </x-ui.nav-dropdown-item>
                    <div class="border-t border-slate-100 mt-1 pt-1">
                        <x-ui.nav-dropdown-item href="{{ route('hebergement.mutualise') }}" label="Tous les options d'hébergement">
                            <x-slot name="icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M5 12h14M12 5l7 7-7 7"/></svg></x-slot>
                        </x-ui.nav-dropdown-item>
                    </div>
                </x-ui.nav-dropdown>

                {{-- Domaines ▼ --}}
                <x-ui.nav-dropdown label="Domaines" width="w-72">
                    <x-ui.nav-dropdown-item href="{{ route('domain.register') }}" label="Enregistrer un nom de domaine">
                        <x-slot name="icon"><svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></x-slot>
                    </x-ui.nav-dropdown-item>
                    <x-ui.nav-dropdown-item href="{{ route('domain.transfer') }}" label="Transférer un nom de domaine">
                        <x-slot name="icon"><svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><line x1="4" y1="21" x2="4" y2="14"/><line x1="4" y1="10" x2="4" y2="3"/><line x1="12" y1="21" x2="12" y2="12"/><line x1="12" y1="8" x2="12" y2="3"/><line x1="20" y1="21" x2="20" y2="16"/><line x1="20" y1="12" x2="20" y2="3"/><line x1="1" y1="14" x2="7" y2="14"/><line x1="9" y1="8" x2="15" y2="8"/><line x1="17" y1="16" x2="23" y2="16"/></svg></x-slot>
                    </x-ui.nav-dropdown-item>
                    <x-ui.nav-dropdown-item href="{{ route('domain.pricing') }}" label="Tarif des noms de domaine" separator-top>
                        <x-slot name="icon"><svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></x-slot>
                    </x-ui.nav-dropdown-item>
                </x-ui.nav-dropdown>

                {{-- Email Pro --}}
                <a href="{{ route('email-pro') }}" class="px-3 py-2 text-base text-slate-700 hover:text-primary transition-colors duration-150">
                    Email Pro
                </a>

                {{-- VPS --}}
                <a href="{{ route('vps') }}" class="px-3 py-2 text-base text-slate-700 hover:text-primary transition-colors duration-150">
                    VPS
                </a>

                {{-- Assistance ▼ --}}
                <x-ui.nav-dropdown label="Assistance" width="w-64">
                    <x-ui.nav-dropdown-item href="{{ route('contact') }}" label="Contactez-nous" separator-bottom>
                        <x-slot name="icon"><svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></x-slot>
                    </x-ui.nav-dropdown-item>
                    <x-ui.nav-dropdown-item href="#" label="État du réseau">
                        <x-slot name="icon"><svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></x-slot>
                    </x-ui.nav-dropdown-item>
                    <x-ui.nav-dropdown-item href="{{ route('knowledgebase') }}" label="Base de connaissances">
                        <x-slot name="icon"><svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></x-slot>
                    </x-ui.nav-dropdown-item>
                    <x-ui.nav-dropdown-item href="{{ route('announcements') }}" label="Actualités">
                        <x-slot name="icon"><svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg></x-slot>
                    </x-ui.nav-dropdown-item>
                </x-ui.nav-dropdown>

            </nav>

            {{-- ── MOBILE droite : Panier + XOF ── --}}
            <div class="flex items-center gap-2 lg:hidden text-sm text-slate-600">
                {{-- Cart --}}
                <a href="#" class="flex items-center hover:text-primary transition-colors duration-150 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8"
                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                    </svg>
                </a>
                {{-- Currency --}}
                <div class="relative" id="header-currency-wrapper-mobile">
                    <button type="button"
                            onclick="headerToggleCurrencyMobile(event)"
                            class="flex items-center gap-0.5 text-sm text-slate-600 hover:text-primary cursor-pointer select-none">
                        <span id="header-currency-label-mobile">XOF</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="header-currency-dropdown-mobile"
                         class="hidden absolute top-full right-0 mt-1 w-24 bg-white border border-slate-200 rounded-lg shadow-xl z-50 py-1">
                        @foreach ($currencies as $cur)
                        <button type="button"
                                onclick="headerSelectCurrencyMobile('{{ $cur }}')"
                                data-currency-mobile="{{ $cur }}"
                                class="w-full text-left px-4 py-2 text-sm cursor-pointer {{ $cur === 'XOF' ? 'text-primary font-medium' : 'text-slate-700 hover:text-primary' }}">
                            {{ $cur }}
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- ── DESKTOP droite : Inscription + Connexion ── --}}
            <div class="hidden lg:flex items-center gap-2">
                <x-ui.button-secondary href="#" text="Inscription" class="py-2.5 px-5" />
                <x-ui.button-primary   href="#" text="Connexion"   class="py-2.5 px-5" />
            </div>

        </div>{{-- /ligne 2 --}}
    </div>
</header>

{{-- ════════════════════════════════════════════
     OVERLAY + DRAWER MOBILE
════════════════════════════════════════════ --}}
<div id="drawer-overlay"
     class="fixed inset-0 bg-black/40 z-40 hidden opacity-0"
     onclick="headerCloseDrawer()">
    {{-- Bouton X flottant à droite du drawer --}}
    <button type="button"
            onclick="headerCloseDrawer()"
            class="absolute top-4 left-72 ml-4 text-primary hover:text-blue-700 transition-colors duration-200 cursor-pointer"
            aria-label="Fermer le menu">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.5"
             viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"/>
            <line x1="6"  y1="6" x2="18" y2="18"/>
        </svg>
    </button>
</div>

<div id="mobile-drawer"
     class="fixed top-0 left-0 h-full w-72 bg-white z-50 flex flex-col overflow-y-auto shadow-2xl">

    {{-- Navigation drawer --}}
    <nav class="flex-1 px-6 py-4">
        @php
            $mobileNav = [
                ['label' => 'Hébergements', 'dropdown' => [
                    ['label' => 'Hébergement Web',                'href' => route('hebergement.mutualise'), 'icon' => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>'],
                    ['label' => 'Serveur privé virtuel',          'href' => route('vps'), 'icon' => '<rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>'],
                    ['label' => 'Hébergement pour WordPress',     'href' => route('hebergement.mutualise'), 'icon' => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/>'],
                    ['label' => "Tous les options d'hébergement", 'href' => route('hebergement.mutualise'), 'icon' => '<path d="M5 12h14M12 5l7 7-7 7"/>'],
                ]],
                ['label' => 'Domaines', 'dropdown' => [
                    ['label' => 'Enregistrer un nom de domaine',  'href' => route('domain.register'), 'icon' => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>'],
                    ['label' => 'Transférer un nom de domaine',   'href' => route('domain.transfer'), 'icon' => '<line x1="4" y1="21" x2="4" y2="14"/><line x1="4" y1="10" x2="4" y2="3"/><line x1="12" y1="21" x2="12" y2="12"/><line x1="12" y1="8" x2="12" y2="3"/><line x1="20" y1="21" x2="20" y2="16"/><line x1="20" y1="12" x2="20" y2="3"/><line x1="1" y1="14" x2="7" y2="14"/><line x1="9" y1="8" x2="15" y2="8"/><line x1="17" y1="16" x2="23" y2="16"/>'],
                    ['label' => 'Tarif des noms de domaine',      'href' => route('domain.pricing'), 'icon' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>'],
                ]],
                ['label' => 'Email Pro', 'href' => route('email-pro')],
                ['label' => 'VPS',       'href' => route('vps')],
                ['label' => 'Assistance', 'dropdown' => [
                    ['label' => 'Contactez-nous', 'href' => route('contact'), 'icon' => '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>'],
                    ['label' => 'État du réseau',        'href' => '#', 'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>'],
                    ['label' => 'Base de connaissances', 'href' => route('knowledgebase'), 'icon' => '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>'],
                    ['label' => 'Actualités',            'href' => route('announcements'), 'icon' => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>'],
                ]],
            ];
        @endphp

        @foreach ($mobileNav as $item)
            @if (isset($item['dropdown']))
            <div class="mobile-accordion">
                <button type="button"
                        onclick="headerToggleMobileAccordion(this)"
                        class="w-full flex items-center justify-between py-4 text-base text-slate-700 cursor-pointer">
                    <span>{{ $item['label'] }}</span>
                    <svg class="w-4 h-4 mobile-acc-chevron text-slate-400 transition-transform duration-200"
                         fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="mobile-acc-panel hidden pb-2 pl-6 space-y-1 border-0 outline-none">
                    @foreach ($item['dropdown'] as $sub)
                    <a href="{{ $sub['href'] }}"
                       class="flex items-center gap-3 py-2.5 text-sm text-slate-600 hover:text-primary transition-colors duration-150"
                       onclick="headerCloseDrawer()">
                        @if (!empty($sub['icon']))
                        <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" stroke="currentColor"
                             stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            {!! $sub['icon'] !!}
                        </svg>
                        @endif
                        {{ $sub['label'] }}
                    </a>
                    @endforeach
                </div>
            </div>
            @else
            <a href="{{ $item['href'] }}"
               class="block py-4 text-base text-slate-700 hover:text-primary transition-colors duration-150"
               onclick="headerCloseDrawer()">
                {{ $item['label'] }}
            </a>
            @endif
        @endforeach

        {{-- Bouton Inscription --}}
        <div class="pt-5">
            <x-ui.button-secondary href="#" text="Inscription" class="w-full justify-center py-3 text-base" />
        </div>

        {{-- Langue --}}
        <div class="relative mt-3" id="mobile-lang-wrapper">
            <button type="button" onclick="headerToggleMobileLang(event)"
                    class="w-full flex items-center justify-between py-4 text-base text-slate-700 cursor-pointer outline-none border-0 bg-transparent">
                <span class="flex items-center gap-2">
                    <span id="mobile-lang-flag" class="text-xl">🇫🇷</span>
                    <span id="mobile-lang-label">Français</span>
                </span>
                <svg id="mobile-lang-chevron" class="w-4 h-4 text-slate-400 transition-transform duration-200"
                     fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div id="mobile-lang-dropdown" class="hidden py-1">
                <button type="button" onclick="headerSetMobileLang('🇫🇷','Français')"
                        class="w-full flex items-center gap-3 px-2 py-2.5 text-sm text-slate-700 hover:text-slate-900 cursor-pointer outline-none border-0 bg-transparent">
                    <span class="text-xl">🇫🇷</span><span>Français</span>
                </button>
                <button type="button" onclick="headerSetMobileLang('🇬🇧','English')"
                        class="w-full flex items-center gap-3 px-2 py-2.5 text-sm text-slate-700 hover:text-slate-900 cursor-pointer outline-none border-0 bg-transparent">
                    <span class="text-xl">🇬🇧</span><span>English</span>
                </button>
            </div>
        </div>

        {{-- Bouton Connexion --}}
        <div class="pt-3 pb-6">
            <x-ui.button-primary href="#" text="Connexion" class="w-full justify-center py-3 text-base" />
        </div>
    </nav>
</div>

{{-- ════════════════════════════════════════════
     SCRIPTS
════════════════════════════════════════════ --}}
@once
<script>
(function () {
    'use strict';

    /* ── Dropdowns desktop ── */
    function closeAllDropdowns(except) {
        document.querySelectorAll('.header-dropdown-wrapper').forEach(function (w) {
            if (w === except) return;
            var dd = w.querySelector('.header-dropdown');
            var chv = w.querySelector('.header-chevron');
            var btn = w.querySelector('.header-nav-btn');
            if (dd)  dd.classList.add('hidden');
            if (chv) chv.style.transform = '';
            if (btn) btn.setAttribute('aria-expanded','false');
        });
    }
    document.querySelectorAll('.header-dropdown-wrapper').forEach(function (w) {
        w.querySelector('.header-nav-btn').addEventListener('click', function (e) {
            e.stopPropagation();
            var dd  = w.querySelector('.header-dropdown');
            var chv = w.querySelector('.header-chevron');
            var btn = w.querySelector('.header-nav-btn');
            var open = !dd.classList.contains('hidden');
            closeAllDropdowns(w);
            closeCurrency(); closeCurrencyMobile();
            if (open) {
                dd.classList.add('hidden');
                chv.style.transform = '';
                btn.setAttribute('aria-expanded','false');
            } else {
                dd.classList.remove('hidden');
                chv.style.transform = 'rotate(180deg)';
                btn.setAttribute('aria-expanded','true');
            }
        });
    });
    document.addEventListener('click', function () {
        closeAllDropdowns(null); closeCurrency(); closeCurrencyMobile();
    });

    /* ── Devise desktop ── */
    function closeCurrency() {
        var dd = document.getElementById('header-currency-dropdown');
        var chv = document.getElementById('header-currency-chevron');
        var btn = document.getElementById('header-currency-btn');
        if (dd) dd.classList.add('hidden');
        if (chv) chv.style.transform = '';
        if (btn) btn.setAttribute('aria-expanded','false');
    }
    window.headerToggleCurrency = function (e) {
        e.stopPropagation(); closeAllDropdowns(null);
        var dd  = document.getElementById('header-currency-dropdown');
        var chv = document.getElementById('header-currency-chevron');
        var btn = document.getElementById('header-currency-btn');
        var open = !dd.classList.contains('hidden');
        if (open) { closeCurrency(); } else {
            dd.classList.remove('hidden');
            chv.style.transform = 'rotate(180deg)';
            btn.setAttribute('aria-expanded','true');
        }
    };
    window.headerSelectCurrency = function (code) {
        var lbl = document.getElementById('header-currency-label');
        if (lbl) lbl.textContent = code;
        document.querySelectorAll('#header-currency-dropdown [data-currency]').forEach(function (el) {
            var active = el.dataset.currency === code;
            el.classList.toggle('text-primary', active);
            el.classList.toggle('font-medium', active);
            el.classList.toggle('text-slate-700', !active);
        });
        closeCurrency();
    };

    /* ── Devise mobile ── */
    function closeCurrencyMobile() {
        var dd = document.getElementById('header-currency-dropdown-mobile');
        if (dd) dd.classList.add('hidden');
    }
    window.headerToggleCurrencyMobile = function (e) {
        e.stopPropagation();
        var dd = document.getElementById('header-currency-dropdown-mobile');
        if (dd) dd.classList.toggle('hidden');
    };
    window.headerSelectCurrencyMobile = function (code) {
        var lbl = document.getElementById('header-currency-label-mobile');
        if (lbl) lbl.textContent = code;
        document.querySelectorAll('[data-currency-mobile]').forEach(function (el) {
            var active = el.dataset.currencyMobile === code;
            el.classList.toggle('text-primary', active);
            el.classList.toggle('font-medium', active);
            el.classList.toggle('text-slate-700', !active);
        });
        closeCurrencyMobile();
    };

    /* ── Drawer mobile ── */
    window.headerOpenDrawer = function () {
        var drawer  = document.getElementById('mobile-drawer');
        var overlay = document.getElementById('drawer-overlay');
        overlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        requestAnimationFrame(function () {
            overlay.style.opacity = '1';
            drawer.classList.add('drawer-open');
        });
    };
    window.headerCloseDrawer = function () {
        var drawer  = document.getElementById('mobile-drawer');
        var overlay = document.getElementById('drawer-overlay');
        drawer.classList.remove('drawer-open');
        overlay.style.opacity = '0';
        setTimeout(function () {
            overlay.classList.add('hidden');
            document.body.style.overflow = '';
        }, 300);
    };

    /* ── Accordéon mobile ── */
    window.headerToggleMobileAccordion = function (btn) {
        var panel  = btn.nextElementSibling;
        var chv    = btn.querySelector('.mobile-acc-chevron');
        var isOpen = !panel.classList.contains('hidden');
        document.querySelectorAll('.mobile-acc-panel').forEach(function (p) { p.classList.add('hidden'); });
        document.querySelectorAll('.mobile-acc-chevron').forEach(function (c) { c.style.transform = ''; });
        if (!isOpen) {
            panel.classList.remove('hidden');
            if (chv) chv.style.transform = 'rotate(180deg)';
        }
    };

    /* ── Langue mobile ── */
    window.headerToggleMobileLang = function (e) {
        e.stopPropagation();
        var dd  = document.getElementById('mobile-lang-dropdown');
        var chv = document.getElementById('mobile-lang-chevron');
        var open = !dd.classList.contains('hidden');
        dd.classList.toggle('hidden', open);
        if (chv) chv.style.transform = open ? '' : 'rotate(180deg)';
    };
    window.headerSetMobileLang = function (flag, label) {
        var f = document.getElementById('mobile-lang-flag');
        var l = document.getElementById('mobile-lang-label');
        var dd  = document.getElementById('mobile-lang-dropdown');
        var chv = document.getElementById('mobile-lang-chevron');
        if (f) f.textContent = flag;
        if (l) l.textContent = label;
        if (dd) dd.classList.add('hidden');
        if (chv) chv.style.transform = '';
    };
}());
</script>
@endonce
