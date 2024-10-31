<x-dark-panel class="flex flex-col self-start">
    <div class="text-lg font-bold group-hover:text-yellow-main">Пакет 1</div>
        <div class="py-8">
            <div>Предметы</div>
            <div>Цена</div>
        </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="text-white/50">
            <x-year size="small">КЛАССЫ</x-year>
            <x-year size="small">year</x-year>
            <x-year size="small">year</x-year>
        </div>
        <div class="flex flex-row space-x-2">
            <x-subject-logo :width="35" :height="35" />
            <x-subject-logo :width="35" :height="35" />
            <x-subject-logo :width="35" :height="35" />
        </div>
    </div>
</x-dark-panel>
