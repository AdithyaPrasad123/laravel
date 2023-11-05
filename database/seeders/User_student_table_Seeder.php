<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User_student;

class User_student_table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User_student::create([
            'name'=>"Anusree",
            'email'=>"anusree@gmail.com",
            'mobile'=>"9658742135",
            'place'=>"calicut",
            'dob'=>"12/10/1999",
        ]);
    }
}
