<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'name' => 'admin@mail.com',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
