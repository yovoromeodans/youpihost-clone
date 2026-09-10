@extends('layouts.app')

@section('title', 'Terms of Service — YoupiHost')

@section('content')

<div class="min-h-screen">
<div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

    {{-- ═══════ Titre + Breadcrumb ═══════ --}}
    <div class="mb-6 sm:mb-8">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 mb-3">
            Terms of Service - YoupiHost
        </h1>
        <p class="text-sm sm:text-base">
            <a href="/" class="text-slate-500 hover:text-primary">Home</a>
            <span class="text-slate-400 mx-1.5">/</span>
            <span class="text-primary">Terms of Service</span>
        </p>
    </div>

    {{-- ═══════ Bannière décorative ═══════ --}}
    <x-ui.legal-banner
        title="Terms of Service"
        subtitle="General conditions of use for YoupiHost services"
        badge="Last updated: January 2026"
        binary
    />

    {{-- ═══════ Contenu principal : 6 sections + contact ═══════ --}}
    <div class="max-w-4xl mx-auto space-y-10 sm:space-y-14">

        {{-- ─────────────── 1. Acceptance of Terms ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                1. Acceptance of Terms
            </h2>
            <div class="space-y-4 pl-5 text-slate-700 leading-relaxed">
                <p>
                    By using YoupiHost's services, you agree to be bound by these terms of use. If you do not agree to these terms, please do not use our services.
                </p>
                <p>
                    These conditions apply to all users of our web hosting services, whether they are students benefiting from preferential rates or professional clients.
                </p>
            </div>
        </section>

        {{-- ─────────────── 2. Description of Services ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                2. Description of Services
            </h2>

            {{-- Included Services (sans fond) --}}
            <div class="mb-5 pl-5">
                <h3 class="text-xl sm:text-2xl font-semibold text-green-600 mb-5">
                    Included Services:
                </h3>
                <ul class="space-y-3 pl-2 text-slate-700">
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                        <span>Shared and dedicated web hosting</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                        <span>Domain name registration and management</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                        <span>Free SSL certificates</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                        <span>Technical support via WhatsApp</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                        <span>Automatic daily backups</span>
                    </li>
                </ul>
            </div>

            <p class="pl-5 text-slate-700 leading-relaxed">
                YoupiHost reserves the right to modify, suspend, or discontinue any service at any time, with a minimum of 30 days' notice.
            </p>
        </section>

        {{-- ─────────────── 3. Acceptable Use Policy ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                3. Acceptable Use Policy
            </h2>

            {{-- Card Prohibited Uses (rose / bordure rouge) --}}
            <div class="bg-rose-50 border-l-4 border-red-500 rounded-r-2xl p-6 sm:p-8 mb-5">
                <h3 class="text-xl sm:text-2xl font-semibold text-red-700 mb-5">
                    Prohibited Uses:
                </h3>
                <ul class="space-y-3 pl-2 text-slate-700">
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                        <span>Illegal, defamatory, or copyright-infringing content</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                        <span>Sending spam or unsolicited emails</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                        <span>Hacking, phishing, or malware activities</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                        <span>Excessive server resource consumption</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                        <span>Reselling services without authorization</span>
                    </li>
                </ul>
            </div>

            <p class="pl-5 text-slate-700 leading-relaxed">
                Any violation of these conditions may result in the immediate suspension of your account without notice or refund.
            </p>
        </section>

        {{-- ─────────────── 4. Billing and Payments ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                4. Billing and Payments
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Card Payment Methods (bleu clair) --}}
                <div class="bg-blue-50 rounded-2xl p-6 sm:p-8">
                    <h3 class="text-xl sm:text-2xl font-semibold text-blue-600 mb-5">
                        Payment Methods
                    </h3>
                    <ul class="space-y-2.5 pl-2 text-slate-700">
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>MTN Mobile Money</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>Moov Flooz / Moov Money</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>CeItiis Cash</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>TMoney (Togocel Money)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>Wave</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>Orange Money</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>Airtel Money</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>Coris Money</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>Free Money</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>Prepayment required</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>Carte Visa</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>Carte MasterCard</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>PayPal</span>
                        </li>
                    </ul>
                </div>

                {{-- Card Billing Information (jaune) --}}
                <div class="bg-yellow-50 rounded-2xl p-6 sm:p-8">
                    <h3 class="text-xl sm:text-2xl font-semibold text-yellow-600 mb-5">
                        Billing Information
                    </h3>
                    <ul class="space-y-2.5 pl-2 text-slate-700">
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>Monthly or annual billing</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>Prepayment required</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>Optional automatic renewal</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            <span>Invoices available in your client area</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- ─────────────── 5. Warranties and Limitations ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                5. Warranties and Limitations
            </h2>

            {{-- Card Our Guarantees (vert clair, bordure verte) --}}
            <div class="bg-green-50 border border-green-400 rounded-2xl p-6 sm:p-8 mb-5">
                <h3 class="text-xl sm:text-2xl font-semibold text-green-700 mb-5">
                    Our Guarantees:
                </h3>
                <ul class="space-y-3.5 pl-2 text-slate-800">
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-600 mt-2.5 shrink-0"></span>
                        <span><strong class="font-bold text-slate-900">99.9% Uptime</strong> - Uptime guarantee</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-600 mt-2.5 shrink-0"></span>
                        <span><strong class="font-bold text-slate-900">WhatsApp Support</strong> - Response within 5 minutes during business hours</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-600 mt-2.5 shrink-0"></span>
                        <span><strong class="font-bold text-slate-900">Daily Backups</strong> - Retained for 30 days</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-600 mt-2.5 shrink-0"></span>
                        <span><strong class="font-bold text-slate-900">SSL Security</strong> - Free certificates for all domains</span>
                    </li>
                </ul>
            </div>

            <p class="pl-5 text-slate-700 leading-relaxed">
                <strong class="font-semibold text-slate-900">Limitation of Liability:</strong>
                YoupiHost shall not be held liable for indirect damages or data loss beyond the amount paid for the service concerned.
            </p>
        </section>

        {{-- ─────────────── 6. Termination ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                6. Termination
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- By YoupiHost (rose - bordure+arrondi à gauche uniquement) --}}
                <div class="bg-rose-50 border-l-4 border-red-500 rounded-l-2xl p-6 sm:p-8">
                    <h3 class="text-xl sm:text-2xl text-red-600 mb-4" style="font-weight:400;">
                        By YoupiHost
                    </h3>
                    <p class="text-slate-600 leading-relaxed">
                        We may terminate your account in case of non-payment,
                        violation of the terms of use, or at the request of competent
                        authorities.
                    </p>
                </div>

                {{-- By the Client (vert - bordure+arrondi à gauche uniquement) --}}
                <div class="bg-green-50 border-l-4 border-green-500 rounded-l-2xl p-6 sm:p-8">
                    <h3 class="text-xl sm:text-2xl text-green-600 mb-4" style="font-weight:400;">
                        By the Client
                    </h3>
                    <p class="text-slate-600 leading-relaxed">
                        You can terminate at any time with 7 days' notice. Refunds
                        follow our refund policy.
                    </p>
                </div>
            </div>
        </section>

        {{-- ─────────────── 7. Intellectual Property ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                7. Intellectual Property
            </h2>
            <div class="space-y-5 pl-5 text-slate-700 leading-relaxed">
                <p>
                    You retain all rights to your content. YoupiHost retains the rights to its platform, tools, and brand.
                </p>
                <p>
                    By using our services, you grant us a limited license to host, back up, and display your content as part of our services.
                </p>
            </div>
        </section>

        {{-- ─────────────── 8. Modifications to Terms ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                8. Modifications to Terms
            </h2>

            {{-- Card bleu clair - arrondi des 2 côtés --}}
            <div class="bg-blue-50 border-l-4 border-blue-500 rounded-2xl p-6 sm:p-8">
                <p class="text-slate-700 leading-relaxed mb-5">
                    YoupiHost may modify these terms at any time. Significant changes will be communicated by:
                </p>
                <ul class="space-y-3 pl-2 text-slate-700 mb-5">
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                        <span>Email to the billing address</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                        <span>Notification via WhatsApp</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                        <span>Announcement on our website</span>
                    </li>
                </ul>
                <p class="text-slate-500 font-medium">
                    You will have 30 days to accept the new terms or terminate your account.
                </p>
            </div>
        </section>

        {{-- ─────────────── Contact and Support ─────────────── --}}
        <section class="pb-10">
            <div class="text-center">
                <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-4">
                    Contact and Support
                </h2>
                <p class="text-slate-600 mb-8 text-base sm:text-lg">
                    For any questions regarding these terms of use:
                </p>

                <div class="flex flex-wrap justify-center gap-3 sm:gap-4 mb-8 sm:mb-10">
                    {{-- Email --}}
                    <a href="mailto:hello@youpihost.com"
                       class="inline-flex items-center justify-center px-5 sm:px-7 py-3 sm:py-3.5 bg-primary hover:bg-blue-800
                              text-white font-semibold rounded-lg transition-colors duration-150 cursor-pointer whitespace-nowrap">
                        <svg class="w-4 h-4 mr-2 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        hello@youpihost.com
                    </a>
                    {{-- WhatsApp --}}
                    <a href="https://wa.me/2290129226219" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center justify-center px-5 sm:px-7 py-3 sm:py-3.5 bg-green-600 hover:bg-green-700
                              text-white font-semibold rounded-lg transition-colors duration-150 cursor-pointer whitespace-nowrap">
                        <svg class="w-4 h-4 mr-2 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Contact us on WhatsApp
                    </a>
                    {{-- Phone --}}
                    <a href="tel:+2290129226219"
                       class="inline-flex items-center justify-center px-5 sm:px-7 py-3 sm:py-3.5 bg-yellow-400 hover:bg-yellow-500
                              text-slate-900 font-semibold rounded-lg transition-colors duration-150 cursor-pointer whitespace-nowrap">
                        <svg class="w-4 h-4 mr-2 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        +229 01 29 22 62 19
                    </a>
                </div>

                {{-- Coordonnées --}}
                <div class="space-y-2 text-slate-500 text-base">
                    <p>YoupiHost - Web Hosting for Students</p>
                    <p>Godomey Togoudo, Republic of Benin</p>
                    <p>Cotonou, Benin</p>
                </div>
            </div>
        </section>

    </div>
</div>
</div>

@endsection
