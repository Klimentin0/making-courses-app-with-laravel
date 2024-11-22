<x-layout>
    <x-common.section-heading>
        Домашние задания
    </x-common.section-heading>

    <div class='space-y-4'>
        @foreach ($homeworks as $homework)
            <a href="/subjects/{subject}/homework/{{ $homework['id'] }}">
                <div>{{ $homework->subject->name}}</div>

                <div>
                    <h3>{{$homework['title']}}</h3>
                </div>
            </a>
        @endforeach

    </div>
</x-layout>
