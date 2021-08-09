<?php

namespace Database\Seeders;

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
        \App\Models\User::truncate();
        \App\Models\User::create([
            'name' => 'sept',
            'email' => 'sept28@gmail.com',
            'password' => bcrypt('12344321'),
            'address' => 'Bekasi',
            'phone_number' => '08976201321',
            'personal_goal' => 'Full-Stack Developer',
            'role' => 'admin',
            'image' => 'ayu_nblh.jpg'
        ]);
    }
}
