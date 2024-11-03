<div class="lg:hidden">
    <button id="dropdownButton" type="button" class="inline-flex items-center gap-x-1 text-sm
    font-semibold text-gray-900" aria-expanded="false">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <span class="text-lg">{{ $slot }}</span>
    </button>

    <div id="dropdownMenu" class="absolute left-1/2 z-10 mt-5 flex w-screen max-w-max
    -translate-x-1/2 px-4 hidden">
        <div class="w-screen max-w-md flex-auto overflow-hidden rounded-3xl bg-white text-sm
        shadow-lg ring-1 ring-gray-900/5">
        <div class="divide-x divide-gray-900/5 bg-yellow-main">
            <a href="/lk" class="flex items-center justify-center gap-x-2.5 p-3
            font-semibold text-gray-900 hover:bg-yellow-shadow">
                Личный Кабинет
            </a>
            </div>

        <div class="p-4">
                <!-- Далее пункты меню дропдауна -->
                <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                    <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center
                    rounded-lg bg-gray-50 group-hover:bg-white">

                    </div>
                    <div>
                        <a href="#" class="font-semibold text-gray-900">Analytics</a>
                        <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                    </div>
                </div>
                <!-- Доабавить пункты по неоьходимости -->
            </div>
        </div>
    </div>
</div>

<script>
// обращаемя ко кнопке дропдауна
const dropdownButton = document.getElementById('dropdownButton');
const dropdownMenu = document.getElementById('dropdownMenu');

// Прописываем функию видимости дропдауна
const toggleDropdown = () => {
    dropdownMenu.classList.toggle('hidden'); // Переключаем спрятанный класс
};

// Слушатель для коика
dropdownButton.addEventListener('click', (event) => {
    event.stopPropagation(); // Защита от перероста
    toggleDropdown();
});

//  Закрываес при клике мимо дропдауна
window.addEventListener('click', () => {
    if (!dropdownMenu.classList.contains('hidden')) {
        dropdownMenu.classList.add('hidden'); // Ну и, собственно, тут прячем.:w
    }
});
</script>

