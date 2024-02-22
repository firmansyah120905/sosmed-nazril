<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Contoh menggunakan Query Builder
        User::create([
            'name' => 'nazril',
            'email' => 'nazril@gmail.com',
            'password' => bcrypt('nazril1234567'),
        ]);

        // Atau contoh menggunakan model Eloquent
        User::create([
            'name' => 'ilham',
            'email' => 'ilham@gmail.com',
            'password' => bcrypt('ilham1234567'),
        ]);
    }
}
