@extends('layouts.app')

@section('title', 'Professional Email — YoupiHost')

@section('content')

@php
    // Icône email de base
    $emailIcon = '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>';
    // Icône email + étoile (avancé)
    $emailStarIcon = '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/><path d="m12 8 .9 1.8 2 .3-1.4 1.4.3 2-1.8-.9-1.8.9.3-2L9.6 10l2-.3z" fill="none"/>';
    // Icône email + engrenage (gestion/sync)
    $emailGearIcon = '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/><circle cx="12" cy="12" r="2.4"/>';
    // Icône médaille (team)
    $goldIcon = '<circle cx="12" cy="9" r="6"/><path d="M8.5 13.5 7 22l5-3 5 3-1.5-8.5"/><path d="M15.5 5.5 17 2l-5 3-5-3 1.5 3.5"/>';
    // Icône diamant (haut de gamme)
    $diamondIcon = '<path d="M6 3h12l4 6-10 13L2 9z"/><path d="M2 9h20"/><path d="M12 22 8.5 9l3.5-6M12 22l3.5-13L12 3"/>';

    $plans = [
        [
            'name'        => 'Professional Email Pro Light',
            'price'       => '1500 FCFA',
            'billing'     => 'Monthly Billing',
            'description' => 'Ideal for self-employed beginners',
            'popular'     => false,
            'icon'        => $emailIcon,
            'features'    => [
                'Storage: 5 GB secured for your emails and attachments',
                'Accounts: 1 professional email address',
                'Webmail: SOGo professional interface with integrated email, calendar, and address books',
                'Protocols: IMAP, POP3, SMTP compatible with all email clients',
                'Synchronization: Mobile and desktop access via compatible clients',
                'Security: Basic anti-spam and antivirus filters',
                'Support: Email support (response within 24h)',
            ],
        ],
        [
            'name'        => 'Professional Email Pro Plus',
            'price'       => '3000 FCFA',
            'billing'     => 'Monthly Billing',
            'description' => 'For solo experts with advanced needs',
            'popular'     => true,
            'icon'        => $emailStarIcon,
            'features'    => [
                'Storage: 50 GB high availability',
                'Accounts: 1 professional email address',
                'Advanced Webmail: SOGo with full management (emails, calendar, contacts, tasks)',
                'Synchronization: CalDAV (calendars) and CardDAV (contacts) for native sync across all devices',
                'Migration: Sync jobs tool included to easily import your old emails',
                'Advanced Filtering: Customizable Sieve rules for automatic email sorting',
                'Security: Anti-phishing + enhanced protection',
                'Support: 24/7 chat support',
            ],
        ],
        [
            'name'        => 'Professional Email Pro Middle',
            'price'       => '6000 FCFA',
            'billing'     => 'Monthly Billing',
            'description' => 'For solo experts with advanced needs',
            'popular'     => false,
            'icon'        => $emailGearIcon,
            'features'    => [
                'Storage: 25 GB high availability (5 GB per account)',
                'Accounts: 5 professional email addresses (5 GB each)',
                'Advanced Webmail: SOGo with full management (emails, calendar, contacts, tasks)',
                'Synchronization: CalDAV (calendars) and CardDAV (contacts) for native sync across all devices',
                'Migration: Sync jobs tool included to easily import your old emails',
                'Advanced Filtering: Customizable Sieve rules for automatic email sorting',
                'Security: Anti-phishing + enhanced protection',
                'Support: 24/7 support via chat or WhatsApp',
            ],
        ],
        [
            'name'        => 'Professional Email Pro Gold',
            'price'       => '12000 FCFA',
            'billing'     => 'Monthly Billing',
            'description' => 'For small collaborative teams',
            'popular'     => false,
            'icon'        => $goldIcon,
            'features'    => [
                'Storage: 50 GB shared',
                'Accounts: 10 professional email addresses',
                'Collaboration: SOGo webmail with shared calendars and team address books',
                'Synchronization: CalDAV/CardDAV for all team members',
                'Administration: Centralized management console for all accounts',
                'Migration: Sync jobs to migrate all team accounts',
                'Deliverability: Optimized SPF, DKIM, and DMARC for professional emailing',
                'Security: Full suite + automatic backups',
                'Support: Priority 24/7 support (chat and phone)',
            ],
        ],
        [
            'name'        => 'Professional Email Pro Diamond',
            'price'       => '24000 FCFA',
            'billing'     => 'Monthly Billing',
            'description' => 'For companies that demand excellence',
            'popular'     => false,
            'icon'        => $diamondIcon,
            'features'    => [
                'Storage: 500 GB shared',
                'Accounts: 10 professional email addresses',
                'Enterprise Webmail: SOGo with all modules (group calendars, shared contacts, resource management)',
                'Synchronization: Advanced CalDAV/CardDAV support',
                'Migration: Assisted migration included (our team helps you)',
                'Advanced Sieve Filtering: Complex rules and advanced email flow management',
                'Security: Enterprise-grade protection + daily backups + audits',
                'Monitoring: Active monitoring of deliverability and performance',
                'Reports: Detailed monthly usage analytics',
                'Support: 24/7 support with guaranteed response time (< 30 minutes) and dedicated account manager',
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
    <x-ui.store-sidebar active="Professional Email">

        {{-- ── CONTENU : 5 cards (3 + 2) ── --}}
        <main class="flex-1 min-w-0">

            {{-- Rangée 1 : les 3 premiers plans --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                @foreach (array_slice($plans, 0, 3) as $plan)
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

            {{-- Rangée 2 : les 2 derniers plans, plus larges pour couvrir la largeur des 3 --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach (array_slice($plans, 3) as $plan)
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
