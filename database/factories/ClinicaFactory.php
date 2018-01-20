<?php

use Faker\Generator as Faker;
require_once __DIR__ . '/../faker_data/gerador_cnpj.php';
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Clinica::class, function (Faker $faker) {
    $cnpjs = cnpjs();
    return [
        'cnpj' => $cnpjs[array_rand($cnpjs,1)],
        'nome' => $faker->userName,
        'user_id' =>  $faker->randomElement(App\User::pluck('id')->toArray())

    ];
});
