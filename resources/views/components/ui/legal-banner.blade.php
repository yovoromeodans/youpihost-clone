{{--
    Composant Bannière Légale - YoupiHost Clone
    Usage : <x-ui.legal-banner title="Terms of Service" subtitle="..." badge="Last updated: January 2026" />
    Props :
        - title    : grand titre de la bannière
        - subtitle : sous-titre (requis)
        - badge    : texte du badge (optionnel)
--}}
@props([
    'title'    => '',
    'subtitle' => '',
    'badge'    => null,
    'binary'   => false,
])

<div class="overflow-hidden mb-10 sm:mb-14"
     style="background: linear-gradient(135deg, #1e5b82 0%, #134e6b 35%, #0f3a52 70%, #0c2f44 100%);">
    <div class="relative px-6 py-16 sm:py-20 lg:py-24 text-center overflow-hidden">

        {{-- Motif diagonal stripes (côté droit) --}}
        <div class="absolute top-0 bottom-0 right-0 w-3/5 pointer-events-none opacity-40"
             style="background-image: repeating-linear-gradient(
                        -45deg,
                        rgba(255,255,255,0.04) 0px,
                        rgba(255,255,255,0.04) 2px,
                        transparent 2px,
                        transparent 8px
                    );">
        </div>

        {{-- Motif points subtil sur tout le fond --}}
        <div class="absolute inset-0 pointer-events-none opacity-30"
             style="background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px);
                    background-size: 14px 14px;">
        </div>

        {{-- Codes binaires — uniquement si prop binary=true --}}
        @if ($binary)
        {{-- Bloc du HAUT (4 lignes) — côté DROIT, légèrement plus à gauche que le bloc bas --}}
        <div class="absolute top-20 sm:top-24 lg:top-28 right-[14%] sm:right-[16%] lg:right-[18%] pointer-events-none select-none opacity-30">
            <div class="space-y-1 sm:space-y-2">
                <div class="font-mono text-sm sm:text-base tracking-widest text-slate-200">1 0 1 0</div>
                <div class="font-mono text-sm sm:text-base tracking-widest text-slate-200">0 1 1 0</div>
                <div class="font-mono text-sm sm:text-base tracking-widest text-slate-200">1 1 0 1</div>
                <div class="font-mono text-sm sm:text-base tracking-widest text-slate-200">0 0 1 1</div>
            </div>
        </div>
        {{-- Bloc du BAS (3 lignes) — côté DROIT, aligné plus à l'extrême droite que le bloc haut --}}
        <div class="absolute bottom-20 sm:bottom-24 lg:bottom-28 right-[6%] sm:right-[8%] lg:right-[10%] pointer-events-none select-none opacity-30">
            <div class="space-y-1 sm:space-y-2">
                <div class="font-mono text-sm sm:text-base tracking-widest text-slate-200">0 1 0 1</div>
                <div class="font-mono text-sm sm:text-base tracking-widest text-slate-200">1 0 1 1</div>
                <div class="font-mono text-sm sm:text-base tracking-widest text-slate-200">0 0 1 0</div>
            </div>
        </div>
        @endif

        {{-- Contenu principal --}}
        <div class="relative z-10 max-w-4xl mx-auto">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 mb-4 sm:mb-5 tracking-tight">
                {{ $title }}
            </h2>
            <p class="text-lg sm:text-sm lg:text-xl text-white font-medium mb-8 sm:mb-10">
                {{ $subtitle }}
            </p>
            @if ($badge)
            <span class="inline-block px-8 sm:px-10 py-3.5 sm:py-4 bg-slate-800/40 text-white backdrop-blur-sm
                         border border-white/20 rounded-full text-sm sm:text-base font-semibold shadow-lg">
                {{ $badge }}
            </span>
            @endif
        </div>
    </div>
</div>
