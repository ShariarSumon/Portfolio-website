<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    
    public function run()
    {
       student::create([
        'name'=>'sumon',
        'email'=>'sumonshariar490@gmail.com'
       ]);
    }
}
