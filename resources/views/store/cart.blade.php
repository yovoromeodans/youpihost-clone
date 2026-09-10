@extends('layouts.app')

@section('title', 'Review & Checkout — YoupiHost')

@section('content')

<div class="min-h-screen">
<div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

    {{-- ══ TITRE PRINCIPAL ══ --}}
    <div class="mb-8 sm:mb-10">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight">
            Review &amp; Checkout
        </h1>
    </div>

    {{-- ══ 2 COLONNES : CART (gauche) + ORDER SUMMARY (droite) ══ --}}
    <div class="flex flex-col lg:flex-row gap-6 sm:gap-8">

        {{-- ── COLONNE GAUCHE : Panier vide ── --}}
        <div class="flex-1 min-w-0">
            <div class="bg-white rounded-xl shadow-md p-8 sm:p-12 lg:p-16 flex flex-col items-center justify-center min-h-[420px]">

                {{-- Icône hexagone pointillé --}}
                <div class="mb-8 sm:mb-10">
                    <svg class="w-20 h-20 sm:w-24 sm:h-24 text-primary" fill="none" stroke="currentColor"
                         stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                         stroke-dasharray="2.5 2.5">
                        <polygon points="12 2.5 21.5 8 21.5 16 12 21.5 2.5 16 2.5 8 12 2.5"/>
                        <path d="M8 12.5 10.5 10 13.5 13" stroke-width="3" stroke-dasharray="0" fill="currentColor" stroke="currentColor" class="text-primary"/>
                    </svg>
                </div>

                {{-- Message : Votre panier est vide --}}
                <p class="text-xl sm:text-2xl font-semibold text-slate-800 mb-8 text-center">
                    Your Shopping Cart is Empty
                </p>

                {{-- Bouton Start Shopping --}}
                <a href="{{ route('hebergement.mutualise') }}"
                   class="inline-flex items-center justify-center px-7 sm:px-8 py-3 sm:py-3.5
                          bg-primary hover:bg-blue-700 text-white font-semibold
                          rounded-md transition-colors duration-150 shadow-sm
                          text-sm sm:text-base whitespace-nowrap">
                    Start Shopping
                </a>
            </div>
        </div>

        {{-- ── COLONNE DROITE : Order Summary ── --}}
        <aside class="w-full lg:w-80 shrink-0">
            <div class="rounded-xl shadow-md overflow-hidden
                        bg-gradient-to-b from-blue-500 via-blue-600 to-blue-700">
                <div class="p-6 sm:p-8 text-white">

                    {{-- Titre --}}
                    <h2 class="text-xl sm:text-2xl font-medium mb-8">
                        Order Summary
                    </h2>

                    {{-- Subtotal --}}
                    <div class="flex items-center justify-between mb-6 pb-5 border-b border-white/20">
                        <span class="text-base sm:text-lg text-white/80 font-medium">Subtotal</span>
                        <span class="text-sm sm:text-base text-white/70 font-medium tracking-wide">
                            0,00FCFA
                        </span>
                    </div>

                    {{-- Totals --}}
                    <div class="flex items-center justify-between mb-7 pb-7 border-b border-white/20">
                        <span class="text-base sm:text-lg text-white/80 font-medium">Totals</span>
                        <span class="text-sm sm:text-base text-transparent">
                            -
                        </span>
                    </div>

                    {{-- Grand Total --}}
                    <div class="mb-7 sm:mb-8">
                        <p class="text-3xl sm:text-4xl font-black text-white tracking-tight">
                            0 FCFA
                        </p>
                    </div>

                    {{-- Bouton Place Order (désactivé visuellement) --}}
                    <button type="button"
                            disabled
                            class="w-full px-6 py-4 sm:py-4.5
                                   bg-white/25 hover:bg-white/25 text-white/60 font-semibold
                                   rounded-lg transition-colors duration-150
                                   text-sm sm:text-base flex items-center justify-center gap-2
                                   cursor-not-allowed">
                        <span>Place Order</span>
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 shrink-0" fill="none" stroke="currentColor"
                             stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"/>
                            <path d="m12 5 7 7-7 7"/>
                        </svg>
                    </button>

                </div>
            </div>
        </aside>

    </div>

</div>
</div>

@endsection
