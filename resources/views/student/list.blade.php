<div>
    @foreach ($students as $student)
    <li>{{ $student['first_name'] . ' ' . $student['last_name'] }}</li>
    @endforeach
</div>