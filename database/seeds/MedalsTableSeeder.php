<?php

use Illuminate\Database\Seeder;

class MedalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medals')->insert([
            ['medal_type' => 'gold'],
            ['medal_type' => 'silver'],
            ['medal_type' => 'bronze'],
            ['medal_type' => 'away'],
            ['medal_type' => 'none']

        ]);
    }
}
