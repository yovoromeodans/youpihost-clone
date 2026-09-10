@extends('layouts.app')

@section('title', 'SSL Certificate — YoupiHost')

@section('content')

@php
    // Icônes distinctes adaptées à chaque certificat SSL
    $shieldCheckIcon = '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>';
    $lockIcon         = '<rect x="4" y="11" width="16" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/><circle cx="12" cy="16" r="1.5"/>';
    $shieldStarIcon   = '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m12 9 1 2.2 2.4.3-1.8 1.7.5 2.5-2.1-1.2-2.1 1.2.5-2.5L8.6 11.5 11 11.2z"/>';

    $plans = [
        [
            'name'        => 'RapidSSL Certificate',
            'price'       => '44850 FCFA',
            'billing'     => 'Annual Billing',
            'description' => 'Affordable and fast SSL certificate to secure small websites and blogs',
            'popular'     => false,
            'icon'        => $shieldCheckIcon,
            'features'    => [
                'Validation: Domain Validation (DV) issued within minutes',
                'Encryption: 2048-bit industry standard with 256-bit root',
                'Compatibility: Recognized by 99.9% of browsers and mobile devices',
                'Reissuance: Unlimited and free during validity period',
                'Security: HTTPS and secure padlock protection',
                'Warranty: Included liability warranty',
            ],
        ],
        [
            'name'        => 'Sectigo SSL Certificate',
            'price'       => '64350 FCFA',
            'billing'     => 'Annual Payment',
            'description' => 'Ideal for showcase sites, blogs, web apps, and SMEs',
            'popular'     => true,
            'icon'        => $lockIcon,
            'features'    => [
                'Validation: Domain Validation (DV) issued quickly after verification',
                'Encryption: Reliable and cost-effective 256-bit SSL/TLS',
                'Compatibility: 99.9% of major browsers and servers',
                'Activation: Quick with HTTPS and secure padlock',
                'Warranty: Included for peace of mind',
            ],
        ],
        [
            'name'        => 'Sectigo SSL Wildcard',
            'price'       => '291850 FCFA',
            'billing'     => 'Annual Payment',
            'description' => 'Ideal for businesses, SaaS platforms, hosts, e-commerce, and multi-service infrastructures',
            'popular'     => false,
            'icon'        => $shieldStarIcon,
            'features'    => [
                'Coverage: Main domain and unlimited subdomains',
                'Encryption: Professional 256-bit SSL/TLS',
                'Validation: Fast Domain Validation (DV) Wildcard',
                'Installation: Single installation to protect everything',
                'Compatibility: 99.9% of browsers and servers',
                'Security: HTTPS and secure padlock',
                'Warranty: Included',
            ],
        ],
    ];
@endphp

<div class="min-h-screen">
<div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

    {{-- Titre --}}
    <div class="mb-8">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900">
            Sélectionnez votre certificat SSL
        </h1>
        <p class="mt-3 text-base text-slate-500 max-w-2xl">
            Avec notre garantie de remboursement de 30 jours, vous ne pouvez pas vous tromper.
        </p>
    </div>

    {{-- ══ SIDEBAR + CONTENU ══ --}}
    <x-ui.store-sidebar active="SSL certificate">

        {{-- ── CONTENU : 3 cards ── --}}
        <main class="flex-1 min-w-0">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($plans as $plan)
                    <x-ui.plan-card
                        :name="$plan['name']"
                        :price="$plan['price']"
                        :billing="$plan['billing']"
                        :description="$plan['description']"
                        :features="$plan['features']"
                        :popular="$plan['popular']"
                        :icon="$plan['icon']"
                    />
                @endforeach
            </div>
        </main>

    </x-ui.store-sidebar>
</div>
</div>

@endsection
