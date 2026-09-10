@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="py-10 sm:py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-md">
        <div class="px-6 sm:px-10 lg:px-14 py-8 sm:py-12 lg:py-14">

            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900 text-center mb-8 sm:mb-10">
                Contact Us
            </h1>

            <div class="mb-6 sm:mb-8 space-y-2 sm:space-y-3 text-slate-700">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    <span class="text-sm sm:text-base">WhatsApp&nbsp;: +229 01 29 22 62 19</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-slate-500 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="3" y="5" width="18" height="14" rx="1.5" ry="1.5"/>
                        <polyline points="3,7 12,13 21,7" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="text-sm sm:text-base">Email&nbsp;: hello@youpihost.com</span>
                </div>
            </div>

            <form class="space-y-4 sm:space-y-5">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                    <div>
                        <label for="name" class="block text-sm sm:text-base font-medium text-slate-700 mb-1.5 sm:mb-2">Name</label>
                        <input type="text" id="name" required
                            class="w-full px-3 sm:px-4 py-2.5 sm:py-3 border border-slate-300 rounded-md text-sm sm:text-base text-slate-900 placeholder-slate-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors duration-150">
                    </div>
                    <div>
                        <label for="email" class="block text-sm sm:text-base font-medium text-slate-700 mb-1.5 sm:mb-2">Email Address</label>
                        <input type="email" id="email" required
                            class="w-full px-3 sm:px-4 py-2.5 sm:py-3 border border-slate-300 rounded-md text-sm sm:text-base text-slate-900 placeholder-slate-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors duration-150">
                    </div>
                </div>

                <div>
                    <label for="subject" class="block text-sm sm:text-base font-medium text-slate-700 mb-1.5 sm:mb-2">Subject</label>
                    <input type="text" id="subject" required
                        class="w-full px-3 sm:px-4 py-2.5 sm:py-3 border border-slate-300 rounded-md text-sm sm:text-base text-slate-900 placeholder-slate-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors duration-150">
                </div>

                <div>
                    <label for="message" class="block text-sm sm:text-base font-medium text-slate-700 mb-1.5 sm:mb-2">Message</label>
                    <textarea id="message" rows="6" sm:rows="8" required
                        class="w-full px-3 sm:px-4 py-2.5 sm:py-3 border border-slate-300 rounded-md text-sm sm:text-base text-slate-900 placeholder-slate-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors duration-150 resize-y"></textarea>
                </div>

                <div class="pt-2 flex justify-center">
                    <x-ui.button-primary type="submit" text="Envoyer Message" class="px-6 sm:px-8 py-2.5 sm:py-3 text-sm sm:text-base" />
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
