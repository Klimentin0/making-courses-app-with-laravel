<x-layout>
    <div class="mr-10 ml-10 space-y-10">

        <section class="text-center">
            <h1 class="font-bold text-4xl">Что сдаём? Давайте поищем!</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Математика? Русский? Или мы технарь?" class="w-full bg-yellow-main/20 p-3 pl-10 pr-4 text-gray-900 border rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-yellow-main">
            </form>
        </section>

        <section class="pt-10">
            <x-common.section-heading>Популярные пакеты</x-common.section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-common.pack-card />
                <x-common.pack-card />
                <x-common.pack-card />
            </div>
        </section>

        <section>
            <x-common.section-heading>Предметы</x-common.section-heading>

            <div class="mt-6 space-y-4">
                <x-common.subject-card />
                <x-common.subject-card />
            </div>
        </section>

        <section>
            <x-common.section-heading>Классы</x-common.section-heading>

            <div class="mt-6 space-x-1">
                <x-common.year>year</x-common.year>
                <x-common.year>year</x-common.year>
                <x-common.year>year</x-common.year>
                <x-common.year>year</x-common.year>
                <x-common.year>year</x-common.year>
                <x-common.year>year</x-common.year>
                <x-common.year>year</x-common.year>
                <x-common.year>year</x-common.year>
                <x-common.year>year</x-common.year>
                <x-common.year>year</x-common.year>
            </div>
        </section>

        <section>
            <x-common.section-heading>Учителя</x-common.section-heading>
       </section>
    </div>
</x-layout>
