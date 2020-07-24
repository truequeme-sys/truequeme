<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('giros')->insert([
            [
                'nombre' => 'Informatica',
                'user_id' => 1,
            ],
            [
                'nombre' => 'Finanzas',
                'user_id' => 1
                
            ],
            [
                'nombre' => 'Consultoría',
                'user_id' => 1
            ]
        ]);
    }
}
