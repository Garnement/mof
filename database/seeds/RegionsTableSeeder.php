<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              DB::table('regions')->insert([
               ['region_name' => 'Auvergne-Rhône-Alpes'],
               ['region_name' => 'Bourgogne-Franche-Comté'],
               ['region_name' => 'Bretagne'],
               ['region_name' => 'Centre Val de Loire'],
               ['region_name' => 'Corse'],
               ['region_name' => 'Grand Est'],
               ['region_name' => 'Hauts-de-France'],
               ['region_name' => 'Ile-de-France'],
               ['region_name' => 'Normandie'],
               ['region_name' => 'Nouvelle-Aquitaine'],
               ['region_name' => 'Occitanie'],
               ['region_name' => 'Pays de la Loire'],
               ['region_name' => 'Provence-Alpes-Côte d\'Azur'],
               ['region_name' => 'Guadeloupe'],
               ['region_name' => 'Martinique'],
               ['region_name' => 'Guyane'],
               ['region_name' => 'La Réunion'],
               ['region_name' => 'Mayotte']
       ]);
    }
}
