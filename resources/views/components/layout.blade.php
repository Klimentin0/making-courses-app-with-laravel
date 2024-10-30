<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Годограф</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="">

    <div class="">
        <nav class="flex justify-between items-center py-4 bg-darkblue text-white ">
            <div>
                <a href="" class="flex justify-between items-center">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="w-20 h-20 m-0" alt="">
                    <p class="">Годограф</p>
                </a>
            </div>

            <div class="space-x-7 font-bold">
                <a href="">Предметы</a>
                <a href="">Классы</a>
                <a href="">Преподаватели</a>
            </div>

            <div>
                <a href="" class="mr-10">Записаться на курс</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
