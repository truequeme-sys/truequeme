<?php

use App\Giro;
use Faker\Factory;
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
            'titulo' => 'Desarrollo de software',
            'tipo' => 'servicio',
            'imagen' => 'storage/artefactos/1.jpg',
            'user_id' => 1,
            'categoria_id' => 1,
            'empresa_id' => 1,
            'necesita_u_ofrece' => 'ofrece',
            'giro' => 'Informatica',
        ]);

        /**
         * 
         * 
         * 
         */

        $faker = Factory::create();
        $tipos = ['servicio', 'producto'];
        $opciones = ['necesita', 'ofrece'];
        $giros = Giro::get()->pluck('id')->toArray();

        for ($i = 0; $i <= 50; $i++) :
            DB::table('artefactos')
                ->insert([
                    'titulo' => $faker->jobTitle,
                    'tipo' => $tipos[array_rand($tipos)],
                    'imagen' => 'storage/artefactos/1.jpg',
                    'user_id' => $i + 2,
                    'categoria_id' => 1,
                    'necesita_u_ofrece' => $opciones[array_rand($opciones)],
                    'giro' => $giros[array_rand($giros)],
                ]);
        endfor;
    }
}
