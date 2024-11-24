<x-layout>
    <x-slot:heading>
        Новое Доманшнее задание
    </x-slot:heading>

<form method="POST" action="/subjects/{{ $subject['id'] }}/homework">
   @csrf

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Создание домашнего щадания</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">тест</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form.field>
            <x-form.label for='title'>Название:</x-form.label>
            <div class="mt-2">
             <x-form.input name="title" id="title" placeholder="например Тест№Х класс-предмет" required />

                <x-form.error name='title' />
            </div>
          </x-form.field>
          <x-form.field>
            <x-form.label for='description'>test</x-form.label>
            <div class="mt-2">
             <x-form.input name="description" id="description" placeholder="test" required />

                <x-form.error name='description' />
            </div>
          </x-form.field>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <x-dropdown.button type="button" class="text-sm font-semibold leading-6 text-gray-900">отмена</x-dropdown.button>
        <x-form.button>Save</x-form.button>
    </div>
  </form>
</x-layout>
