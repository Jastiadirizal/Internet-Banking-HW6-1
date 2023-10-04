<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'username' => 'andika',
            'password' => '$2a$10$2k1jdB3VcFN7DBBAUs7z5uO9FH4kRO9fV3/kPGu9FOhowBeKotzhi', //andika
        ]);

        \App\Models\Profile::create([
            'id_user' => '1',
            'nama' => 'Andika',
            'email' => 'andika@gmail.com',
            'no_hp' => '08123456789',
            'no_rekening' => '123456789',
            'saldo' => '250000'
        ]);
    }
}
