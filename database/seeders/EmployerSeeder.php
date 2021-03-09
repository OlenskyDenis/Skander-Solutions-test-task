<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployerSeeder extends Seeder
{
    public function run()
    {
        for($i=1; $i<11; $i++){
            DB::table('employees')->insert([
                'name' => Str::random(5) .$i,
                'surname' => Str::random(5) .$i,
                'email' => 'email' .$i. '@gmail.com',
                'phone' => '000000'.$i,
                'company_id' => random_int(1,10)
            ]);
        }
    }
}
