<?php

use Illuminate\Database\Seeder;

class SedesSeeder extends Seeder
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
            DB::table('sedes')->insert([
                'sede' => $faker->company,
                'direccion' => $faker->address,
                'created_at' =>new DateTime,
                'updated_at'=>new DateTime
            ]);
        }
    }
}
