<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    protected $faker;

    public function __construct(Faker\Generator $faker)
    {
        $this->faker = $faker;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create()->each(function ($user){

            //On relie notre $user à un établissement
            $user->establishments()->attach(rand(1,50));

            //On attache des médailles à notre $user s'il est candidat
            $user->type == 'candidate' ? $user->medal_id = rand(1,4) : null;

            //On relie une entreprise à un candidat
            $user->companies()->attach(rand(1,20));


            $user->type == 'candidate' ? $user->speciality_id = rand(1,15) : null;

            $apprentice = [true, false];
            $rand = array_rand($apprentice);

            $statut = ['completed', 'uncompleted'];
            $rand2 = array_rand($statut);

            $gender = ['mr', 'mme'];
            $rand3 = array_rand($gender);

            $profile =  \App\Profile::create(
                [
                    'profile_address'                => $this->faker->streetAddress,
                    'profile_phone'                 => $this->faker->phonenumber,
                    'profile_birthdate'             => $this->faker->creditCardExpirationDate,
                    'profile_city'                  => $this->faker->city,
                    'profile_zip_code'              => $this->faker->buildingNumber,
                    'profile_file_attach'           => str_random(10),
                    'inscription_number'            => rand(1000000, 9999999),
                    'profile_statut'                => $statut[$rand2],
                    'gender'                        => $gender[$rand3],
                    'apprenticeship'                => $apprentice[$rand]
                ]
            );

            $user->type == 'candidate' ? $user->profile_id = $profile->id : null;

            $certificates =  \App\Certificate::create(
                [
                    'certificate_name'              => 'BEP',
                    'qualify'                       => rand(1,2)
                ]
            );

            $user->type == 'candidate' ? $user->certificates()->attach([$certificates->id]) : null;

            $user->save();

        });

        // id 21
        $master = App\User::create([
                'name'           => 'Guru',
                'firstName'      => 'Super',
                'email'          => 'guru@mof.com',
                'password'       => bcrypt('guru'),
                'remember_token' => str_random(10),
                'type'           => 'admin',
                'role_id'        => null,
                'medal_id'       => null,
                'speciality_id'  => null,
                'profile_id'     => null
        ]);

        $master->candidates()->attach([1,2,3,4,5,6]);

        // id 22
        $master2 = App\User::create([
                'name'           => 'SuperMaster',
                'firstName'      => 'superMaster',
                'email'          => 'super@super',
                'password'       => bcrypt('secret'),
                'remember_token' => str_random(10),
                'type'           => 'admin',
                'role_id'        => null,
                'medal_id'       => null,
                'speciality_id'  => null,
                'profile_id'     => null
        ]);

        $superEsta = App\Establishment::create([
                'establishment_name'                  => 'super establishment',
                'establishment_address'               => $this->faker->streetAddress,
                'establishment_city'                  => $this->faker->city,
                'establishment_zip_code'              => $this->faker->buildingNumber,
                'establishment_phone'                 => $this->faker->phonenumber,
                'establishment_email'                 => $this->faker->unique()->safeEmail,
                'establishment_manager_lastName'      => $this->faker->lastName,
                'establishment_manager_firstName'     => $this->faker->firstName($gender = null|'male'|'female'),
                'department_id'                       => 76
        ]);

        $master->establishments()->sync([$superEsta->id]);

        $master->save();

        $specialUser = App\User::find(19);

        $specialUser->name ='Super candidate';
        $specialUser->type = 'candidate';
        $specialUser->speciality_id = 2;

        $specialUser->establishments()->sync([$superEsta->id]);

        $specialUser->save();

        $master2->candidates()->attach([19]);

    }
}
