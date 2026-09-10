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
                <x-ui.lang-switcher prefix="footer" />
                <x-ui.scroll-top />
            </div>{{-- /langue+top --}}
        </div>{{-- /flex principal --}}
    </div>

</footer>

{{-- ============================================================
     SCRIPTS — déplacés dans le composant x-ui.lang-switcher
     et x-ui.scroll-top (push dans @stack('scripts'))
============================================================ --}}
