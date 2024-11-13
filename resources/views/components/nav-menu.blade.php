<div class="">
    <x-dropdown.button id="dropdownButton">{{ $slot }}</x-dropdown.button>

    <div id="dropdownMenu" class="absolute md:left-1/2 md:transform md:-translate-x-1/2
    left-auto right-0 -translate-x-0 -mt-1 flex w-auto max-w-xs px-4 hidden">
        <div class="w-screen max-w-md flex-auto overflow-hidden rounded-3xl bg-white text-sm
        shadow-lg ring-1 ring-gray-900/5">
        @guest

            <div class="divide-x divide-gray-900/5 bg-yellow-main md:hidden">
                <a href="/register" class="flex items-center justify-center gap-x-2.5 p-3
                font-semibold text-gray-900 hover:bg-yellow-shadow">
                    Регистрация
                </a>
            </div>

            <div class="divide-x divide-gray-900/5 bg-yellow-main md:hidden">
                <a href="/login" class="flex items-center justify-center gap-x-2.5 p-3
                font-semibold text-gray-900 hover:bg-yellow-shadow">
                    Вход
                </a>
            </div>
        @endguest

        @auth
            <div class="divide-x divide-gray-900/5 bg-yellow-main md:hidden">
                <a href="/login" class="flex items-center justify-center gap-x-2.5 p-3
                font-semibold text-gray-900 hover:bg-yellow-shadow">
                    Выход из системы
                </a>
            </div>
        @endauth
            <div class="p-4">
                <!-- Далее пункты меню дропдауна -->
                <x-dropdown.child href='/lk'>Линчый кабинет</x-dropdown.child>
                <x-dropdown.child>Тест</x-dropdown.child>
                <x-dropdown.child>Тест</x-dropdown.child>
                <x-dropdown.child>Тест</x-dropdown.child>
                <x-dropdown.child>Тест</x-dropdown.child>
                <!-- Доабавить пункты по необходимости -->
            </div>
        </div>
    </div>
</div>


<script>

const dropdownButton = document.getElementById('dropdownButton');
const dropdownMenu = document.getElementById('dropdownMenu');

// Переклбчение дропдауна
function toggleDropdown() {
    dropdownMenu.classList.toggle('hidden'); // Переключаем клаcc тэйлуинда hidden
}

// Показываем дропдаyн по клику и наведению
dropdownButton.addEventListener('click', toggleDropdown);
dropdownButton.addEventListener('mouseenter', toggleDropdown);

// Оставляем при наведении
dropdownMenu.addEventListener('mouseenter', () => {
    dropdownMenu.classList.remove('hidden');
});

// Прячем при уводе курсора с кнопки и поля дропдаун меню
dropdownButton.addEventListener('mouseleave', () => {
    if (!dropdownMenu.matches(':hover')) {
        dropdownMenu.classList.add('hidden'); //
    }
});
dropdownMenu.addEventListener('mouseleave', () => {
    dropdownMenu.classList.add('hidden'); // Тут как раз при уводе курсора от поя открытого меню
});

// Закрытие при клике мимо
window.addEventListener('click', (event) => {
    const isClickInside = dropdownButton.contains(event.target) || dropdownMenu.contains(event.target);

    if (!isClickInside) {
        dropdownMenu.classList.add('hidden'); //Обработка клика НЕ!Внутри меню
    }
});



</script>

