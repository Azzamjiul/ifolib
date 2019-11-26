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
        DB::table('users')->insert([
            'name' => "administrator",
            'email' => 'admin@mail.com',
            'password' => bcrypt('adminadmin'),
            'type' => 1
        ]);
    }
}
