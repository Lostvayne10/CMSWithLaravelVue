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
        factory(User::class, 29)->create();

        User::create([
            'name' => 'Alejandro infante',
            'email' => 'i@hotmail.com',
            'password' => bcrypt('123')
        ]);
    }
}
