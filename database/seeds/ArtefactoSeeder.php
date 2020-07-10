<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtefactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artefactos')->insert([
            'titulo' => 'Desarrollo de página web',
            'tipo' => 'servicio',
            'imagen' => 'storage/artefactos/1.jpg',
            'user_id' => 1,
            'categoria_id' => 1,
        ]);
    }
}
