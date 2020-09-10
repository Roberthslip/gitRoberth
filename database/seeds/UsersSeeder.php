<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('users')->insert([
                'name' => $faker->userName,
                'password' => \Illuminate\Support\Facades\Hash::make('1234'),
                'email' => $faker->email,
                'permiso' => 0,
                'remember_token' => 0,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]);
        }
    }
}
