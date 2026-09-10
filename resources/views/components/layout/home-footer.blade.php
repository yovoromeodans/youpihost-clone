{{--
    Footer SPÉCIFIQUE À LA PAGE D'ACCUEIL (home)
    - 4 colonnes : Logo+Socials+Paiment | Products | Support | Conditions
    - Barre copyright (2 éléments):  texte gauche | Langue + Top droite
    --}}

<footer class="bg-white border-t border-slate-200 font-sans mt-10">

    {{-- ============================================================
         PARTIE HAUTE : 4 COLONNES
    ============================================================ --}}
    <div style="max-width:1360px;margin-left:auto;margin-right:auto;" class="px-4 sm:px-6 lg:px-8 py-12 sm:py-14">

        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-8">

            {{-- ── COLONNE 1 : Logo + Contact + Réseaux sociaux + Paiements ── --}}
            <div class="col-span-2 md:col-span-2 lg:col-span-1">

                {{-- Logo YoupiHost --}}
                <x-logo.logo class="gap-1.5 mb-5" size="h-8 sm:h-9 w-auto" />

                {{-- "Get in touch with us!" --}}
                <p class="text-base text-slate-500 mb-5">
                    Get in touch with us!
                </p>

                {{-- Icônes réseaux sociaux --}}
                <div class="flex items-center gap-4 mb-8">
                    {{-- Facebook --}}
                    <a href="#" aria-label="Facebook" class="text-slate-500 hover:scale-110 transition-transform duration-150 inline-block">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.5 21v-7.5h2.52l.377-2.94H13.5V8.71c0-.85.235-1.429 1.455-1.429h1.553V4.71c-.268-.036-1.192-.115-2.27-.115-2.245 0-3.78 1.371-3.78 3.887v2.173H7.9v2.94h2.559V21h3.041Z"/>
                        </svg>
                    </a>
                    {{-- TikTok --}}
                    <a href="#" aria-label="TikTok" class="text-slate-500 hover:scale-110 transition-transform duration-150 inline-block">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5.8 20.1a6.34 6.34 0 0 0 10.86-4.43V10.23a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1.84-.66Z"/>
                        </svg>
                    </a>
                    {{-- LinkedIn --}}
                    <a href="#" aria-label="LinkedIn" class="text-slate-500 hover:scale-110 transition-transform duration-150 inline-block">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.98 3.5a2.5 2.5 0 1 1 0 5.001 2.5 2.5 0 0 1 0-5Zm-.23 6.98H5.5v10.52H4.75V10.48ZM9 10.48h.75v1.45h.06c.19-1.14 1.55-2.35 3.66-2.35 3.91 0 4.63 2.58 4.63 5.93v5.49h-.75v-4.86c0-1.16-.02-2.65-1.62-2.65-1.62 0-1.87 1.26-1.87 2.57v4.94H12v-9.58ZM3 2a1 1 0 1 0 0 2h18a1 1 0 1 0 0-2H3Z"/>
                        </svg>
                    </a>
                    {{-- Instagram --}}
                    <a href="#" aria-label="Instagram" class="text-slate-500 hover:scale-110 transition-transform duration-150 inline-block">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="5"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17.5" cy="6.5" r="1" fill="currentColor"/>
                        </svg>
                    </a>
                    {{-- YouTube --}}
                    <a href="#" aria-label="YouTube" class="text-slate-500 hover:scale-110 transition-transform duration-150 inline-block">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.5 6.5a3.02 3.02 0 0 0-2.12-2.14C19.5 4 12 4 12 4s-7.5 0-9.38.36A3.02 3.02 0 0 0 .5 6.5 31.6 31.6 0 0 0 .15 12 31.6 31.6 0 0 0 .5 17.5 3.02 3.02 0 0 0 2.62 19.64C4.5 20 12 20 12 20s7.5 0 9.38-.36a3.02 3.02 0 0 0 2.12-2.14 31.6 31.6 0 0 0 .35-5.5 31.6 31.6 0 0 0-.35-5.5ZM9.75 15.5v-7l6.5 3.5-6.5 3.5Z"/>
                        </svg>
                    </a>
                    {{-- WhatsApp --}}
                    <a href="#" aria-label="WhatsApp" class="text-slate-500 hover:scale-110 transition-transform duration-150 inline-block">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                    </a>
                </div>

                {{-- Logos moyens de paiement (3 rangées) --}}
                @php
                    $paymentsRow1 = [
                        ['file' => 'visa.png',         'label' => 'Visa'],
                        ['file' => 'wave.png',         'label' => 'Wave'],
                        ['file' => 'orange.png',       'label' => 'Orange Money'],
                    ];
                    $paymentsRow2 = [
                        ['file' => 'corrismoney.png',  'label' => 'Corris Money'],
                        ['file' => 'master_card.jpg',  'label' => 'Mastercard'],
                        ['file' => 'airtel.png',       'label' => 'Airtel Money'],
                        ['file' => 'moov_africa.png',  'label' => 'Moov Africa'],
                    ];
                    $paymentsRow3 = [
                        ['file' => 'celtis.jpg',       'label' => 'Celtis'],
                        ['file' => 'mtn.jpg',          'label' => 'MTN'],
                        ['file' => 'free.png',         'label' => 'Free Sénégal'],
                    ];
                @endphp

                <div class="space-y-3">
                    <div class="flex items-center gap-2">
                        @foreach ($paymentsRow1 as $p)
                            <img src="{{ asset('assets/images/payments/' . $p['file']) }}" alt="{{ $p['label'] }}"
                                 class="h-7 w-auto object-contain" loading="lazy">
                        @endforeach
                    </div>
                    <div class="flex items-center gap-2">
                        @foreach ($paymentsRow2 as $p)
                            <img src="{{ asset('assets/images/payments/' . $p['file']) }}" alt="{{ $p['label'] }}"
                                 class="h-7 w-auto object-contain" loading="lazy">
                        @endforeach
                    </div>
                    <div class="flex items-center gap-2">
                        @foreach ($paymentsRow3 as $p)
                            <img src="{{ asset('assets/images/payments/' . $p['file']) }}" alt="{{ $p['label'] }}"
                                 class="h-7 w-auto object-contain" loading="lazy">
                        @endforeach
                    </div>
                </div>

            </div>

            {{-- ── COLONNE 2 : Products ── --}}
            <div>
                <h3 class="text-xl font-medium text-slate-900 mb-5 sm:mb-6">
                    Products
                </h3>
                <ul class="space-y-3 sm:space-y-3.5">
                    <li><a href="{{ route('hebergement.mutualise') }}" class="inline-block text-base text-slate-500 hover:text-primary hover:translate-x-1 transition-all duration-150">Shared Hosting</a></li>
                    <li><a href="{{ route('email-pro') }}"             class="inline-block text-base text-slate-500 hover:text-primary hover:translate-x-1 transition-all duration-150">Professional Email</a></li>
                    <li><a href="{{ route('vps') }}"                     class="inline-block text-base text-slate-500 hover:text-primary hover:translate-x-1 transition-all duration-150">VPS Server</a></li>
                    <li><a href="{{ route('ssl.certificate') }}"         class="inline-block text-base text-slate-500 hover:text-primary hover:translate-x-1 transition-all duration-150">SSL certificate</a></li>
                </ul>
            </div>

            {{-- ── COLONNE 3 : Support ── --}}
            <div>
                <h3 class="text-xl font-medium text-slate-900 mb-5 sm:mb-6">
                    Support
                </h3>
                <ul class="space-y-3 sm:space-y-3.5">
                    <li><a href="{{ route('contact') }}"       class="inline-block text-base text-slate-500 hover:text-primary hover:translate-x-1 transition-all duration-150">Contact Us</a></li>
                    <li><a href="{{ route('announcements') }}" class="inline-block text-base text-slate-500 hover:text-primary hover:translate-x-1 transition-all duration-150">News</a></li>
                    <li><a href="{{ route('knowledgebase') }}" class="inline-block text-base text-slate-500 hover:text-primary hover:translate-x-1 transition-all duration-150">Knowledgebase</a></li>
                </ul>
            </div>

            {{-- ── COLONNE 4 : Conditions légales ── --}}
            <div>
                <h3 class="text-xl font-medium text-slate-900 mb-5 sm:mb-6">
                    Conditions légales
                </h3>
                <ul class="space-y-3 sm:space-y-3.5">
                    <li><a href="{{ route('terms') }}"    class="inline-block text-base text-slate-500 hover:text-primary hover:translate-x-1 transition-all duration-150">Terms et Conditions</a></li>
                    <li><a href="{{ route('privacy') }}"  class="inline-block text-base text-slate-500 hover:text-primary hover:translate-x-1 transition-all duration-150">Paramètre de confidentialité</a></li>
                </ul>
            </div>

        </div>
    </div>

    {{-- ============================================================
         BARRE COPYRIGHT (2 éléments, bordure haute)
    ============================================================ --}}
    <div class="border-t border-slate-200">
        <div style="max-width:1360px;margin-left:auto;margin-right:auto;" class="px-4 sm:px-6 lg:px-8 py-5 sm:py-6 flex flex-col-reverse lg:flex-row lg:items-center lg:justify-between gap-4">

            {{-- ── Copyright (gauche) ── --}}
            <p class="text-base sm:text-lg text-slate-600 text-center lg:text-left whitespace-nowrap">
                Copyright &copy; 2026 YoupiHost. All Rights Reserved.
            </p>

            {{-- ── Sélecteur de langue + Bouton Top (droite) ── --}}
            <div class="flex items-center justify-center lg:justify-end gap-4 sm:gap-5">
                <x-ui.lang-switcher prefix="home" btnClass="sm:text-lg" />
                <x-ui.scroll-top svgClass="sm:w-6 sm:h-6" />
            </div>{{-- /langue+top --}}

        </div>
    </div>

</footer>

{{-- Scripts home-footer — déplacés dans le composant x-ui.lang-switcher et x-ui.scroll-top (push dans @stack('scripts')) --}}
