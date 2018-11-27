<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DegreesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('degrees')->insert([
            'career' => 'Ingenieria en Computacion',
            'division_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Ingenieria en Robotica',
            'division_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Ingenieria en Informatica',
            'division_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Ingenieria Comunicaciones y Electronica',
            'division_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Ingenieria en Biomedica',
            'division_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Ingenieria en Fotonica',
            'division_id' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Licenciatura en Quimico Farmaco Biologo',
            'division_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Licenciatura en Fisica',
            'division_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Licenciatura en Matematicas',
            'division_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Licenciatura en Quimica',
            'division_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Ingenieria Civil',
            'division_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Ingenieria Industrial',
            'division_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Ingenieria Mecanica Electrica',
            'division_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Lecenciatura en Ciencia de los Materiales',
            'division_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Ingenieria Topografica',
            'division_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Ingenieria en Alimentos y Biotecnologia',
            'division_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Ingenieria Quimica',
            'division_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('degrees')->insert([
            'career' => 'Ingenieria el Logica y Transporte',
            'division_id' => '2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
