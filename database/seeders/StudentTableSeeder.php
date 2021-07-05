<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 40; $i++) {
            $student = new Student();
            $student->name = 'hoang' . $i;
            $student->email = 'email' . $i;
            $student->age = 'age' . $i;
            $student->save();
        }
    }
}
