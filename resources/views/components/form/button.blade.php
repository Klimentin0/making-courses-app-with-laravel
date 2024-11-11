<button {{ $attributes->merge(['class' => 'bg-yellow-main shadow-thick-inner px-5 py-3 rounded-xl  hover:shadow-none transition-shadow duration-300', 'type' => 'submit']) }}>
    {{ $slot }}
</button>
