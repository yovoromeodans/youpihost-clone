@props([
    'name'        => '',
    'price'       => '',
    'billing'     => 'Monthly Billing',
    'description' => '',
    'features'    => [],
    'popular'     => false,
    'icon'        => null,
])

<div class="bg-white border border-slate-200 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow duration-200 h-full flex flex-col">

    {{-- Icône --}}
    <div class="flex justify-center mb-5">
        @if ($icon)
            <svg class="w-14 h-14 text-primary" fill="none" stroke="currentColor"
                 stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                {!! $icon !!}
            </svg>
        @else
            <svg class="w-14 h-14 text-primary" fill="none" stroke="currentColor"
                 stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                <polyline points="2 17 12 22 22 17"/>
                <polyline points="2 12 12 17 22 12"/>
            </svg>
        @endif
    </div>

    {{-- Nom du plan --}}
    <h3 class="text-center text-2xl text-slate-700 mb-3">{{ $name }}</h3>

    {{-- Prix --}}
    <p class="text-center text-3xl font-bold text-slate-900 mb-2">{{ $price }}</p>

    {{-- Billing --}}
    <p class="text-center text-2xl text-slate-500 mb-3">{{ $billing }}</p>

    {{-- Description --}}
    <p class="text-center text-sm text-slate-500 italic mb-4 leading-snug">{{ $description }}</p>

    {{-- Features (grow pour pousser le bouton en bas) --}}
    <ul class="mb-6 flex-1">
        @foreach ($features as $feature)
        @php
            $parts = explode(':', $feature, 2);
            $key   = count($parts) > 1 ? trim($parts[0]) : null;
            $value = count($parts) > 1 ? trim($parts[1]) : $feature;
        @endphp
        <li class="flex items-start gap-2.5 py-3 border-t border-slate-100 last:border-b text-sm text-slate-700">
            <svg class="w-4 h-4 text-primary shrink-0 mt-0.5" fill="none" stroke="currentColor"
                 stroke-width="2.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span>
                @if ($key)
                    <span class="text-primary font-medium">{{ $key }}:</span> {{ $value }}
                @else
                    {{ $value }}
                @endif
            </span>
        </li>
        @endforeach
    </ul>

    {{-- Bouton Order Now centré — mt-auto pour pousser en bas systématiquement --}}
    <div class="flex justify-center mt-auto pt-2">
        <x-ui.button-primary href="#" text="Order Now" class="px-8 py-2.5" />
    </div>

</div>
