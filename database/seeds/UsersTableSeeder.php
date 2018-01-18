<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            [
                'name' => 'putoo',
                'email' => 'puto@mail.com',
                'password' => 'puto',
                'age' => '25',
                'weight' => '70',
                'height' => '172',
            ]
        ]);
        \App\User::insert([
            [
                'name' => 'feo',
                'email' => 'feo@mail.com',
                'password' => 'feooo',
                'age' => '25',
                'weight' => '70',
                'height' => '172',
            ]
        ]);
    }
}
