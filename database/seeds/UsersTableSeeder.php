<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
