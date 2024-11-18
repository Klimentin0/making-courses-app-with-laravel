<x-layout>
   <x-common.section-heading>Личный Кабинет ученика</x-common.section-heading>
    <div class="grid grid-rows-2 grid-cols-2 gap-2">
            <div class="container mx-auto my-10 p-5 bg-white rounded-lg shadow-lg">

                <div class="flex justify-center">
                    <img src="" alt="Profile Picture" class="rounded-full w-32 h-32">
                </div>

                <h1 class="text-center text-3xl font-bold mt-4">{{$first_name}} {{$last_name}}</h1>
                <p class="text-center text-gray-600">{{$year}} класс</p>
                <div class="border-b border-gray-300 my-4 opacity-50"></div>

                <p class="text-center text-sm text-gray-700 p-4">
                   Последние оценки возможно?
                </p>
            </div>

            <div class="container mx-auto my-10 p-5 bg-white rounded-lg shadow-lg">
                <h2>Подготовка по предметам:</h2>
                @if($subjects->isEmpty())
                    <p>Нет предметов.</p>
                @else
                    <ul>
                        @foreach($subjects as $subject)
                            <li>{{ $subject->name }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>

            <div class="container mx-auto my-10 p-5 bg-white rounded-lg shadow-lg">

                <h1 class="text-center text-3xl font-bold mt-4"></h1>
                <div class="border-b border-gray-300 my-4 opacity-50"></div>

                <p class="text-center text-sm text-gray-700 p-4">
                </p>
            </div>

            <div class="container mx-auto my-10 p-5 bg-white rounded-lg shadow-lg">

                <div class="border-b border-gray-300 my-4 opacity-50"></div>

            </div>

    </div>
</x-layout>
