<nav class="flex flex-row justify-between items-center py-4 border-b-2 border-yellow-main">
    <div class="m-3">
       <x-common.logo-name>Годограф</x-common.logo-name>
    </div>

    <div class="m-3">
        <x-nav-menu>
            Главное Меню
        </x-nav-menu>
    </div>

    <div class="hidden md:flex m-3">
        <div class="">

            @guest
                <x-common.y-button href="/login" class="mr-1">Войти</x-common.y-button>

                <x-common.y-button href="/register">Зарегестрироваться</x-common.y-button>
            @endguest

            @auth
                <form method="POST" action="/logout">
                    @csrf

                    <x-form.button href="/">Выход</x-form.button>
                </form>
            @endauth

        </div>
    </div>
</nav>
