<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmpresaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(InvitacionSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(GiroSeeder::class);
        $this->call(ServicioSeeder::class);
        $this->call(ArtefactoSeeder::class);
    }
}
