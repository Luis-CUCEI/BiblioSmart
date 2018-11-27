<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            'name' => 'Division de Ciencias Basicas',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('divisions')->insert([
            'name' => 'Division de Ingenierias',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('divisions')->insert([
            'name' => 'Division de Electronia y Computacion',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
