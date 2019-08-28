<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'Admin',

            'email' => 'hshaban2010@hotmail.com',

            'password' => bcrypt('123.1230123')

        ]);
    }
}
