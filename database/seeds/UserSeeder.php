<?php

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
            ]
        ]);

        DB::table('empresa_user')->insert([
            'empresa_id' => 1,
            'user_id' => 1
        ]);
    }
}
