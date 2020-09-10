<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UsersSeeder');
        $this->call('ClientesSeeder');
        $this->call('SedesSeeder');
        $this->call('EquiposSeeder');
        $this->call('JugadoresSeeder');
        $this->call('PosteosSeeder');
        $this->call('TorneosSeeder');
        $this->call('TorneosEquiposSeeder');

        Model::reguard();
    }
}
