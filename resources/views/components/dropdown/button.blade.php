<button {{ $attributes->merge(['id' => '', 'class' => 'inline-flex items-center gap-x-1 text-sm
    font-semibold text-gray-900 aria-expanded="false"', 'type' => 'button']) }}>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <span class="text-lg">{{ $slot }}</span>
</button>

