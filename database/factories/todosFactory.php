<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\todos::class,  function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'description' => $faker->paragraph(3),
        'completed' => false
        
    ];
});
