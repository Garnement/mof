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
            ['type' => 'gold'],
            ['type' => 'silver'],
            ['type' => 'bronze'],
            ['type' => 'away'],
            ['type' => 'none']

        ]);
    }
}
