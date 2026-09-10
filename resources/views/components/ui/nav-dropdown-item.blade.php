@props([
    'label'           => '',
    'href'            => '#',
    'separatorTop'    => false,
    'separatorBottom' => false,
    'icon'            => null,
])

<a href="{{ $href }}"
   class="header-dd-item group flex items-center gap-3 px-4 py-3 text-sm text-slate-700 hover:text-primary
          transition-colors duration-150 whitespace-nowrap translate-x-0 hover:translate-x-2 transition-transform
          {{ $separatorTop    ? 'border-t border-slate-100' : '' }}
          {{ $separatorBottom ? 'border-b border-slate-100' : '' }}">

    @if ($icon)
        <span class="w-5 h-5 text-slate-400 shrink-0 flex items-center justify-center">
            {!! $icon !!}
        </span>
    @endif

    {{ $label }}

</a>
