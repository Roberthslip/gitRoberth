<?php

use Illuminate\Database\Seeder;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0;$i<20;$i++) {
            DB::table('equipos')->insert([
                'nombre' => $faker->company,
                'barrio' => $faker->city,
                'id_sede' => $i+1,
                'created_at' =>new DateTime,
                'updated_at'=>new DateTime
            ]);
        }
    }
}
