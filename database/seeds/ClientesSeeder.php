<?php

use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0;$i<100;$i++){
            DB::table('clientes')->insert([
                'nombre' => $faker->firstNameMale,
                'apellido' => $faker->firstNameMale,
                'edad' => $faker->numberBetween(15,40),
                'id_users' => $i+1,
                'created_at' =>new DateTime,
                'updated_at'=>new DateTime
            ]);
        }
    }
}
