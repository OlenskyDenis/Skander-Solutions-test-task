<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    public function run()
    {
        for($i=1; $i<11; $i++){
            DB::table('companies')->insert([
                'name' => 'Company ' .$i,
                'email' => 'email' .$i. '@gmail.com',
                'logo' => 'logo' .$i. '.jpg',
                'website' => 'website ' .$i
            ]);
        }
    }
}
