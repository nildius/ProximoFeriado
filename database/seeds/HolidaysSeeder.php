<?php

use Illuminate\Database\Seeder;

class HolidaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('holidays')->insert([
        	[
	            'date' => "Fecha del feriado",
	            'name' => "Nombre del feriado",
	            'description' => "Descripcion",
	            'country' => "Pais",
        	],
        	[
	            'date' => "Fecha del feriado",
	            'name' => "Nombre del feriado",
	            'description' => "Descripcion",
	            'country' => "Pais",
        	]
        ]);
    }
}
