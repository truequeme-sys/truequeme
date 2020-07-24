<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
                'email' => 'lpaniagua@byw-si.com.mx',
                'name' => 'Luis',
                'password' => bcrypt('12345678'),
                'rfc' => 'rfc123',
                'apellido_paterno' => 'Paniagua',
                'apellido_materno' => 'Sabines',
                'foto' => 'storage/fotos/1.png'
            ]
        ]);

        $faker = Factory::create();

        for($i=0; $i<=50; $i++):
            DB::table('users')
                ->insert([
                    'email' => $faker->email,
                    'name' => $faker->firstname,
                    'password' => $faker->password,
                    'rfc' => $faker->text(13),
                    'apellido_paterno' => $faker->lastname,
                    'apellido_materno' => $faker->lastname,
                    'foto' => 'storage/fotos/1.png'
                ]);
        endfor;

        DB::table('empresa_user')->insert([
            'empresa_id' => 1,
            'user_id' => 1
        ]);
    }
}
