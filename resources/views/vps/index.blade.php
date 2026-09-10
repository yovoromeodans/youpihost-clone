@extends('layouts.app')

@section('title', 'VPS Server — YoupiHost')

@section('content')

@php
    $plans = [
        [
            'name'        => 'VPS Starter',
            'price'       => '7000 FCFA',
            'billing'     => 'Monthly Billing',
            'description' => 'Ideal for blogs, showcase websites, and small web projects',
            'popular'     => false,
            'icon'        => '<rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>',
            'features'    => [
                'vCPU: 1 dedicated core',
                'RAM: 2 GB dedicated memory',
                'Storage: 100 GB',
                'Bandwidth: 1 TB per month',
                'IP Address: 1 dedicated public IPv4 included',
                'Operating Systems: Ubuntu, AlmaLinux, CentOS, Windows Server available',
                'Full Access: SSH & RDP (Windows)',
                'Security: Anti-DDoS protection included',
                'Support: 24/7 technical support via WhatsApp',
            ],
        ],
        [
            'name'        => 'VPS Pro',
            'price'       => '15000 FCFA',
            'billing'     => 'Monthly Billing',
            'description' => 'Ideal for SMEs, e-commerce, and web applications',
            'popular'     => true,
            'icon'        => '<polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/>',
            'features'    => [
                'vCPU: 2 dedicated cores',
                'RAM: 4 GB dedicated memory',
                'Storage: 200 GB disk space',
                'Bandwidth: 3 TB per month',
                'IP Address: 1 dedicated public IPv4 address included',
                'Operating System: Ubuntu 22.04 by default — switchable (Ubuntu, Windows Server, AlmaLinux, CentOS)',
                'Management Panels: One-click installation — Plesk, cPanel, Webmin, ISPConfig',
                'Full Access: SSH & RDP (Windows Server)',
                'Security: Anti-DDoS protection included',
                'Control Interface: Start, stop, reboot, and OS rebuild in one click',
                'Monitoring: Real-time CPU, RAM, disk, and traffic tracking',
                'Customer Support: 24/7 technical assistance',
            ],
        ],
        [
            'name'        => 'VPS Elite',
            'price'       => '30000 FCFA',
            'billing'     => 'Monthly Billing',
            'description' => 'Designed for heavy platforms, SaaS, and demanding businesses',
            'popular'     => false,
            'icon'        => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>',
            'features'    => [
                'vCPU: 4 high-performance dedicated cores',
                'RAM: 8 GB dedicated memory',
                'Storage: 500 GB high-speed SSD',
                'Bandwidth: 5 TB per month',
                'IP Address: 1 dedicated public IPv4 address included',
                'Operating System: Ubuntu 22.04 by default — switchable (Ubuntu, Windows Server, AlmaLinux, CentOS)',
                'Management Panels: One-click installation — Plesk, cPanel, Webmin, ISPConfig',
                'Full Access: SSH & RDP (Windows Server)',
                'Security: Advanced Anti-DDoS protection included',
                'Control Panel: Start, stop, reboot, snapshots, and OS rebuild in one click',
                'Monitoring: Advanced real-time tracking of CPU, RAM, disk, and traffic',
                'Customer Support: Priority 24/7 enterprise-level support',
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
    </div>

    {{-- ══ SIDEBAR + CONTENU ══ --}}
    <x-ui.store-sidebar active="VPS Server">

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
