<?php

use App\User;
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
        User::create([
            'name'      => 'Ordachson Gonçalves',
            'email'     => 'ordachson@gmail.com',
            'password'  => bcrypt('123mudar#'),
        ]);

        User::create([
            'name'      => 'Alberto',
            'email'     => 'alberttojrfsa@gmail.com',
            'password'  => bcrypt('123mudar'),
        ]);
    }
}
