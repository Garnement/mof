<?php

use Illuminate\Database\Seeder;

class EstablishmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Establishment::class, 50)->create();
    }
}
