<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Сидим ДБ.
     */
    public function run(): void
    {
        // Создаем 10 пользователей -  8учеников и 2 учителя (в юзерах вручную придется поменять их тип);

        Student::factory()->count(8)->create();
        Teacher::factory()->count(2)->create();


    }
}
