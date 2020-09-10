<?php

use Illuminate\Database\Seeder;

class JugadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0;$i<100;$i++) {
            DB::table('jugadores')->insert([
                'alias' => $faker->randomElement(array('Zurdo','Cris','Agus','Mole','Tin','Santi','Fefe','Mago','Dios','Asd','Peque','Tanque','Zaza','Johny','Tuque','Chispitas')),
                'posicion' => $faker->randomElement(array('Arquero','Defensor','Mediocampista','Delantero')),
                'numero' => $faker->numberBetween(1,99),
                'goles' => $faker->numberBetween(1,40),
                'asistencias' => $faker->numberBetween(1,30),
                'avatar' => $faker->randomElement(array('cristiano','bale','ramos','james','messi','neymar','suarez','iniesta','lewandowski','robben','ribery','neuer')),
                'id_equipo' => $faker->numberBetween(1,20),
                'id_cliente' => $i+1,
                'created_at' =>new DateTime,
                'updated_at'=>new DateTime
            ]);
        }
    }
}
