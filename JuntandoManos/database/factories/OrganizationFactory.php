<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
  return [
    'name' => $faker->unique()->randomElement([
      'Fundación Par',
      'Red solidaria',
      'Caritas Argentina',
      'Fundación Cimientos',
    ])
  ];
});
