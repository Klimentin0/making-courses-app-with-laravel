<nav class="flex flex-row justify-between items-center py-2 border-b-2 border-yellow-main max-h-40 lg:max-h-20">
    <div class="m-3 w-1/4 justify-items-end">
       <x-common.logo-name>Годограф</x-common.logo-name>
    </div>

    <div class="m-3">
        <x-nav-menu>
            Главное Меню
        </x-nav-menu>
    </div>

    <div class="w-1/4 justify-items-start hidden md:flex">

            @guest
                <div class="hidden md:flex flex-col lg:flex-row lg:space-x-1 lg:space-y-0 space-x-0 space-y-1">
                    <x-common.y-button href="/login" class="">Войти</x-common.y-button>

                    <x-common.y-button href="/register" class="">Зарегестрироваться</x-common.y-button>
                </div>
            @endguest

            @auth
                <div class="flex flex-row space-x-1">
                    <x-form.button href="/lk/{user}">ЛК</x-form.button>
                    <form method="POST" action="/logout">
                        @csrf

                        <x-form.button href="/">Выход</x-form.button>
                    </form>
                </div>
            @endauth

    </div>
</nav>
