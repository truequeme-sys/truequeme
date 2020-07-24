<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            [
                'nombre' => 'Desarrollo web',
                'caracteristicas' => 'Caracteristicas',
                'costo' => 20016.50,
                'lugar_entrega' => 'México',
                'categoria' => 'Categoria',
                'tiene_garantia' => 0,
                'user_id' => 1,
            ],
        ]);
    }
}
