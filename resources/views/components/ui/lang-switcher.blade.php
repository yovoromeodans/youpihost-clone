{{--
    Sélecteur de langue réutilisable — utilisé dans footer.blade.php et home-footer.blade.php
    Props :
        - prefix   : chaîne unique pour les IDs DOM (ex: "footer", "home")
        - btnClass : classes supplémentaires du bouton déclencheur (tailles responsive…)
        - title    : libellé aria pour le bouton (défaut "Sélectionner la langue")
--}}
@props([
    'prefix' => 'lang',
    'btnClass' => '',
    'title' => 'Sélectionner la langue',
])

<div class="relative lang-wrapper" id="{{ $prefix }}-lang-wrapper">

    {{-- Bouton déclencheur --}}
    <button
        id="{{ $prefix }}-lang-btn"
        type="button"
        onclick="langToggle(event, '{{ $prefix }}')"
        class="lang-btn flex items-center gap-1.5 text-base {{ $btnClass }} text-slate-700 cursor-pointer select-none"
        aria-haspopup="listbox"
        aria-expanded="false"
        aria-label="{{ $title }}">
        <span id="{{ $prefix }}-lang-flag" class="text-2xl leading-none">🇬🇧</span>
        <span id="{{ $prefix }}-lang-label" class="font-medium">English</span>
        <svg id="{{ $prefix }}-lang-chevron"
             class="lang-chevron w-3.5 h-3.5 transition-transform duration-200 shrink-0"
             fill="none" stroke="currentColor" stroke-width="2.5"
             viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    {{-- Dropdown --}}
    <div
        id="{{ $prefix }}-lang-dropdown"
        class="lang-dropdown hidden absolute bottom-full right-0 mb-2 w-52 bg-white rounded-lg shadow-xl overflow-hidden z-50"
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
                    id="{{ $prefix }}-lang-search"
                    type="text"
                    placeholder="Search..."
                    oninput="langFilterLang(this.value, '{{ $prefix }}')"
                    class="w-full text-sm text-slate-700 placeholder-slate-400 bg-transparent outline-none"
                    autocomplete="off"
                    spellcheck="false">
            </div>
        </div>

        {{-- Liste des langues --}}
        <ul id="{{ $prefix }}-lang-list" class="py-2">
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
                onclick="langSelectLang(this, '{{ $prefix }}')"
                class="lang-item group flex items-center px-5 py-3 text-base text-slate-700 hover:text-primary cursor-pointer transition-colors duration-150">
                <span class="flex items-center justify-between w-full translate-x-0 group-hover:translate-x-3 transition-transform duration-150">
                    <span class="flex items-center gap-3">
                        <span class="text-2xl leading-none">{{ $lang['flag'] }}</span>
                        <span>{{ $lang['label'] }}</span>
                    </span>
                    <span class="lang-select-icon hidden items-center gap-1 text-sm font-medium text-primary whitespace-nowrap">
                        Select
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

@once
@push('scripts')
<script>
(function () {
    'use strict';

    window.langToggle = function (e, prefix) {
        e.stopPropagation();
        var dropdown = document.getElementById(prefix + '-lang-dropdown');
        var btn      = document.getElementById(prefix + '-lang-btn');
        var chevron  = document.getElementById(prefix + '-lang-chevron');
        var search   = document.getElementById(prefix + '-lang-search');
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
                langFilterLang('', prefix);
                setTimeout(function () { search.focus(); }, 50);
            }
        }
    };

    document.addEventListener('click', function (e) {
        document.querySelectorAll('.lang-wrapper').forEach(function (wrapper) {
            if (wrapper.contains(e.target)) return;
            var dropdown = wrapper.querySelector('.lang-dropdown');
            var chevron  = wrapper.querySelector('.lang-chevron');
            var btn      = wrapper.querySelector('.lang-btn');
            if (dropdown) dropdown.classList.add('hidden');
            if (btn)      btn.setAttribute('aria-expanded', 'false');
            if (chevron)  chevron.style.transform = '';
        });
    });

    window.langFilterLang = function (query, prefix) {
        var q     = (query || '').toLowerCase().trim();
        var items = document.querySelectorAll('#' + prefix + '-lang-list .lang-item');
        var isFiltering = q !== '';

        items.forEach(function (item) {
            var search  = item.getAttribute('data-lang-search') || '';
            var matches = (q === '' || search.includes(q));
            var icon    = item.querySelector('.lang-select-icon');

            item.style.display = matches ? '' : 'none';

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

    window.langSelectLang = function (el, prefix) {
        var flag  = el.getAttribute('data-lang-flag')  || '';
        var label = el.getAttribute('data-lang-label') || '';

        var flagEl   = document.getElementById(prefix + '-lang-flag');
        var labelEl  = document.getElementById(prefix + '-lang-label');
        var dropdown = document.getElementById(prefix + '-lang-dropdown');
        var chevron  = document.getElementById(prefix + '-lang-chevron');
        var btn      = document.getElementById(prefix + '-lang-btn');

        if (flagEl)  flagEl.textContent  = flag;
        if (labelEl) labelEl.textContent = label;

        if (dropdown) dropdown.classList.add('hidden');
        if (btn)      btn.setAttribute('aria-expanded', 'false');
        if (chevron)  chevron.style.transform = '';
    };
}());
</script>
@endpush
@endonce