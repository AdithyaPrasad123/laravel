<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Register;

class Register_table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Register::create ([
        //     'name'=>"anupama",
        //     'email'=>"anupama@gmail.com",
        //     'phone'=>"6856984123",
        // ]);
        // Register::create([
        //     'name'=>"manu",
        //     'email'=>"manu@gmail.com",
        //     'phone'=>"8554569852"
        // ]);
        Register::create([
            'name'=>"anu",
            'email'=>"anu@gmail.com",
            'phone'=>"8554544852"
        ]);
    }
}
