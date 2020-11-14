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
        User::insert([
            'name' => 'admin',
            'email' => 'a@a.com',
            'password' => bcrypt('12345678'),
            'type'  => 'admin',
            'bio' => 'admin has no bio!'
        ]);
    }
}
