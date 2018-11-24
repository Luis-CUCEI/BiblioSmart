<?php

use Illuminate\Database\Seeder;

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
        ]);

        DB::table('divisions')->insert([
            'name' => 'Division de Ingenierias',
        ]);

        DB::table('divisions')->insert([
            'name' => 'Division de Electronia y Computacion',
        ]);
    }
}
