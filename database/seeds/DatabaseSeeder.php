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
        $this->call(RegionsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(EstablishmentsTableSeeder::class);
        $this->call(MedalsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        //$this->call(ProfilesTableSeeder::class);
        $this->call(SpecialitiesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
