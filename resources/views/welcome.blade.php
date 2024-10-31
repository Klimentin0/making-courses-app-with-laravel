<x-layout>
    <div class="mr-10 ml-10 space-y-10">

        <section class="text-center">
            <h1 class="font-bold text-4xl">Что сдаём? Давайте поищем!</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Математика? Русский? Или мы технарь?" class="w-full bg-yellow-main/20 p-3 pl-10 pr-4 text-gray-900 border rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-yellow-main">
            </form>
        </section>

        <section class="pt-10">
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
            <x-section-heading>Классы</x-section-heading>

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

        <section>
            <x-section-heading>Учителя</x-section-heading>
       </section>
    </div>
</x-layout>
