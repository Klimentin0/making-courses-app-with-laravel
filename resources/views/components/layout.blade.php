<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Годограф</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-avant">

    <div class="">
        <nav class="flex flex-row justify-between items-center py-4 border-b-2 border-yellow-main">
            <div>
                <a href="" class="flex justify-between items-center">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="w-20 h-20 m-0" alt="">
                    <p class="font-bold">Годограф</p>
                </a>
            </div>

            <div class="space-x-7 font-bold">
                <a href="" class="text-grey-inactive hover:text-black transition-colors duration-300">Предметы</a>
                <a href="" class="text-grey-inactive hover:text-black transition-colors duration-300">Классы</a>
                <a href="" class="text-grey-inactive hover:text-black transition-colors duration-300">Преподаватели</a>
                <a href="" class="text-grey-inactive hover:text-black transition-colors duration-300">О нас</a>
                <a href="" class="text-grey-inactive hover:text-black transition-colors duration-300">Как добраться</a>
            </div>

            <div class="mr-10">
                    <x-y-button href="https://yandex.ru">Записаться на курс</x-y-button>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
