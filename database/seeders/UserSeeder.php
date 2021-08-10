<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++) {

             DB::table('users')->insert([
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'senha' => Hash::make('password'),
        ]);
        }
    }
}
