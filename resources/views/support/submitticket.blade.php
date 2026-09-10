@extends('layouts.app')

@section('title', 'Open Ticket — YoupiHost')

@section('content')
<div class="bg-gray-50 min-h-screen">
    <div class="px-4 sm:px-6 lg:px-8 py-6 sm:py-8" style="max-width:1360px; margin:auto;">

        {{-- ══ HEADER ══ --}}
        <div class="mb-8">
            <h1 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">Open Ticket</h1>

            {{-- Breadcrumb --}}
            <nav class="flex items-center text-sm text-slate-500 flex-wrap gap-1.5">
                <a href="#" class="hover:text-primary transition-colors duration-150">Portal Home</a>
                <svg class="w-3 h-3 text-slate-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"/>
                </svg>
                <a href="#" class="hover:text-primary transition-colors duration-150">Client Area</a>
                <svg class="w-3 h-3 text-slate-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"/>
                </svg>
                <a href="#" class="hover:text-primary transition-colors duration-150">Support Tickets</a>
                <svg class="w-3 h-3 text-slate-400 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"/>
                </svg>
                <span class="text-primary font-medium">Submit Ticket</span>
            </nav>
        </div>

        {{-- ══ MAIN LAYOUT : 2 COLUMNS ══ --}}
        <div class="flex flex-col lg:flex-row gap-8">

            {{-- ── LEFT COLUMN : Ticket Form ── --}}
            <div class="flex-1 min-w-0 space-y-8">

                {{-- ═══ TICKET INFORMATION ═══ --}}
                <div>
                    <h2 class="text-xl font-semibold text-slate-800 mb-4">Ticket Information</h2>

                    <div class="bg-white rounded-lg shadow-md p-6 sm:p-8">
                        {{-- Name + Email Row --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-slate-800 mb-2">Name</label>
                                <input type="text" id="name" placeholder="Name"
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-md text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-primary focus:ring-0 transition-colors duration-150">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold text-slate-800 mb-2">Email Address</label>
                                <input type="email" id="email" placeholder="Enter email"
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-md text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-primary focus:ring-0 transition-colors duration-150">
                            </div>
                        </div>

                        {{-- Ticket Department --}}
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-slate-800 mb-2">Ticket Department</label>
                            <div class="border border-slate-200 rounded-md p-4 flex items-start gap-3 cursor-pointer hover:border-slate-300 transition-colors duration-150 bg-white">
                                <div class="shrink-0 mt-0.5">
                                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="4" width="20" height="16" rx="2"/>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-800">General Enquiries</p>
                                    <p class="text-sm text-slate-500 mt-0.5">All Enquiries</p>
                                </div>
                            </div>
                        </div>

                        {{-- Priority --}}
                        <div>
                            <label for="priority" class="block text-sm font-semibold text-slate-800 mb-2">Priority</label>
                            <div class="relative">
                                <select id="priority"
                                    class="w-full px-4 py-2.5 border border-slate-200 rounded-md text-sm text-slate-700 bg-white focus:outline-none focus:border-primary focus:ring-0 transition-colors duration-150 appearance-none cursor-pointer pr-10">
                                    <option value="low">Low</option>
                                    <option value="medium" selected>Medium</option>
                                    <option value="high">High</option>
                                    <option value="urgent">Urgent</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19 9-7 7-7-7"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ═══ TICKET DETAILS ═══ --}}
                <div>
                    <h2 class="text-xl font-semibold text-slate-800 mb-4">Ticket Details</h2>

                    <div class="bg-white rounded-lg shadow-md p-6 sm:p-8">
                        {{-- Subject --}}
                        <div class="mb-6">
                            <label for="subject" class="block text-sm font-semibold text-slate-800 mb-2">Subject</label>
                            <input type="text" id="subject"
                                class="w-full px-4 py-2.5 border border-slate-200 rounded-md text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-primary focus:ring-0 transition-colors duration-150">
                        </div>

                        {{-- Message / Editor --}}
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-slate-800 mb-2">Message</label>
                            <div class="border border-slate-200 rounded-md overflow-hidden">
                                {{-- Toolbar --}}
                                <div class="flex items-center border-b border-slate-200 bg-slate-50 px-2 py-1.5 flex-wrap gap-0.5">
                                    <button type="button" class="px-3 py-1 text-xs font-medium text-slate-600 hover:bg-slate-200 rounded transition-colors duration-150">Preview</button>
                                    <span class="w-px h-4 bg-slate-200 mx-1"></span>
                                    <button type="button" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded transition-colors duration-150" title="Bold">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M6 4h8a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"/>
                                            <path d="M6 12h9a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"/>
                                        </svg>
                                    </button>
                                    <button type="button" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded transition-colors duration-150 italic font-serif" title="Italic">
                                        <span class="text-sm italic font-serif">I</span>
                                    </button>
                                    <button type="button" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded transition-colors duration-150 font-bold" title="Heading">
                                        <span class="text-sm font-bold">H</span>
                                    </button>
                                    <span class="w-px h-4 bg-slate-200 mx-1"></span>
                                    <button type="button" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded transition-colors duration-150" title="Link">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                                        </svg>
                                    </button>
                                    <span class="w-px h-4 bg-slate-200 mx-1"></span>
                                    <button type="button" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded transition-colors duration-150" title="Unordered List">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="8" y1="6" x2="21" y2="6"/>
                                            <line x1="8" y1="12" x2="21" y2="12"/>
                                            <line x1="8" y1="18" x2="21" y2="18"/>
                                            <line x1="3" y1="6" x2="3.01" y2="6"/>
                                            <line x1="3" y1="12" x2="3.01" y2="12"/>
                                            <line x1="3" y1="18" x2="3.01" y2="18"/>
                                        </svg>
                                    </button>
                                    <button type="button" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded transition-colors duration-150" title="Ordered List">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="10" y1="6" x2="21" y2="6"/>
                                            <line x1="10" y1="12" x2="21" y2="12"/>
                                            <line x1="10" y1="18" x2="21" y2="18"/>
                                            <path d="M4 6h1v4"/>
                                            <path d="M4 10h2"/>
                                            <path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1"/>
                                        </svg>
                                    </button>
                                    <span class="w-px h-4 bg-slate-200 mx-1"></span>
                                    <button type="button" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded transition-colors duration-150" title="Code">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="16 18 22 12 16 6"/>
                                            <polyline points="8 6 2 12 8 18"/>
                                        </svg>
                                    </button>
                                    <button type="button" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded transition-colors duration-150" title="Quote">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V21z"/>
                                            <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3z"/>
                                        </svg>
                                    </button>
                                    <span class="w-px h-4 bg-slate-200 mx-1"></span>
                                    <button type="button" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded transition-colors duration-150" title="Help">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"/>
                                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                                            <line x1="12" y1="17" x2="12.01" y2="17"/>
                                        </svg>
                                    </button>
                                    <div class="flex-1"></div>
                                    <button type="button" class="w-8 h-8 flex items-center justify-center text-slate-600 hover:bg-slate-200 rounded transition-colors duration-150" title="Fullscreen">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="15 3 21 3 21 9"/>
                                            <polyline points="9 21 3 21 3 15"/>
                                            <line x1="21" y1="3" x2="14" y2="10"/>
                                            <line x1="3" y1="21" x2="10" y2="14"/>
                                        </svg>
                                    </button>
                                </div>

                                {{-- Editor Area --}}
                                <textarea rows="14"
                                    class="w-full px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-0 resize-y border-0 bg-white"
                                    placeholder=""></textarea>

                                {{-- Status Bar --}}
                                <div class="border-t border-slate-200 bg-slate-50 px-4 py-1.5 flex items-center gap-3 text-xs text-slate-500">
                                    <span>lines: 0</span>
                                    <span>words: 0</span>
                                    <span>saved</span>
                                </div>
                            </div>
                        </div>

                        {{-- Attachments --}}
                        <div class="mb-4">
                            <div class="border border-slate-200 rounded-md px-4 py-3 flex items-center gap-3 cursor-pointer hover:bg-slate-50 hover:border-slate-300 transition-colors duration-150">
                                <svg class="w-4 h-4 text-slate-500 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m21.44 11.05-9.19 9.19a6 6 0 0 1-8.49-8.49l8.57-8.57A4 4 0 1 1 18 8.84l-8.59 8.57a2 2 0 0 1-2.83-2.83l8.49-8.48"/>
                                </svg>
                                <span class="text-sm text-slate-500">Add Attachments...</span>
                            </div>
                        </div>

                        {{-- Allowed Extensions Note --}}
                        <div class="flex items-start gap-2 text-sm text-slate-500">
                            <svg class="w-4 h-4 text-slate-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="12" y1="16" x2="12" y2="12"/>
                                <line x1="12" y1="8" x2="12.01" y2="8"/>
                            </svg>
                            <span>Allowed File Extensions: .jpg, .gif, .jpeg, .png, .txt, .pdf (Max file size: 64MB)</span>
                        </div>
                    </div>
                </div>

                {{-- ═══ ACTION BUTTONS ═══ --}}
                <div class="bg-white rounded-lg shadow-md p-6 sm:p-8">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                        <button type="button"
                            class="px-8 py-3 bg-primary text-white font-semibold rounded-md text-sm hover:bg-blue-700 transition-colors duration-150 shadow-sm">
                            Send Message
                        </button>
                        <button type="button"
                            class="px-8 py-3 bg-white text-slate-800 font-semibold rounded-md text-sm border border-slate-200 hover:bg-slate-50 hover:border-slate-300 transition-colors duration-150">
                            Cancel
                        </button>
                    </div>
                </div>

            </div>

            {{-- ── RIGHT COLUMN : Knowledgebase Suggestions ── --}}
            <aside class="w-full lg:w-80 shrink-0">
                <h2 class="text-xl font-semibold text-slate-800 mb-4">Knowledgebase Suggestions</h2>

                <div class="bg-white rounded-lg shadow-md p-6">
                    {{-- Icon --}}
                    <div class="flex justify-center mb-4">
                        <svg class="w-12 h-12 text-primary" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/>
                            <circle cx="16" cy="10" r="3"/>
                            <path d="m14 8-3.5-2"/>
                            <path d="m12 13-2.5 2"/>
                        </svg>
                    </div>

                    {{-- Text --}}
                    <p class="text-sm text-slate-600 text-center mb-5 leading-relaxed">
                        Suggestions will appear as you type your ticket message.
                    </p>

                    {{-- Search Input --}}
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.3-4.3"/>
                        </svg>
                        <input type="text" placeholder="Search in knowledgebase..."
                            class="w-full pl-9 pr-3 py-2.5 border border-slate-200 rounded-md text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:border-primary focus:ring-0 transition-colors duration-150 bg-slate-50">
                    </div>
                </div>
            </aside>

        </div>
    </div>
</div>
@endsection
