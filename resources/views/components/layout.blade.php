<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Годограф</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>


<body class="font-avant grid grid-rows-layout min-h-screen">

    <header>
        <x-navbar></x-navbar>
    </header>

    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-darkblue text-white py-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                   <x-common.logo-name>Годограф</x-common.logo-name>
                    <p class="text-sm">TEST</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-gray-400">teset</a>
                    <a href="#" class="hover:text-gray-400">teset</a>
                    <a href="#" class="hover:text-gray-400">teset</a>
                    <a href="#" class="hover:text-gray-400">teset</a>
                </div>
            </div>
            <div class="mt-4 text-center">
                <p class="text-sm">&copy; {{ date('Y') }} Годограф.</p>
            </div>
        </div>
    </footer>


</body>


</html>
