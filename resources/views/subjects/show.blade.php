<x-layout>
    <h2 class='font-bold text-lg'>{{$subject->name}}</h2>
    <a href="/subjects/{{ $subject['id'] }}/homework">Домашние задания</a>
    <a href="/subjects/{{ $subject['id'] }}/homework/create">Новое задание</a>
</x-layout>
