<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AlumnosSeeder::class);
         $this->call(ProfesorSeeder::class);
         $this->call(NotasSeeder::class);
         $this->call(CursosSeeder::class);
    }
}
