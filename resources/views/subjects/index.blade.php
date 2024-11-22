<x-layout>
<x-common.section-heading class="text-center m-2">Курсы</x-common.section-heading>
<div class="space-y-2 text-center">
    @foreach ($subjects as $subject)
        <a href="/subjects/{{ $subject['id'] }}" class="block px-4 py-6 border border-yllow-main rounded-lg bg-yellow-100">
            <div>
                {{$subject->name}}
            </div>
        </a>
    @endforeach
</div>
</x-layout>
