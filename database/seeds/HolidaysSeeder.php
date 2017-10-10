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
	            'date' => "2017-10-16",
	            'name' => "Día del Respeto a la Diversidad Cultural.",
	            'description' => "Día del Respeto a la Diversidad Cultural es el nombre que recibe en Argentina el 12 de octubre, (anteriormente denominado -Día de la raza-)",
	            'country' => "AR",
        	],
        	[
	            'date' => "2017-11-20",
	            'name' => "Día de la Soberanía Nacional.",
	            'description' => "El 20 de noviembre se celebra el Día de la Soberanía Nacional, en conmemoración de la batalla de Vuelta de Obligado de 1845. En aquel entonces, los heroicos soldados argentinos, en inferioridad de condiciones, resistieron la invasión del ejército anglo-francés, el más poderoso del mundo.",
	            'country' => "AR",
        	],
            [
                'date' => "2017-12-08",
                'name' => "Inmaculada Concepción de María.",
                'description' => "Cada 8 de diciembre, la Iglesia celebra el dogma de fe que nos revela que, por la gracia de Dios, la Virgen María fue preservada del pecado desde el momento de su concepción, es decir desde el instante en que María comenzó la vida humana.",
                'country' => "AR",
            ],
            [
                'date' => "2017-12-25",
                'name' => "Navidad",
                'description' => "La navidad  es una de las festividades más importantes del cristianismo, junto con la Pascua de resurrección y Pentecostés. Esta solemnidad, que conmemora el nacimiento de Jesucristo en Belén, se celebra el 25 de diciembre en la Iglesia católica, en la Iglesia anglicana, en algunas comunidades protestantes y en la mayoría de las Iglesias ortodoxas.",
                'country' => "AR",
            ]
        ]);
    }
}
