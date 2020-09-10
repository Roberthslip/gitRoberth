<?php

use Illuminate\Database\Seeder;

class TorneosEquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0;$i<50;$i++){
            DB::table('torneosEquipos')->insert([
                'fecha_inscripcion' => $faker->dateTime,
                'id_torneo' => $faker->numberBetween(1,12),
                'id_equipo' => $faker->numberBetween(1,20),
                'created_at' =>new DateTime,
                'updated_at'=>new DateTime
            ]);
        }
    }
}