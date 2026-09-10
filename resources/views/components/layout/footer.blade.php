{{--
    Composant Footer - YoupiHost Clone
    Utilisation : <x-footer />
--}}

<footer class="bg-white border-t border-slate-200 font-sans">

    {{-- ============================================================
         BARRE PRINCIPALE : Copyright | Logos paiement | Langue | Top
    ============================================================ --}}
    <div style="max-width:1360px;margin-left:auto;margin-right:auto;" class="px-4 sm:px-6 lg:px-8">

        {{-- ================================================================
             DESKTOP : une seule ligne  Copyright | Logos | Langue+Top
             MOBILE  : colonne inversée Langue+Top / Logos / Copyright
        ================================================================ --}}
        <div class="flex flex-col-reverse lg:flex-row lg:items-center lg:justify-between gap-4 lg:gap-3 py-5">

            {{-- ── Copyright ── --}}
            <p class="text-sm text-slate-600 text-center lg:text-left whitespace-nowrap">
                Copyright &copy; {{ date('Y') }} YoupiHost. Tous droits réservés.
            </p>

            {{-- ── Logos moyens de paiement ── --}}
            <div class="flex items-center justify-center gap-2 flex-wrap">
                @php
                    $payments = [
                        ['file' => 'visa.png',         'label' => 'Visa'],
                        ['file' => 'wave.png',         'label' => 'Wave'],
                        ['file' => 'orange.png',       'label' => 'Orange Money'],
                        ['file' => 'corrismoney.png',  'label' => 'Corris Money'],
                        ['file' => 'master_card.jpg',  'label' => 'Mastercard'],
                        ['file' => 'airtel.png',       'label' => 'Airtel Money'],
                        ['file' => 'moov_africa.png',  'label' => 'Moov Africa'],
                        ['file' => 'celtis.jpg',       'label' => 'Celtis'],
                        ['file' => 'mtn.jpg',          'label' => 'MTN'],
                        ['file' => 'free.png',         'label' => 'Free Sénégal'],
                    ];
                @endphp

                @foreach ($payments as $payment)
                    <div class="footer-payment-item relative group">
                        <img
                            src="{{ asset('assets/images/payments/' . $payment['file']) }}"
                            alt="{{ $payment['label'] }}"
                            class="h-9 w-auto object-contain block"
                            loading="lazy"
                        >
                        {{-- Tooltip --}}
                        <span class="pointer-events-none absolute bottom-full left-1/2 -translate-x-1/2 mb-2
                                     bg-white text-slate-700 text-xs font-medium
                                     px-2 py-1 rounded shadow-md border border-slate-200
                                     whitespace-nowrap
                                     opacity-0 group-hover:opacity-100
                                     translate-y-1 group-hover:translate-y-0
                                     transition-all duration-150 z-50">
                            {{ $payment['label'] }}
                            <span class="absolute top-full left-1/2 -translate-x-1/2
                                         border-4 border-transparent border-t-white -mt-px"></span>
                        </span>
                    </div>
                @endforeach
            </div>

            {{-- ── Sélecteur de langue + Bouton Top ── --}}
            <div class="flex items-center justify-center lg:justify-end gap-3">

                {{-- Sélecteur de langue --}}
                <div class="relative" id="footer-lang-wrapper">

                    {{-- Bouton déclencheur --}}
                    <button
                        id="footer-lang-btn"
                        type="button"
                        onclick="footerToggleLang(event)"
                        class="flex items-center gap-1.5 text-base text-slate-700 cursor-pointer select-none"
                        aria-haspopup="listbox"
                        aria-expanded="false"
                        aria-label="Sélectionner la langue">
                        {{-- Drapeau actif --}}
                        <span id="footer-lang-flag" class="text-2xl leading-none">🇬🇧</span>
                        <span id="footer-lang-label" class="font-medium">English</span>
                        <svg id="footer-lang-chevron"
                             class="w-3.5 h-3.5 transition-transform duration-200 shrink-0"
                             fill="none" stroke="currentColor" stroke-width="2.5"
                             viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    {{-- Dropdown --}}
                    <div
                        id="footer-lang-dropdown"
                        class="hidden absolute bottom-full right-0 mb-2 w-52 bg-white rounded-lg shadow-xl overflow-hidden z-50"
                        role="listbox"
                        aria-label="Langues disponibles">

                        {{-- Champ de recherche --}}
                        <div class="px-3 pt-3 pb-2 border-b border-slate-100">
                            <div class="flex items-center gap-2 text-slate-400">
                                <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor"
                                     stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M21 21l-4.35-4.35M17 11A6 6 0 111 11a6 6 0 0116 0z"/>
                                </svg>
                                <input
                                    id="footer-lang-search"
                                    type="text"
                                    placeholder="Search..."
                                    oninput="footerFilterLang(this.value)"
                                    class="w-full text-sm text-slate-700 placeholder-slate-400 bg-transparent outline-none"
                                    autocomplete="off"
                                    spellcheck="false">
                            </div>
                        </div>

                        {{-- Liste des langues --}}
                        <ul id="footer-lang-list" class="py-2">
                            @php
                                $languages = [
                                    ['code' => 'en', 'label' => 'English',  'flag' => '🇬🇧'],
                                    ['code' => 'fr', 'label' => 'Français', 'flag' => '🇫🇷'],
                                ];
                            @endphp
                            @foreach ($languages as $lang)
                            <li role="option"
                                data-lang-code="{{ $lang['code'] }}"
                                data-lang-label="{{ $lang['label'] }}"
                                data-lang-flag="{{ $lang['flag'] }}"
                                data-lang-search="{{ strtolower($lang['label']) }}"
                                onclick="footerSelectLang(this)"
                                class="footer-lang-item group flex items-center px-5 py-3 text-base text-slate-700 hover:text-primary cursor-pointer transition-colors duration-150">
                                {{-- Tout le contenu dans un seul wrapper qui translate ensemble --}}
                                <span class="flex items-center justify-between w-full translate-x-0 group-hover:translate-x-3 transition-transform duration-150">
                                    {{-- Drapeau + Label --}}
                                    <span class="flex items-center gap-3">
                                        <span class="text-2xl leading-none">{{ $lang['flag'] }}</span>
                                        <span>{{ $lang['label'] }}</span>
                                    </span>
                                    {{-- Icône "Select" — visible uniquement en mode filtre actif --}}
                                    <span class="footer-lang-select-icon hidden items-center gap-1 text-sm font-medium text-primary whitespace-nowrap">
                                        Select
                                        {{-- Icône ↵ corner-down-left (enter / select) --}}
                                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             aria-hidden="true">
                                            <polyline points="9 10 4 15 9 20"/>
                                            <path d="M20 4v7a4 4 0 0 1-4 4H4"/>
                                        </svg>
                                    </span>
                                </span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- Bouton Top ── flèche + barre au-dessus --}}
                <button
                    type="button"
                    onclick="footerScrollToTop()"
                    class="flex items-center justify-center text-slate-400 hover:text-primary transition-colors duration-200 p-1 cursor-pointer"
                    aria-label="Retour en haut de la page"
                    title="Retour en haut">
                    {{-- Icône : barre + flèche vers le haut --}}
                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <rect x="3" y="3" width="14" height="1.8" rx="0.9"/>
                        <path d="M10 17.5V7M10 7l-4 4M10 7l4 4" stroke="currentColor" stroke-width="1.8"
                              stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                    </svg>
                </button>

            </div>{{-- /langue+top --}}
        </div>{{-- /flex principal --}}
    </div>

</footer>

{{-- ============================================================
     SCRIPTS — dropdown langue + scroll top
     (protégés contre les doublons avec @once)
============================================================ --}}
@once
<script>
(function () {
    'use strict';

    /* ── Scroll vers le haut ── */
    window.footerScrollToTop = function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    /* ── Ouvrir / fermer le dropdown ── */
    window.footerToggleLang = function (e) {
        e.stopPropagation();
        var dropdown = document.getElementById('footer-lang-dropdown');
        var btn      = document.getElementById('footer-lang-btn');
        var chevron  = document.getElementById('footer-lang-chevron');
        var search   = document.getElementById('footer-lang-search');
        var isOpen   = !dropdown.classList.contains('hidden');

        if (isOpen) {
            dropdown.classList.add('hidden');
            btn.setAttribute('aria-expanded', 'false');
            chevron.style.transform = '';
        } else {
            dropdown.classList.remove('hidden');
            btn.setAttribute('aria-expanded', 'true');
            chevron.style.transform = 'rotate(180deg)';
            if (search) {
                search.value = '';
                footerFilterLang('');
                setTimeout(function () { search.focus(); }, 50);
            }
        }
    };

    /* ── Fermer en cliquant dehors ── */
    document.addEventListener('click', function (e) {
        var wrapper  = document.getElementById('footer-lang-wrapper');
        var dropdown = document.getElementById('footer-lang-dropdown');
        var chevron  = document.getElementById('footer-lang-chevron');
        var btn      = document.getElementById('footer-lang-btn');
        if (wrapper && !wrapper.contains(e.target)) {
            if (dropdown) dropdown.classList.add('hidden');
            if (btn)      btn.setAttribute('aria-expanded', 'false');
            if (chevron)  chevron.style.transform = '';
        }
    });

    /* ── Filtrer les langues selon la recherche ── */
    window.footerFilterLang = function (query) {
        var q     = (query || '').toLowerCase().trim();
        var items = document.querySelectorAll('.footer-lang-item');
        var isFiltering = q !== '';

        items.forEach(function (item) {
            var search  = item.getAttribute('data-lang-search') || '';
            var matches = (q === '' || search.includes(q));
            var icon    = item.querySelector('.footer-lang-select-icon');

            // Afficher / masquer l'item
            item.style.display = matches ? '' : 'none';

            // Afficher l'icône "Select" uniquement quand on filtre et que ça matche
            if (icon) {
                if (isFiltering && matches) {
                    icon.classList.remove('hidden');
                    icon.classList.add('flex');
                } else {
                    icon.classList.add('hidden');
                    icon.classList.remove('flex');
                }
            }
        });
    };

    /* ── Sélectionner une langue ── */
    window.footerSelectLang = function (el) {
        var flag  = el.getAttribute('data-lang-flag')  || '';
        var label = el.getAttribute('data-lang-label') || '';

        var flagEl   = document.getElementById('footer-lang-flag');
        var labelEl  = document.getElementById('footer-lang-label');
        var dropdown = document.getElementById('footer-lang-dropdown');
        var chevron  = document.getElementById('footer-lang-chevron');
        var btn      = document.getElementById('footer-lang-btn');

        if (flagEl)  flagEl.textContent  = flag;
        if (labelEl) labelEl.textContent = label;

        if (dropdown) dropdown.classList.add('hidden');
        if (btn)      btn.setAttribute('aria-expanded', 'false');
        if (chevron)  chevron.style.transform = '';
    };
}());
</script>
@endonce
