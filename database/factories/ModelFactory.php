<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    $type = ['admin', 'adminR', 'adminD', 'candidate'];
    $rand = array_rand($type);
    return [
        'name'                  => $faker->lastName,
        'firstName'             => $faker->firstName($gender = null |'male'|'female'),
        'email'                 => $faker->unique()->safeEmail,
        'password'              => $password ?: $password = bcrypt('secret'),
        'remember_token'        => str_random(10),
        'type'                  => $type[$rand],
        'role_id'               => null,
        'medal_id'              => rand(1,4),
        'speciality_id'         => null,
        'profile_id'            => null
    ];
});

// Fakers pour les établissements (Establishment)
$factory->define(App\Establishment::class, function(Faker\Generator $faker){
    
    return [
        'establishment_name'    => $faker->streetName,
        'address'               => $faker->streetAddress,
        'city'                  => $faker->city,
        'zip_code'              => $faker->buildingNumber,
        'phone'                 => $faker->phonenumber,
        'email'                 => $faker->unique()->safeEmail,
        'manager_lastName'      => $faker->lastName,
        'manager_firstName'     => $faker->firstName($gender = null|'male'|'female'),
        'department_id'         => rand(1, 101)
    ];

});
// Fakers pour les entreprises (Companies)
$factory->define(App\Company::class, function(Faker\Generator $faker){
    
    return [
        'company_name'           => $faker->streetName,
        'address'                => $faker->streetAddress,
        'city'                   => $faker->city,
        'zip_code'               => $faker->buildingNumber,
        'phone'                  => $faker->phonenumber,
        'email'                  => $faker->unique()->safeEmail,
        'manager_lastName'       => $faker->lastName,
        'manager_firstName'      => $faker->firstName($gender = null|'male'|'female'),
        'department'             => rand(1, 101)
    ];

});

// Fakers pour les profils (Profiles)
$factory->define(App\Profile::class, function(Faker\Generator $faker){

    $apprentice = [true, false];
    $rand = array_rand($apprentice);

    $statut = ['completed', 'uncompleted'];
    $rand2 = array_rand($statut);

    $gender = ['mr', 'mme'];
    $rand3 = array_rand($gender);

    return [
        'adress'                => $faker->streetAddress,
        'phone'                 => $faker->phonenumber,
        'birthdate'             => $faker->creditCardExpirationDate,
        'city'                  => $faker->city,
        'file_attach'           => str_random(10),
        'inscription_number'    => rand(1000000, 9999999),
        'statut'                => $statut[$rand2],
        'gender'                => $gender[$rand3],
        'apprenticeship'        => $apprentice[$rand]
      ];
});

$factory->define(App\Profile::class, function(Faker\Generator $faker){

    return [
        'speciality_name' => $faker->jobTitle,
        'speciality_code' => $faker->buildingNumber
    ];
});