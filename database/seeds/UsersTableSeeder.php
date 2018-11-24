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
            'name' => 'BliblioSmart',
            'lastname' => 'Admin',
            'password' => bcrypt('Admin'),
            'code' => 123456,
            'email' => 'admin@bibliosmart.cucei.udg.mx',
        ]);
    }
}
