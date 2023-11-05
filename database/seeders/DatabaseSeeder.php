<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //for Model Register
        // $this->call(Register_table_Seeder::class);


        // DB::table('users')->insert([
        //     'name'=>Str::random(10),
        //     'email'=>Str::random(10).'@gmail.com',
        //     'password'=>Hash::make('password'),
        // ]);

        // DB::table('users')->insert([
        //     'name'=>"mani",
        //     'email'=>"mani@gmail.com",
        //     'password'=>Hash::make('mani@123'),
        // ]);

        // DB::table('users')->insert([
        //     'name'=>Str::random(10),
        //     'email'=>Str::random(10).'@gmail.com',
        //     'password'=>Hash::make('password'),
        // ]);

        $this -> call(User_student_table_Seeder::class);
        
    }
}
