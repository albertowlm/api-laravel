<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\PlanoDeSaude::class, function (Faker $faker) {
    return [
        'nome' => $faker->domainName,
        'logo' => $faker->md5,
        'status' => $faker->boolean
    ];
});
