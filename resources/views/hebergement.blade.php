@extends('layouts.app')

@section('title', 'Hébergement Mutualisé — YoupiHost')

@section('content')

@php
    // Icônes distinctes adaptées à chaque plan
    $hostingBoxIcon = '<rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>';
    $rocketIcon     = '<path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/>';
    $zapIcon        = '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>';
    $diamondIcon    = '<path d="M6 3h12l4 6-10 13L2 9z"/><path d="M2 9h20"/><path d="M12 22 8.5 9l3.5-6M12 22l3.5-13L12 3"/>';
    $crownIcon      = '<path d="M2 18h20M4 18v-9l5 5 3-7 3 7 5-5v9"/>';

    $plans = [
        [
            'name'        => 'Starter',
            'price'       => '1500 FCFA',
            'billing'     => 'Monthly Billing',
            'description' => 'Ideal for simple web projects',
            'popular'     => false,
            'icon'        => $rocketIcon,
            'features'    => [
                'Disk Space: 3 GB of fast SSD storage',
                'RAM: 8 GB of dedicated memory',
                'Subdomain: 1 free subdomain included',
                'Bandwidth: 50 GB per month',
                'Supported Languages: PHP, Ruby, Node.js, etc.',
                'WordPress: Installer and website builder included',
                'SSL Certificates: 2 free SSL certificates',
                'Security: Anti-DDoS protection included',
                'FTP Accounts: 2 FTP accounts for file management',
                'Customer Support: Technical assistance available 24/7',
            ],
        ],
        [
            'name'        => 'Pro',
            'price'       => '2500 FCFA',
            'billing'     => 'Monthly Billing',
            'description' => 'Ideal for advanced web projects',
            'popular'     => true,
            'icon'        => $zapIcon,
            'features'    => [
                'Disk Space: 5 GB of high-performance SSD storage',
                'RAM: 16 GB of dedicated memory for demanding applications',
                'Subdomains: 1 free subdomain included',
                'Bandwidth: 100 GB per month for high traffic',
                'Supported Languages: PHP, Ruby, Node.js, and all major frameworks',
                'WordPress: Advanced website builder and one-click installation',
                'SSL Certificates: 10 free SSL certificates for all your websites',
                'Security: Advanced Anti-DDoS protection against attacks',
                'FTP Accounts: 50 FTP accounts for full team management',
                'Customer Support: Priority 24/7 technical support',
            ],
        ],
        [
            'name'        => 'Elite',
            'price'       => '5000 FCFA',
            'billing'     => 'Monthly Billing',
            'description' => 'Ideal for businesses and high-growth projects',
            'popular'     => false,
            'icon'        => $crownIcon,
            'features'    => [
                'Disk Space: 15 GB of ultra-fast NVMe SSD storage',
                'RAM: 32 GB of dedicated memory for critical applications',
                'Subdomains: 1 free subdomain included',
                'Bandwidth: Unlimited for unrestricted growth',
                'Supported Languages: PHP, Ruby, Node.js, and a full development environment',
                'WordPress: Premium website builder and multisite management',
                'Professional Email Accounts: 25 business email accounts for your team',
                'SSL Certificates: 40 free SSL certificates for extended security',
                'Security: Advanced Anti-DDoS protection with real-time mitigation',
                'FTP Accounts: 100 FTP accounts for complex infrastructure',
                'Customer Support: Dedicated 24/7 technical support with a dedicated account manager',
            ],
        ],
    ];
@endphp

<div class="min-h-screen">
<div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

    {{-- Titre --}}
    <div class="mb-8">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900">
            Sélectionnez votre plan parfait
        </h1>
        <p class="mt-3 text-base text-slate-500 max-w-2xl">
            Avec notre garantie de remboursement de 30 jours, vous ne pouvez pas vous tromper.
        </p>
    </div>

    {{-- ══ SIDEBAR + CONTENU ══ --}}
    <x-ui.store-sidebar active="Shared Hosting">

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
