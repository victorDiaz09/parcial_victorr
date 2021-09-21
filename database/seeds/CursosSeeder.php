<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'id_cursos'=> '1',
            'nombre_curso'=> 'ProgramacionII',
            'año'=> '2021',
            'ciclo'=> '2/2021',
            'id_profesor'=> '1'
        ]);
    }
}
