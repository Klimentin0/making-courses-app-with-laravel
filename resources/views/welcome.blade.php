<x-layout>
    <div class="mr-10 ml-10 space-y-10">
        <section>
            <x-section-heading>Популярные пакеты</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-pack-card />
                <x-pack-card />
                <x-pack-card />
            </div>
        </section>

        <section>
            <x-section-heading>Предметы</x-section-heading>

            <div class="mt-6 space-y-4">
                <x-subject-card />
                <x-subject-card />
                <x-subject-card />
            </div>
        </section>

        <section>
            <x-section-heading>Учителя</x-section-heading>

            <div class="mt-6 space-x-1">
                <x-year>year</x-year>
                <x-year>year</x-year>
                <x-year>year</x-year>
                <x-year>year</x-year>
                <x-year>year</x-year>
                <x-year>year</x-year>
                <x-year>year</x-year>
                <x-year>year</x-year>
                <x-year>year</x-year>
                <x-year>year</x-year>
            </div>
        </section>
    </div>
</x-layout>
