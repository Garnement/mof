<?php

use Illuminate\Database\Seeder;

class CertificatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('certificates')->insert([
            ['certificate_name' => 'CAP', 'qualify' => rand(1,2)],
            ['certificate_name' => 'BEP', 'qualify' => rand(1,2)],
            ['certificate_name' => 'BAC Pro', 'qualify' => rand(1,2)]
        ]);
    }
}
