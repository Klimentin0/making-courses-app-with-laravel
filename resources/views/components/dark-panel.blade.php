<div {{ $attributes->merge(['class' => "p-4 bg-lightblue rounded-xl group text-center text-white border-2 hover:border-yellow-main transition ease-in-out delay-50 hover:-translate-y-1 hover:brightness-110 hover:scale-110 hover:bg-darkblue duration-300"]) }}>
    {{ $slot }}
</div>
