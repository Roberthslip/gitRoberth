<?php

use Illuminate\Database\Seeder;

class TorneosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0;$i<12;$i++){
            DB::table('torneos')->insert([
                'nombre' => $faker->randomElement(array('Torneo A I','Torneo B I','Torneo C I','Torneo A II','Torneo B II','Torneo C II','Torneo A III','Torneo B III','Torneo C III','Torneo A IV','Torneo B IV','Torneo C IV','Torneo A V','Torneo B V','Torneo C V','Torneo A VI','Torneo B VI','Torneo C VI')),
                'formato' => $faker->randomElement(array('Eliminacion','Fase de grupos','Especial')),
                'inicia' => $faker->randomElement(array('20/10/2016','21/12/2016','14/10/2016','07/10/2016','30/12/2016','17/10/2016','02/10/2016','01/12/2016','05/10/2016','12/10/2016','13/12/2016','11/10/2016','10/10/2016','29/12/2016','28/10/2016','30/10/2016','05/12/2016','18/10/2016')),
                'termina' => $faker->randomElement(array('20/10/2017','21/12/2017','14/10/2017','07/10/2017','30/12/2017','17/10/2017','02/10/2017','01/12/2017','05/10/2017','12/10/2017','13/12/2017','11/10/2017','10/10/2017','29/12/2017','28/10/2017','30/10/2017','05/12/2017','18/10/2017')),
                'created_at' =>new DateTime,
                'updated_at'=>new DateTime
            ]);
        }

    }
}