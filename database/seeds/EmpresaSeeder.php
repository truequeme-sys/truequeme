<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            [
                'razon_social' => 'B&W',
                'rfc' => 'b&w_rfc',
                'direccion' => 'Matagalpa #43',
                'colonia' => 'Linda Vista',
                'ciudad' => 'CDMX',
                'estado' => 'CDMX',
                'pais' => 'México',
                'foto' => 'storage/fotos/1.png'
            ]
        ]);
    }
}
