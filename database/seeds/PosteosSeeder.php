<?php

use Illuminate\Database\Seeder;

class PosteosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0;$i<10;$i++) {
            DB::table('posteos')->insert([
                'titulo' => $faker->randomElement(array('El dios del futbol ha vuelto','Clasico muy facil','Empate sobre los penales a ultima hora','De no creer lo que ha sucedido','#Todos chapecoense','Se decidio en la ultima jugada','Celestial Sergio Ramos')),
                'descripcion' => $faker->paragraph,
                'imagen' => $i+1,
                'id_cliente' => $faker->numberBetween(1,100),
                'created_at' =>new DateTime,
                'updated_at'=>new DateTime
            ]);
        }
    }
}
