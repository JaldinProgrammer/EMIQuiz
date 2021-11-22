<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                
                'name' => 'Carlos',
                'email' => 'jaldin@gmail.com',
                'admin' => '1',
                'phone' => '76041031',
                'password' => Hash::make('123')
            ],
            [
                
                'name' => 'Violetta',
                'email' => 'violetta@gmail.com',
                'admin' => '1',
                'phone' => '71231031',
                'password' => Hash::make('123')
            ],
            [
                'admin' => 0,
                'name' => 'Valeria',
                'email' => 'vale@gmail.com',
                'phone' => '72012331',
                'password' => Hash::make('123')
            ]
        ]);
    }
}
