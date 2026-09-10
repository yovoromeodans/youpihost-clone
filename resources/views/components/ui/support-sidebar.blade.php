{{--
    Sidebar "Support" réutilisable — utilisée dans knowledgebase.blade.php
    et announcements.blade.php (section Support des deux sidebars).
    Props :
        - active : label du lien actif (ex: "Knowledgebase", "Announcements")
                  → reçoit le fond bleu actif (défaut : aucun)
--}}
@props([
    'active' => null,
])

<div>
    <h3 class="text-lg text-slate-800 mb-3">Support</h3>

    @php
        $sidebarLinks = [
            [
                'label'  => 'My Support Tickets',
                'href'   => '#',
                'active' => false,
                'icon'   => '<path d="M20 12V22H4V12"/><path d="M22 7H2v5h20V7z"/><path d="M12 22V7"/><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"/><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"/>',
                'color'  => 'text-primary',
            ],
            [
                'label'  => 'Announcements',
                'href'   => route('announcements'),
                'active' => $active === 'Announcements',
                'icon'   => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>',
                'color'  => 'text-primary',
            ],
            [
                'label'  => 'Knowledgebase',
                'href'   => route('knowledgebase'),
                'active' => $active === 'Knowledgebase',
                'icon'   => '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>',
                'color'  => 'text-primary',
            ],
            [
                'label'  => 'Downloads',
                'href'   => route('downloads'),
                'active' => $active === 'Downloads',
                'icon'   => '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/>',
                'color'  => 'text-primary',
            ],
            [
                'label'  => 'Network Status',
                'href'   => '#',
                'active' => false,
                'icon'   => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
                'color'  => 'text-slate-500',
            ],
            [
                'label'  => 'Open Ticket',
                'href'   => route('submitticket'),
                'active' => $active === 'Open Ticket',
                'icon'   => '<path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/>',
                'color'  => 'text-primary',
            ],
        ];
    @endphp

    {{-- Desktop : liste verticale --}}
    <ul class="space-y-0.5 lg:block hidden">
        @foreach ($sidebarLinks as $link)
        <li>
            <a href="{{ $link['href'] }}"
               class="flex items-center gap-2.5 px-2 py-2 rounded text-sm
                      transition-all duration-150
                      {{ $link['active']
                          ? 'bg-blue-50 text-primary font-medium translate-x-1.5'
                          : 'text-primary hover:text-blue-700 hover:translate-x-1' }}">
                <svg class="w-4 h-4 shrink-0 {{ $link['color'] }}"
                     fill="none" stroke="currentColor" stroke-width="1.8"
                     viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    {!! $link['icon'] !!}
                </svg>
                {{ $link['label'] }}
            </a>
        </li>
        @endforeach
    </ul>

    {{-- Mobile/Tablette : grille --}}
    <ul class="grid grid-cols-2 sm:grid-cols-3 gap-2 lg:hidden">
        @foreach ($sidebarLinks as $link)
        <li>
            <a href="{{ $link['href'] }}"
               class="flex items-center gap-2.5 px-3 py-3 rounded-lg text-sm
                      transition-all duration-150
                      {{ $link['active']
                          ? 'bg-blue-50 text-primary font-medium translate-x-1.5'
                          : 'text-primary hover:text-blue-700 hover:bg-blue-50' }}">
                <svg class="w-5 h-5 shrink-0 {{ $link['color'] }}"
                     fill="none" stroke="currentColor" stroke-width="1.8"
                     viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    {!! $link['icon'] !!}
                </svg>
                <span class="text-sm">{{ $link['label'] }}</span>
            </a>
        </li>
        @endforeach
    </ul>
</div>