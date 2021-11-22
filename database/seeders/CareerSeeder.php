<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('careers')->insert([
            [              
                'name' => 'Área de ciencias económicas y empresariales',
            ],
            [              
                'name' => 'Área de Ciencias Ambientales',
            ],
            [              
                'name' => 'Área de ciencias tecnologías',
            ],
            [              
                'name' => 'Area de Ciencias exactas y tecnología',
            ],
        ]);
    }
}
