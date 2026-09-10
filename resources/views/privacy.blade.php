@extends('layouts.app')

@section('title', 'Privacy Policy — YoupiHost')

@section('content')

<div class="min-h-screen">
<div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

    {{-- ═══════ Titre + Breadcrumb ═══════ --}}
    <div class="mb-6 sm:mb-8">
        <h1 class="text-xl sm:text-2xl lg:text-4xl font-extrabold text-slate-900 mb-3">
            Privacy Policy - YoupiHost
        </h1>
        <p class="text-sm sm:text-base">
            <a href="/" class="text-slate-500 hover:text-primary">Home</a>
            <span class="text-slate-400 mx-1.5">/</span>
            <span class="text-primary">Privacy Policy</span>
        </p>
    </div>

    {{-- ═══════ Bannière décorative ═══════ --}}
    <x-ui.legal-banner
        title="Privacy Policy"
        subtitle="Protection and use of your personal data"
    />

    {{-- ═══════ Contenu principal : 8 sections ═══════ --}}
    <div class="max-w-4xl mx-auto space-y-10 sm:space-y-14">

        {{-- ─────────────── 1. Data Collection ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                1. Data Collection
            </h2>
            <p class="pl-5 text-slate-700 leading-relaxed mb-6 sm:mb-8">
                YoupiHost only collects information necessary for the provision of its services. The data collected includes:
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6">
                {{-- Identification (bleu clair) --}}
                <div class="bg-blue-50 rounded-2xl p-6 sm:p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <svg class="w-7 h-7 sm:w-8 sm:h-8 text-amber-700" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                            <polyline points="10 9 9 9 8 9"/>
                        </svg>
                        <h3 class="text-xl sm:text-2xl text-blue-600 font-medium">
                            Identification
                        </h3>
                    </div>
                    <p class="text-slate-600 leading-relaxed">
                        Last name, first name, email address, phone number.
                    </p>
                </div>

                {{-- Billing (vert clair) --}}
                <div class="bg-green-50 rounded-2xl p-6 sm:p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <svg class="w-7 h-7 sm:w-8 sm:h-8 text-yellow-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="5" width="20" height="14" rx="2"/>
                            <line x1="2" y1="10" x2="22" y2="10"/>
                        </svg>
                        <h3 class="text-xl sm:text-2xl text-green-600 font-medium">
                            Billing
                        </h3>
                    </div>
                    <p class="text-slate-600 leading-relaxed">
                        Payment information and transaction history.
                    </p>
                </div>

                {{-- Technical (jaune clair) --}}
                <div class="bg-yellow-50 rounded-2xl p-6 sm:p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <svg class="w-7 h-7 sm:w-8 sm:h-8 text-slate-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                        </svg>
                        <h3 class="text-xl sm:text-2xl text-orange-500 font-medium">
                            Technical
                        </h3>
                    </div>
                    <p class="text-slate-600 leading-relaxed">
                        IP address, connection data, and technical logs.
                    </p>
                </div>
            </div>
        </section>

        {{-- ─────────────── 2. Use of Data ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                2. Use of Data
            </h2>
            <p class="pl-5 text-slate-600 mb-6">
                Your data is used exclusively for:
            </p>
            <ul class="space-y-3 pl-10 text-slate-600">
                <li class="flex items-start gap-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                    <span>Creating and managing your hosting account.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                    <span>Processing your orders and providing customer support.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                    <span>Securing our services and preventing fraud.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                    <span>Complying with our legal and tax obligations.</span>
                </li>
            </ul>
        </section>

        {{-- ─────────────── 3. Data Sharing ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                3. Data Sharing
            </h2>

            {{-- Card No Sale (rose - bordure rouge pleine arrondie) --}}
            <div class="bg-rose-50 border border-red-400 rounded-2xl p-5 sm:p-6 mb-6 flex items-start gap-4">
                <svg class="w-6 h-6 sm:w-7 sm:h-7 text-red-700 shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="15" y1="9" x2="9" y2="15"/>
                    <line x1="9" y1="9" x2="15" y2="15"/>
                </svg>
                <p class="text-slate-700 leading-relaxed">
                    <strong class="font-semibold text-slate-900">No Sale:</strong>
                    YoupiHost does not sell your personal data to third parties for marketing purposes.
                </p>
            </div>

            {{-- Card Payment Processors (vert - bordure verte pleine arrondie) --}}
            <div class="bg-green-50 border border-green-400 rounded-2xl p-6 sm:p-8 mb-6">
                <div class="flex items-center gap-3 mb-5">
                    <svg class="w-7 h-7 sm:w-8 sm:h-8 text-yellow-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="5" width="20" height="14" rx="2"/>
                        <line x1="2" y1="10" x2="22" y2="10"/>
                    </svg>
                    <h3 class="text-xl sm:text-2xl text-green-600 font-medium">
                        Payment Processors
                    </h3>
                </div>
                <p class="text-slate-600 leading-relaxed mb-6">
                    To secure your transactions, we work with the following partners. Your banking information is transmitted directly through their secure platforms (SSL encryption) and is never stored on our own servers.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-3 text-slate-600">
                    <div class="space-y-3">
                        <p class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            MTN Mobile Money
                        </p>
                        <p class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            Moov Flooz / Moov Money
                        </p>
                        <p class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            Celtiis Cash
                        </p>
                        <p class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            TMoney (Togocel Money)
                        </p>
                        <p class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            Wave
                        </p>
                        <p class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            Orange Money
                        </p>
                        <p class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            Airtel Money
                        </p>
                    </div>
                    <div class="space-y-3">
                        <p class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            Corris Money
                        </p>
                        <p class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            Free Money
                        </p>
                        <p class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            Virement bancaire local
                        </p>
                        <p class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            Carte Visa
                        </p>
                        <p class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            Carte MasterCard
                        </p>
                        <p class="flex items-start gap-3">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500 mt-2.5 shrink-0"></span>
                            PayPal
                        </p>
                    </div>
                </div>
            </div>

            <p class="pl-5 text-slate-600 leading-relaxed">
                We also share your data with technical and hosting providers essential for the proper functioning of our services, in strict compliance with confidentiality.
            </p>
        </section>

        {{-- ─────────────── 4. Security ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                4. Security
            </h2>
            <div class="space-y-4 pl-5 text-slate-600 leading-relaxed">
                <p>
                    We implement technical and organizational security measures in line with industry standards to protect your data against unauthorized access, modification, or destruction.
                </p>
                <p>
                    However, no method of transmission over the Internet is 100% secure. We strive to implement reasonable means to protect your information.
                </p>
            </div>
        </section>

        {{-- ─────────────── 5. Data Retention ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                5. Data Retention
            </h2>
            <p class="pl-5 text-slate-600 leading-relaxed">
                Your data is kept only for as long as necessary to provide the requested services and to comply with our legal obligations (accounting, taxation). Once these periods have elapsed, your data is deleted or anonymized.
            </p>
        </section>

        {{-- ─────────────── 6. Your Rights ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                6. Your Rights
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                {{-- Access and Rectification (bleu - bordure arrondi gauche uniquement) --}}
                <div class="bg-white border border-slate-200 shadow-sm border-l-4 border-l-primary rounded-l-2xl p-6 sm:p-8">
                    <h3 class="text-xl sm:text-2xl text-blue-600 font-medium mb-3">
                        Access and Rectification
                    </h3>
                    <p class="text-slate-600 leading-relaxed">
                        You can request to view or modify your data.
                    </p>
                </div>

                {{-- Deletion (rouge - bordure arrondi gauche uniquement) --}}
                <div class="bg-white border border-slate-200 shadow-sm border-l-4 border-l-red-500 rounded-l-2xl p-6 sm:p-8">
                    <h3 class="text-xl sm:text-2xl text-red-600 font-medium mb-3">
                        Deletion
                    </h3>
                    <p class="text-slate-600 leading-relaxed">
                        You can request the deletion of your account and your data.
                    </p>
                </div>
            </div>
        </section>

        {{-- ─────────────── 7. Cookies ─────────────── --}}
        <section>
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                7. Cookies
            </h2>
            <div class="space-y-4 pl-5 text-slate-600 leading-relaxed">
                <p>
                    We use essential cookies to ensure the proper functioning of the site (authentication, shopping cart). These cookies are necessary and do not require specific consent.
                </p>
                <p>
                    You can configure your browser to refuse cookies, but this may affect the user experience on our site.
                </p>
            </div>
        </section>

        {{-- ─────────────── 8. Contact ─────────────── --}}
        <section class="pb-10">
            <h2 class="text-2xl sm:text-3xl font-bold text-primary mb-5 sm:mb-6 pl-5 border-l-4 border-primary">
                8. Contact
            </h2>
            <div class="text-center">
                <p class="text-slate-600 leading-relaxed mb-6">
                    Our team will be happy to advise you, whether you are already a customer or not. If we cannot answer you immediately, we will get back to you as soon as possible.
                </p>
                <p class="text-slate-600 mb-8 sm:mb-10">
                    For any questions regarding this policy or to exercise your rights, please contact us:
                </p>

                <div class="flex flex-wrap justify-center gap-4 sm:gap-6">
                    {{-- Phone (bouton vert pill-shape) --}}
                    <a href="tel:+2290129226219"
                       class="inline-flex items-center justify-center px-6 sm:px-8 py-3.5 sm:py-4 bg-green-600 hover:bg-green-700
                              text-black font-semibold rounded-full shadow-md shadow-green-600/30
                              transition-all duration-200 cursor-pointer whitespace-nowrap">
                        <svg class="w-5 h-5 mr-2.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        +229 01 29 22 62 19
                    </a>

                    {{-- WhatsApp (bouton vert clair pill-shape) --}}
                    <a href="https://wa.me/2290129226219" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center justify-center px-6 sm:px-8 py-3.5 sm:py-4 bg-green-400 hover:bg-green-500
                              text-black font-semibold rounded-full shadow-md shadow-green-400/40
                              transition-all duration-200 cursor-pointer whitespace-nowrap">
                        <svg class="w-5 h-5 mr-2.5 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        Contact us on WhatsApp
                    </a>
                </div>
            </div>
        </section>

    </div>
</div>
</div>

@endsection
