<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory()->create([
            'first_name' => 'Thiago',
            'last_name' => 'Silva',
            'email' => 'thiago.oliveira208@gmail.com',
            'password' => bcrypt('1234')
        ]);

        User::factory(5)->create();
    }
}
