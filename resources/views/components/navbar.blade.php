<nav class="flex flex-row justify-between items-center py-4 border-b-2 border-yellow-main">
    <div class="m-3">
        <a href="/" class="flex justify-between items-center">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="h-10" alt="">
            <p class="hidden sm:flex font-bold m-2">Годограф</p>
        </a>
    </div>

    <div class="hidden lg:flex flex-row space-x-7 font-bold">
        <a href="" class="text-grey-inactive hover:text-black transition-colors duration-300">Предметы</a>
        <a href="" class="text-grey-inactive hover:text-black transition-colors duration-300">Классы</a>
        <a href="" class="text-grey-inactive hover:text-black transition-colors duration-300">Преподаватели</a>
        <a href="" class="text-grey-inactive hover:text-black transition-colors duration-300">О нас</a>
        <a href="" class="text-grey-inactive hover:text-black transition-colors duration-300">Как добраться</a>
    </div>

    <x-dropdown-mainmenu>Главное Меню</x-dropdown-mainmenu>

    <div >
        <div class="m-3 hidden lg:flex">
                <x-y-button href="/lk">Личный Кабинет</x-y-button>
        </div>
    </div>
</nav>
