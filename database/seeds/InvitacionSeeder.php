<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InvitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invitaciones')->insert([
            [
                "email" => "cristianguzmansuarez@gmail.com",
                "token" => Str::random(150),
                "usuario_que_invita_id" => 1
            ]
        ]);
    }
}
